<?php

namespace App\Controllers\Admin;

use App\Services\Auth;
use App\Models\SelectSpare;
use App\Models\AssemList;
use App\Models\Depository;
use App\Models\Assassin;
use App\Models\Product;
use App\Controllers\AdminController;
use Ozdemir\Datatables\Datatables;
use App\Utils\DatatablesHelper;
use App\Utils\Sheet;

// use App\Utils\Radius;use App\Utils\Telegram;use App\Utils\Tools;use App\Utils\CloudflareDriver;use App\Services\Config;use PhpOffice\PhpSpreadsheet;

class ProductController extends AdminController
{
    public function index($request, $response, $args)
    {
        $user = Auth::getUser();

        if ($user->is_tech || $user->is_depo || $user->is_sales) {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'name' => '清单名称',
            'enough' => '物料', 'info' => '备注');
        }
        if ($user->is_su) {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'name' => '清单名称',
            'price' => '价格', 'cost' => '成本', 'enough' => '物料',
            'profit_rate' => '利润率', 'tax_rate' => '税率', 'processing_rate' => '加工费率', 'info' => '备注');
        }

        $table_config['default_show_column'] = array('op', 'id', 'name', 'info', 'price', 'cost', 'enough',
            'profit_rate', 'tax_rate', 'processing_rate');
        $table_config['ajax_url'] = 'product/ajax';

        return $this->view()->assign('table_config', $table_config)->display('admin/product/index.tpl');
    }

    public function create($request, $response, $args)
    {

        return $this->view()->display('admin/product/create.tpl');
    }

    public function create_to_list($request, $response, $args)
    {
        $oid = $args['oid'];
        $id = $args['sid'];
        $node = Depository::find($id);
        $order = Product::find($oid);

        return $this->view()->assign('node', $node)->assign('order', $order)->display('admin/product/create_to_list.tpl');
    }

    public function add($request, $response, $args)
    {
        $node = new Product();
        $node->name = $request->getParam('name');
        $node->info = $request->getParam('info');

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '添加成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function add_to_list($request, $response, $args)
    {
        $now->id = $request->getParam('id');
        $now->oid = $request->getParam('oid');
        $exist = AssemList::where(
            static function ($query) use ($now) {
                $query->Where('product_ID', $now->oid)->Where('spare_ID', $now->id);
            }
        )->get();

        if ($exist == '[]') {
            $node = new AssemList();
            $node->product_ID = $request->getParam('oid');
            $node->spare_ID = $request->getParam('id');
            $node->spare_num = $request->getParam('stock');
            $node->info = $request->getParam('info');

            $node->save();

            $rs['ret'] = 1;
            $rs['msg'] = '添加成功';
            return $response->getBody()->write(json_encode($rs));
        }else{
            $rs['ret'] = 0;
            $rs['msg'] = '清单中已存在该物料';
            return $response->getBody()->write(json_encode($rs));
        }
    }

    public function edit($request, $response, $args)
    {
        $id = $args['id'];
        $node = Product::find($id);
        $user = Auth::getUser();

        if (!$user->is_su) {
        $node->profit_rate = -1;
        $node->tax_rate = -1;
        $node->processing_rate = -1;
        }

        return $this->view()->assign('node', $node)->assign('user', $user)->display('admin/product/edit.tpl');
    }

    public function product_detail_sheet($request, $response, $args)
    {
        $id = $args['id'];
        $ret = Sheet::product_detail($id);

        // header
        header("Content-Type: application/vnd.ms-excel; charset=big5");
        header("Content-Disposition:p_w_upload;filename=$ret");

        return readfile('download/'. $ret .'');
    }

    public function edit_in_list($request, $response, $args)
    {
        $sid = $args['sid'];
        $oid = $args['oid'];
        $product = Product::find($oid);
        $assem = AssemList::find($sid);
        $spare = Depository::find($assem->spare_ID);
        return $this->view()->assign('product', $product)->assign('assem', $assem)->assign('spare', $spare)->display('admin/product/edit_in_list.tpl');
    }

    public function edit_list($request, $response, $args)
    {

        $id = $args['id'];
        $node = Product::find($id);
        $user = Auth::getUser();

        $table_2_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'num' => '数量',
            'q_unit' => '单位', 'enough' => '物料', 'info' => '备注');
        $table_2_config['default_show_column'] = array('op', 'id', 'm_id', 'name', 'size', 'num', 'q_unit', 'info');

        if ($user->is_su) {
        $table_2_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'num' => '数量',
            'q_unit' => '单位', 'enough' => '物料', 'ori_price' => '基准单价', 'float_price' => '浮动单价', 'subtotal' => '小计', 'info' => '备注');
        $table_2_config['default_show_column'] = array('op', 'id', 'm_id', 'name', 'size', 'num', 'q_unit', 'info');
        }
        $table_2_config['ajax_url'] = 'ajax_add';

        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID',
            'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格',
            'stock' => '库存量', 'q_unit' => '单位', 'info' => '备注');
        $table_config['default_show_column'] = array('op', 'id', 'm_id', 'name', 'size', 'stock', 'q_unit');
        $table_config['ajax_url'] = 'ajax_depo';

        $ref_from = Product::where(
            static function ($query) {}
        )->orderBy('name')->get();

        return $this->view()->assign('table_config', $table_config)->assign('table_2_config', $table_2_config)->assign('node', $node)->assign('ref_from', $ref_from)->display('admin/product/edit_list.tpl');
    }

    public function update_in_list($request, $response, $args)
    {
        $id = $args['id'];
        $node = AssemList::find($id);

        $node->spare_num = $request->getParam('num');
        $node->info = $request->getParam('info');

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function add_from($request, $response, $args)
    {
        $id = $args['id'];
        $ref = $request->getParam('ref');
        $now = AssemList::where(
            static function ($query) use ($id) {
                $query->Where('product_ID', $id);
            }
        )->orderBy('id')->get();

        if ($now == '[]') {
            $all = AssemList::where(
                static function ($query) use ($ref) {
                    $query->Where('product_ID', $ref);
                }
            )->orderBy('id')->get();

            foreach ($all as $single) {
                $node = new AssemList();
                $node->product_ID = $id;
                $node->spare_ID = $single->spare_ID;
                $node->spare_num = $single->spare_num;
                $node->info = $single->info;
                $node->save();
            }

            $rs['ret'] = 1;
            $rs['msg'] = '导入成功';
            return $response->getBody()->write(json_encode($rs));
        }else{
            $rs['ret'] = 0;
            $rs['msg'] = '导入失败';
            return $response->getBody()->write(json_encode($rs));
        }
    }

    public function update($request, $response, $args)
    {
        $id = $args['id'];
        $node = Product::find($id);
        $user = Auth::getUser();

        $node->name = $request->getParam('name');
        $node->info = $request->getParam('info');

        if ($user->is_su) {
            $node->profit_rate = $request->getParam('profit_rate');
            $node->tax_rate = $request->getParam('tax_rate');
            $node->processing_rate = $request->getParam('processing_rate');

            if ($request->getParam('profit_rate') == '') {
                $node->profit_rate = -1;
            }
            if ($request->getParam('tax_rate') == '') {
                $node->tax_rate = -1;
            }
            if ($request->getParam('processing_rate') == '') {
                $node->processing_rate = -1;
            }
        }

        $node->save();

        $rs['ret'] = 1;
        $rs['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function delete($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = Product::find($id);

        if (!$node->delete()) {
            $rs['ret'] = 0;
            $rs['msg'] = '删除失败';
            return $response->getBody()->write(json_encode($rs));
        }

        $rs['ret'] = 1;
        $rs['msg'] = '删除成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function delete_inlist($request, $response, $args)
    {
        $id = $request->getParam('id');
        $node = AssemList::find($id);

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
        $oid = $args['id'];
        $user = Auth::getUser();

        $total_column = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'info' => '备注', 'num' => '数量',
            'enough' => '物料', 'q_unit' => '单位', 'oid' => 'oid', 'id' => 'aid');

        if ($user->is_su) {
            $total_column = array('op' => '操作', 'id' => 'ID', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'info' => '备注', 'num' => '数量',
                'enough' => '物料', 'ori_price' => '基准单价', 'float_price' => '浮动单价', 'subtotal' => '小计', 'q_unit' => '单位', 'oid' => 'oid', 'id' => 'aid');
        }



        $datatables = new Datatables(new DatatablesHelper());

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }
        $datatables->query('Select ' . $key_str . ' from assassin where assassin.oid=' . $oid . '');

        $datatables->edit('op', static function ($data) {
            return '<a class="btn btn-brand" ' . ($data['sort'] == 999 ? 'disabled' : 'href="/admin/product/' . $data['oid'] . '/edit_in_list/' . $data['id'] . '"') . '>编辑</a>
                    <a class="btn btn-brand-accent" ' . ($data['sort'] == 999 ? 'disabled' : 'id="delete" value="' . $data['id'] . '" href="javascript:void(0);" onClick="delete_modal_show(\'' . $data['id'] . '\')"') . '>删除</a>';
        });

        $datatables->edit('enough', static function ($data) {
            return $data['enough'] == 1 ? '充足' : '缺少';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }

    public function ajax_depo($request, $response, $args)
    {
        $oid = $args['oid'];
        $slctsp = SelectSpare::find(0);
        $slctsp->ing = $oid;
        $slctsp->save();

        $datatables = new Datatables(new DatatablesHelper());

        $total_column = array('op' => '操作', 'id' => 'ID',
            'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'info' => '备注',
            'stock' => '库存量', 'q_unit' => '单位', 'ing' => '');

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }
        $datatables->query('Select ' . $key_str . ' from select_spare');

        $datatables->edit('op', static function ($data) {

            return '<a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'href="/admin/product/' . $data['ing'] . '/create_to_list/' . $data['id'] . '"') . '>选择</a>';
        });

        $datatables->edit('op', static function ($data) {

            return '<a class="btn btn-brand" ' . ($data['status'] == 1 ? 'disabled' : 'href="/admin/product/' . $data['ing'] . '/create_to_list/' . $data['id'] . '"') . '>选择</a>';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }

    public function ajax($request, $response, $args)
    {
        $datatables = new Datatables(new DatatablesHelper());
        $user = Auth::getUser();

        if ($user->is_tech || $user->is_depo || $user->is_sales) {
        $total_column = array('op' => '操作', 'id' => 'ID', 'name' => '清单名称',
            'enough' => '物料', 'info' => '备注', 'last_time' => '最后时间');
        }

        if ($user->is_su) {
        $total_column = array('op' => '操作', 'id' => 'ID', 'name' => '清单名称',
            'price' => '价格', 'cost' => '成本', 'enough' => '物料',
            'profit_rate' => '利润率', 'tax_rate' => '税率', 'processing_rate' => '加工费率', 'info' => '备注',
            'last_time' => '最后时间');
        }

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
            return '<a class="btn btn-brand" ' . ($data['sort'] == 999 ? 'disabled' : 'href="/admin/product/' . $data['id'] . '/edit_list"') . '>增减物料</a>
                    <a class="btn btn-green" ' . ($data['sort'] == 999 ? 'disabled' : 'href="/admin/product/' . $data['id'] . '/sheet"') . '>导出表格</a>
                    <a class="btn btn-brand" ' . ($data['sort'] == 999 ? 'disabled' : 'href="/admin/product/' . $data['id'] . '/edit"') . '>编辑</a>
                    <a class="btn btn-brand-accent" ' . ($data['sort'] == 999 ? 'disabled' : 'id="delete" value="' . $data['id'] . '" href="javascript:void(0);" onClick="delete_modal_show(\'' . $data['id'] . '\')"') . '>删除</a>';
        });

        $datatables->edit('enough', static function ($data) {
            return $data['enough'] == 1 ? '充足' : '缺少';
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }
}
