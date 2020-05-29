<?php

namespace App\Controllers\Admin;

use App\Services\Auth;
use App\Models\Depository;
use App\Models\Ini;
use App\Controllers\AdminController;
use Ozdemir\Datatables\Datatables;
use App\Utils\DatatablesHelper;

//use App\Utils\Radius;use App\Utils\Telegram;use App\Utils\Tools;use App\Utils\CloudflareDriver;use App\Services\Config;

class DepositoryController extends AdminController
{
    public function index($request, $response, $args)
    {
        $user = Auth::getUser();

        if ($user->is_tech || $user->is_depo) {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'ex_1' => '例外组1', 'ex_2' => '例外组2', 'ex_3' => '例外组3', 'ex_4' => '例外组4', 'ex_5' => '例外组5',
            'status' => '状态', 'q_unit' => '数量单位', 'pre_in' => '预入库量',
            'all_stock' => '总量', 'used_stock' => '已分配', 'stock' => '余量', 'info' => '备注');
        }

        if ($user->is_su || $user->is_whadmin) {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'ex_1' => '例外组1', 'ex_2' => '例外组2', 'ex_3' => '例外组3', 'ex_4' => '例外组4', 'ex_5' => '例外组5',
            'status' => '状态', 'ori_price' => '基准单价', 'float_price' => '浮动单价', 'q_unit' => '数量单位',
            'pre_in' => '预入库量', 'all_stock' => '总量', 'used_stock' => '已分配', 'stock' => '余量', 'info' => '备注');
        }

        $table_config['default_show_column'] = array('op', 'id', 'name', 'size', 'size_unit', 'status', 'info',
            'm_id', 'stock', 'ori_price', 'float_price', 'q_unit', 'pre_in');
        $table_config['ajax_url'] = 'depository/ajax';

        return $this->view()->assign('table_config', $table_config)->display('admin/depository/index.tpl');
    }

    public function create($request, $response, $args)
    {
        return $this->view()->display('admin/depository/create.tpl');
    }

    public function purchase($request, $response, $args)
    {
        return $this->view()->display('admin/depository/purchase.tpl');
    }

    public function add($request, $response, $args)
    {
        $node = new Depository();
        $node->name = $request->getParam('name');
        $node->info = $request->getParam('info');

        $node->m_id = $request->getParam('m_id');
        $node->size = $request->getParam('size');
        $node->q_unit = $request->getParam('q_unit');

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '添加成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function edit($request, $response, $args)
    {
        $id = $args['id'];
        $node = Depository::find($id);
        $user = Auth::getUser();

        if (!$user->is_su && !$user->is_whadmin) {
        $node->ori_price = '-1'; 
        $node->float_price = '-1'; 
        }

        return $this->view()->assign('node', $node)->assign('user', $user)->display('admin/depository/edit.tpl');
    }

    public function update_all($request, $response, $args)
    {
        $now = Depository::where(
            static function ($query) {}
        )->orderBy('id')->get();

        foreach ($now as $single) {
            $node = Depository::find($single->id);
            $node->ori_price = $node->ori_price + 1;
            $node->float_price = $node->float_price + 1;
            $node->save();
            $node->ori_price = $node->ori_price - 1;
            $node->float_price = $node->float_price - 1;
            $node->save();
        }
        return ('finished');
    }

    public function update($request, $response, $args)
    {
        $id = $args['id'];
        $node = Depository::find($id);

        $node->name = $request->getParam('name');
        $node->info = $request->getParam('info');
        $node->status = $request->getParam('status');
        $node->m_id = $request->getParam('m_id');
        $node->size = $request->getParam('size');
        $node->pre_in = $request->getParam('pre_in');

        $user = Auth::getUser();

        if ($user->is_su || $user->is_whadmin) {
        $node->ori_price = $request->getParam('ori_price');
        $node->float_price = $request->getParam('float_price');
        }

        $node->q_unit = $request->getParam('q_unit');

        $node->all_stock = $request->getParam('all_stock');
        $node->used_stock = $request->getParam('used_stock');
        $node->stock = $request->getParam('stock');
        $node->critical_stock = $request->getParam('critical_stock');

        $node->ex_1 = $request->getParam('e1');
        $node->ex_2 = $request->getParam('e2');
        $node->ex_3 = $request->getParam('e3');
        $node->ex_4 = $request->getParam('e4');
        $node->ex_5 = $request->getParam('e5');

        $success = true;

        $node->save();
        $ini = Ini::find(1);
        $ini->oid = 1;
        $ini->save();

        $rs['ret'] = 1;
        $rs['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($rs));
    }


    public function delete($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = Depository::find($id);

        $name = $node->name;

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
        $user = Auth::getUser();

        if ($user->is_tech || $user->is_depo) {
        $total_column = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'ex_1' => '例外组1', 'ex_2' => '例外组2', 'ex_3' => '例外组3', 'ex_4' => '例外组4', 'ex_5' => '例外组5',
            'status' => '状态', 'q_unit' => '数量单位', 'pre_in' => '预入库量', 'critical_stock' => '物料不足阈值',
            'all_stock' => '总量', 'used_stock' => '已分配', 'stock' => '余量', 'info' => '备注', 'last_time' => '最后时间');
        }

        if ($user->is_su || $user->is_whadmin) {
        $total_column = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'ex_1' => '例外组1', 'ex_2' => '例外组2', 'ex_3' => '例外组3', 'ex_4' => '例外组4', 'ex_5' => '例外组5',
            'status' => '状态', 'ori_price' => '基准单价', 'float_price' => '浮动单价', 'q_unit' => '数量单位', 'critical_stock' => '物料不足阈值',
            'pre_in' => '预入库量', 'all_stock' => '总量', 'used_stock' => '已分配', 'stock' => '余量', 'info' => '备注', 'last_time' => '最后时间');
        }

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
            return '<a class="btn btn-brand" ' . ($data['id'] == 0 ? 'disabled' : 'href="/admin/depository/' . $data['id'] . '/edit"') . '>编辑</a>
                    <a class="btn btn-brand-accent" ' . ($data['id'] == 0 ? 'disabled' : 'id="delete" value="' . $data['id'] . '" href="javascript:void(0);" onClick="delete_modal_show(\'' . $data['id'] . '\')"') . '>删除</a>';
        });

        $datatables->edit('status', static function ($data) {
            if ($data['status'] == 1 && $data['critical_stock'] > $data['stock']) {
                return $data['status'] = '较少';
            }else{
            return $data['status'] == 1 ? '充足' : '下架';
            }

        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }
}
