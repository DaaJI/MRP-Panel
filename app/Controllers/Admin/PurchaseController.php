<?php

namespace App\Controllers\Admin;

use App\Models\User;
use App\Models\Depository;
use App\Models\Purchase;
use App\Models\Ini;
use App\Controllers\AdminController;
use App\Services\Config;
use Ozdemir\Datatables\Datatables;
use App\Utils\DatatablesHelper;

//use App\Utils\Radius;use App\Utils\Telegram;use App\Utils\Tools;use App\Utils\CloudflareDriver;

class PurchaseController extends AdminController
{
    public function index($request, $response, $args)
    {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'status' => '状态', 
            'depo_id' => '物料ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'info' => '备注',
            'stock' => '数量', 'q_unit' => '单位', 'ori_price' => '基准单价', 'float_price' => '浮动单价');
            //'last_time' => '最后时间'

        $table_config['default_show_column'] = array('op', 'id', 'depo_id', 'm_id', 'name', 'size', 'status', 'info', 'stock', 'q_unit', 'ori_price', 'float_price');
        $table_config['ajax_url'] = 'purchase/ajax';

        return $this->view()->assign('table_config', $table_config)->display('admin/purchase/index.tpl');
    }

    public function create($request, $response, $args)
    {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID',
            'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'stock' => '数量', 'q_unit' => '单位', 'ori_price' => '基准单价', 'float_price' => '浮动单价');

        $table_config['default_show_column'] = array('op', 'id', 'm_id', 'name', 'size', 'status', 'info');
        $table_config['ajax_url'] = 'ajax_add';

        return $this->view()->assign('table_config', $table_config)->display('admin/purchase/create.tpl');
    }

    public function createbak($request, $response, $args)
    {
        return $this->view()->display('admin/purchase/create.tpl');
    }

    public function add($request, $response, $args)
    {
        $id = $request->getParam('id');
        $add = Depository::find($id);
        //return $this->view()->assign('node', $node)->display('admin/purchase/edit.tpl');

        $node = new Purchase();
        $node->depo_id = $add->id;
        $node->m_id = $add->m_id;
        $node->name = $add->name;
        $node->size = $add->size;
        $node->q_unit = $add->q_unit;
        $node->ori_price = $request->getParam('ori_price');
        $node->float_price = $request->getParam('float_price');
        $node->info = $request->getParam('info');
        $node->stock = $request->getParam('stock');

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '添加成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function edit($request, $response, $args)
    {
        $id = $args['id'];
        $node = Purchase::find($id);
        if($node->status) {
            return $this->view()->display('admin/purchase/edit.tpl');
        }
        return $this->view()->assign('node', $node)->display('admin/purchase/edit.tpl');
    }

    public function create_edit($request, $response, $args)
    {
        $id = $args['id'];
        $node = Depository::find($id);
        return $this->view()->assign('node', $node)->display('admin/purchase/create_edit.tpl');
    }

    public function update($request, $response, $args)
    {
        $id = $args['id'];
        $node = Purchase::find($id);

        $node->name = $request->getParam('name');
        $node->info = $request->getParam('info');
        $node->m_id = $request->getParam('m_id');
        $node->size = $request->getParam('size');
        $node->ori_price = $request->getParam('ori_price');
        $node->float_price = $request->getParam('float_price');
        $node->stock = $request->getParam('stock');

        $success = true;

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function settle($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = Purchase::find($id);
        $depo = Depository::find($node->depo_id);

        if ($node->status) {
            $depo->ori_price = ($depo->ori_price * $depo->all_stock - $node->ori_price * $node->stock) / ($depo->all_stock - $node->stock);
            $depo->float_price = ($depo->float_price * $depo->all_stock - $node->float_price * $node->stock) / ($depo->all_stock - $node->stock);
            $depo->all_stock = $depo->all_stock - $node->stock;
            $node->status = 0;
            $depo->save();
            $node->save();

            $ini = Ini::find(1);
            $ini->oid = 1;
            $ini->save();

            $rs['ret'] = 1;
            $rs['msg'] = '撤销成功';
            return $response->getBody()->write(json_encode($rs));

        }else{
            $depo->ori_price = ($depo->ori_price * $depo->all_stock + $node->ori_price * $node->stock) / ($depo->all_stock + $node->stock);
            $depo->float_price = ($depo->float_price * $depo->all_stock + $node->float_price * $node->stock) / ($depo->all_stock + $node->stock);
            $depo->all_stock = $depo->all_stock + $node->stock;

            $node->status = 1;
            $depo->save();
            $node->save();

            $ini = Ini::find(1);
            $ini->oid = 1;
            $ini->save();

            $rs['ret'] = 1;
            $rs['msg'] = '入仓成功';
            return $response->getBody()->write(json_encode($rs));
        }
    }

    public function delete($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = Purchase::find($id);

        $name = $node->name;

        if ($node->status) {
            $rs['ret'] = 0;
            $rs['msg'] = '删除失败';
            return $response->getBody()->write(json_encode($rs));
        }

        if (!$node->delete()) {
            $rs['ret'] = 0;
            $rs['msg'] = '删除失败';
            return $response->getBody()->write(json_encode($rs));
        }

        $rs['ret'] = 1;
        $rs['msg'] = '删除成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function ajax($request, $response, $args)
    {
        $datatables = new Datatables(new DatatablesHelper());

        $total_column = array('op' => '操作', 'id' => 'ID', 'status' => '状态', 
            'depo_id' => '物料ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'info' => '备注',
            'stock' => '数量', 'q_unit' => '单位', 'ori_price' => '基准单价', 'float_price' => '浮动单价',
            'last_time' => '最后时间');

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }
        $datatables->query('Select ' . $key_str . ' from purchase');

        $datatables->edit('op', static function ($data) {
            if ($data['status'] == 0) {
                return '<a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'href="/admin/purchase/' . $data['id'] . '/edit"') . '>编辑</a>
                        <a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'id="settle" value="' . $data['id'] . '" href="javascript:void(0);" onClick="settle_modal_show(\'' . $data['id'] . '\')"') . '>入仓</a>
                        <a class="btn btn-brand-accent" ' . ($data['status'] == 1 ? 'disabled' : 'id="delete" value="' . $data['id'] . '" href="javascript:void(0);" onClick="delete_modal_show(\'' . $data['id'] . '\')"') . '>删除</a>';
            }else{
                return '<a class="btn btn-red" ' . ('id="settle" value="' . $data['id'] . '" href="javascript:void(0);" onClick="settle_modal_show(\'' . $data['id'] . '\')"') . '>撤销入仓</a>';
            }
        });

        $datatables->edit('status', static function ($data) {
            return $data['status'] == 1 ? '已入仓' : '待入仓';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }

    public function ajax_add($request, $response, $args)
    {
        $datatables = new Datatables(new DatatablesHelper());

        $total_column = array('op' => '操作', 'id' => 'ID',
            'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'stock' => '数量', 'q_unit' => '单位', 'ori_price' => '基准单价', 'float_price' => '浮动单价');

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }
        $datatables->query('Select ' . $key_str . ' from depository');

        $datatables->edit('op', static function ($data) {
            return '<a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'href="/admin/purchase/' . $data['id'] . '/create_edit"') . '>选择</a>';
                    //<a class="btn btn-brand" ' . ($data['status'] == 2 ? 'disabled' : 'id="settle" value="' . $data['id'] . '" href="javascript:void(0);" onClick="settle_modal_show(\'' . $data['id'] . '\')"') . '>采购</a>
                    //<a class="btn btn-brand-accent" ' . ($data['status'] == 1 ? 'disabled' : 'id="delet" value="' . $data['id'] . '" href="javascript:void(0);" onClick="delet_modal_show(\'' . $data['id'] . '\')"') . '>留空</a>';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }
}
