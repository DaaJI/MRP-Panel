<?php
namespace App\Utils;

use App\Services\Auth;
use App\Models\Product;
use Ozdemir\Datatables\Datatables;
use App\Utils\DatatablesHelper;
use PhpOffice\PhpSpreadsheet;

class Sheet{

    public function product_detail($id){

        $datatables = new Datatables(new DatatablesHelper());
        $total_column = array('op' => '编号', 'm_id' => '物料编号', 'name' => '物料名称', 'size' => '规格', 'info' => '备注',
            'num' => '数量', 'q_unit' => '单位','enough'=>'物料状态');

        $key_str = '';
        foreach ($total_column as $single_key => $single_value) {
            if ($single_key == 'op') {
                $key_str .= 'id as op';
                continue;
            }

            $key_str .= ',' . $single_key;
        }

        $datatables->query('Select ' . $key_str . ' from assassin where assassin.oid=' . $id . '');

        $datatables->edit('enough', static function ($data) {
            return $data['enough'] == 1 ? '充足' : '缺少';
        });

        $str = $datatables->generate();
        $data = json_decode($str,true);

        $letter = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        // 表头数组
        //$tableheader = array('零件ID', '零件编号','零件名','零件数量','零件尺寸','零件库存','零件单位','备注');

        $excel = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        // 填充表头信息
        $excel->getActiveSheet()->setTitle('清单');

        $i=0;
        foreach ($total_column as $key => $value) {

            $excel->getActiveSheet()->setCellValue($letter[$i] . '1', $value);
            $i++;
        }

        //for ($i = 0; $i < count($tableheader); $i++) {
        //    $excel->getActiveSheet()->setCellValue("$letter[$i]1", ''.$data['name'].'');
        //}

        // 填充表格
        $objSheet = $excel->getActiveSheet();

        // $objSheet->getColumnDimension('A')->setWidth(20);
        $objSheet->getColumnDimension('B')->setWidth(20);
        $objSheet->getColumnDimension('C')->setWidth(30);
        $objSheet->getColumnDimension('D')->setWidth(30);
        // $objSheet->getColumnDimension('E')->setWidth(20);
        // $objSheet->getColumnDimension('F')->setWidth(20);
        // $objSheet->getColumnDimension('G')->setWidth(20);
        // $objSheet->getColumnDimension('H')->setWidth(20);

        for ($i = 2; $i <= count($data['data'])+1; $i++) {
            $j = 0;
            foreach ($data['data'][$i - 2] as $key => $value) {

            if ($key == 'op') {
                $value = $i - 1;
            }

                $excel->getActiveSheet()->setCellValue($letter[$j] . $i, $value);
                $j++;
            }
        }

        $product = Product::find($id);

        $user = Auth::getUser();
        if ($user->is_su) {
            $i++;
            $excel->getActiveSheet()->setCellValue("H$i", "总价：$product->price 元");
        }

        $filename = ''. $product->id .''. $product->name .'_'. time() .''. rand(100, 999) .'.xls';

        // 创建Excel输入对象

        $objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel,'Xls');
        $objWriter->save('download/'. $filename .'');

        return $filename;
    }
}