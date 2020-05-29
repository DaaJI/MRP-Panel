<?php

namespace App\Controllers\Admin;

use App\Services\Auth;
use App\Models\SelectSpare;
use App\Models\Order;
use App\Models\Ini;
use App\Models\Product;
use App\Controllers\AdminController;
use Ozdemir\Datatables\Datatables;
use App\Utils\DatatablesHelper;
use App\Utils\Sheet;

// use App\Models\OrderList;use App\Utils\Radius;use App\Utils\Telegram;use App\Utils\Tools;use App\Utils\CloudflareDriver;use App\Services\Config;use PhpOffice\PhpSpreadsheet;

class OrderController extends AdminController
{
    public function index($request, $response, $args)
    {
        $user = Auth::getUser();

        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'p_id' => '产品ID', 'name' => '产品名称', 'status' => '状态',
            'num' => '数量', 'enough' => '订单物料', 'info' => '备注');

        $table_config['default_show_column'] = array('op', 'id', 'name', 'info', 'num', 'status', 'p_id', 'enough');
        $table_config['ajax_url'] = 'order/ajax';

        return $this->view()->assign('table_config', $table_config)->display('admin/order/index.tpl');
    }

    public function create($request, $response, $args)
    {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'name' => '清单名称',
            'enough' => '物料', 'info' => '备注');

        $table_config['default_show_column'] = array('op', 'id', 'enough', 'name', 'info');
        $table_config['ajax_url'] = 'ajax_add';

        return $this->view()->assign('table_config', $table_config)->display('admin/order/create.tpl');
    }

    public function create_to_list($request, $response, $args)
    {
        $oid = $args['oid'];
        $id = $args['sid'];
        $node = Product::find($id);
        $order = Order::find($oid);

        return $this->view()->assign('node', $node)->assign('order', $order)->display('admin/order/create_to_list.tpl');
    }

    public function create_edit($request, $response, $args)
    {
        $id = $args['id'];
        $node = Product::find($id);
        return $this->view()->assign('node', $node)->display('admin/order/create_edit.tpl');
    }

    public function add($request, $response, $args)
    {
        $node = new Order();
        $node->p_id = $request->getParam('id');
        $node->info = $request->getParam('info');
        $node->num = $request->getParam('num');

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '添加成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function edit($request, $response, $args)
    {
        $id = $args['id'];
        $node = Order::find($id);
        if($node->status) {
            return $this->view()->display('admin/order/edit.tpl');
        }
        return $this->view()->assign('node', $node)->display('admin/order/edit.tpl');
    }

    public function settle($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = Order::find($id);

        if ($node->status) {
            $node->status = 0;
            $node->save();
            $ini = Ini::find(1);
            $ini->oid = 1;
            $ini->save();

            $rs['ret'] = 1;
            $rs['msg'] = '撤销成功';
            return $response->getBody()->write(json_encode($rs));

        }else{
            if ($node->enough) {
                $node->status = 1;
                $node->save();

                $ini = Ini::find(1);
                $ini->oid = 1;
                $ini->save();

                $rs['ret'] = 1;
                $rs['msg'] = '出仓成功';
                return $response->getBody()->write(json_encode($rs));
            }else{
                $rs['ret'] = 0;
                $rs['msg'] = '物料不足';
                return $response->getBody()->write(json_encode($rs));
            }
        }
    }

    public function update($request, $response, $args)
    {
        $id = $args['id'];
        $node = Order::find($id);

        $node->num = $request->getParam('num');
        $node->info = $request->getParam('info');

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function delete($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = Order::find($id);

        if (!$node->delete()) {
            $rs['ret'] = 0;
            $rs['msg'] = '删除失败';
            return $response->getBody()->write(json_encode($rs));
        }

        $rs['ret'] = 1;
        $rs['msg'] = '删除成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function ajax_add($request, $response, $args)
    {
        $datatables = new Datatables(new DatatablesHelper());

        $total_column = array('op' => '操作', 'id' => 'ID', 'name' => '清单名称',
            'enough' => '物料', 'info' => '备注');

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }
        $datatables->query('Select ' . $key_str . ' from assemble_2');

        $datatables->edit('op', static function ($data) {

            return '<a class="btn btn-brand" ' . ('href="/admin/order/' . $data['id'] . '/create_edit"') . '>选择</a>';
        });

        $datatables->edit('enough', static function ($data) {
            return $data['enough'] == 1 ? '充足' : '缺少';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }

    public function ajax($request, $response, $args)
    {
        $datatables = new Datatables(new DatatablesHelper());
        $user = Auth::getUser();

        $total_column = array('op' => '操作', 'id' => 'ID', 'p_id' => '产品ID', 'status' => '状态', 'name' => '产品名称',
            'num' => '数量', 'enough' => '订单物料', 'info' => '备注');

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }
        $datatables->query('Select ' . $key_str . ' from order_list');

        $datatables->edit('op', static function ($data) {
            if ($data['status'] == 0) {
                return '<a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'href="/admin/order/' . $data['id'] . '/edit"') . '>编辑</a>
                        <a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'id="settle" value="' . $data['id'] . '" href="javascript:void(0);" onClick="settle_modal_show(\'' . $data['id'] . '\')"') . '>出仓</a>
                        <a class="btn btn-brand-accent" ' . ($data['status'] == 1 ? 'disabled' : 'id="delete" value="' . $data['id'] . '" href="javascript:void(0);" onClick="delete_modal_show(\'' . $data['id'] . '\')"') . '>删除</a>';
            }else{
                return '<a class="btn btn-red" ' . ('id="settle" value="' . $data['id'] . '" href="javascript:void(0);" onClick="settle_modal_show(\'' . $data['id'] . '\')"') . '>撤销出仓</a>';
            }
        });

        $datatables->edit('status', static function ($data) {
            return $data['status'] == 1 ? '已出仓' : '待出仓';
        });

        $datatables->edit('enough', static function ($data) {
            return $data['enough'] == 1 ? '充足' : '缺少';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }
}
