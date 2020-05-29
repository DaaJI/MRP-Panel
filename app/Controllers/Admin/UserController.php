<?php

namespace App\Controllers\Admin;

use App\Models\User;
use App\Controllers\AdminController;
use App\Services\Config;
use App\Services\Auth;
use App\Utils;
use App\Utils\Hash;
use App\Utils\QQWry;
use App\Utils\Check;
use App\Utils\Tools;
use App\Utils\GA;
use Exception;

//use App\Models\Ip;use App\Models\Bought;use App\Models\Relay;use App\Services\Mail;use App\Utils\Radius;

class UserController extends AdminController
{
    public function index($request, $response, $args)
    {
        $table_config['total_column'] = array('op' => '操作', 'id' => 'ID', 'user_name' => '用户名',
            'remark' => '备注', 'email' => '邮箱', 'im_type' => '联络方式', 'im_value' => '联络方式详情',
            'is_su' => '管理员', 'is_whadmin' => '采购部', 'is_depo' => '仓储部', 'is_tech' => '技术部',
            'is_sales' => '销售部', 'reg_date' => '注册时间');

        $table_config['default_show_column'] = array('op', 'id', 'user_name', 'remark', 'email',
            'im_type', 'im_value', 'is_su', 'is_tech', 'is_whadmin', 'is_depo', 'is_sales');
        $table_config['ajax_url'] = 'user/ajax';
        return $this->view()->assign('table_config', $table_config)->display('admin/user/index.tpl');
    }

    public function createNewUser($request, $response, $args)
    {
        # 需要一个 userEmail
        $email = $request->getParam('userEmail');
        $email = trim($email);
        $email = strtolower($email);
        $user = User::where('email', $email)->first();
        if ($user != null) {
            $res['ret'] = 0;
            $res['msg'] = '邮箱已经被注册了';
            return $response->getBody()->write(json_encode($res));
        }
        // do reg user
        $user = new User();
        $pass = Tools::genRandomChar();
        $user->user_name = $email;
        $user->email = $email;
        $user->pass = Hash::passwordHash($pass);
        $user->passwd = Tools::genRandomChar(6);
        $user->port = Tools::getAvPort();
        $user->im_type = 2;
        $user->im_value = $email;
        $user->reg_date = date('Y-m-d H:i:s');
        $user->reg_ip = $_SERVER['REMOTE_ADDR'];
        $user->theme = Config::get('theme');

        $ga = new GA();
        $secret = $ga->createSecret();

        $user->ga_token = $secret;
        $user->ga_enable = 0;
        if ($user->save()) {
            $res['ret'] = 1;
            $res['msg'] = '新用户注册成功 用户名: ' . $email . ' 随机初始密码: ' . $pass;
            $res['email_error'] = 'success';
            $subject = Config::get('appName') . '-新用户注册通知';
            $to = $user->email;
            $text = '您好，管理员已经为您生成账户，用户名: ' . $email . '，登录密码为：' . $pass . '，感谢您的支持。 ';
            return $response->getBody()->write(json_encode($res));
        }
        $res['ret'] = 0;
        $res['msg'] = '未知错误';
        return $response->getBody()->write(json_encode($res));
    }

    public function search($request, $response, $args)
    {
        $pageNum = 1;
        $text = $args['text'];
        if (isset($request->getQueryParams()['page'])) {
            $pageNum = $request->getQueryParams()['page'];
        }

        $users = User::where('email', 'LIKE', '%' . $text . '%')->orWhere('user_name', 'LIKE', '%' . $text . '%')->orWhere('im_value', 'LIKE', '%' . $text . '%')->orWhere('port', 'LIKE', '%' . $text . '%')->orWhere('remark', 'LIKE', '%' . $text . '%')->paginate(20, ['*'], 'page', $pageNum);
        $users->setPath('/admin/user/search/' . $text);

        //Ip::where("datetime","<",time()-90)->get()->delete();
        //$total = Ip::where('datetime', '>=', time() - 90)->orderBy('userid', 'desc')->get();

        $userip = array();
        $useripcount = array();
        $regloc = array();

        $iplocation = new QQWry();
        foreach ($users as $user) {
            $useripcount[$user->id] = 0;
            $userip[$user->id] = array();

            $location = $iplocation->getlocation($user->reg_ip);
            $regloc[$user->id] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
        }


        foreach ($total as $single) {
            if (isset($useripcount[$single->userid]) && !isset($userip[$single->userid][$single->ip])) {
                ++$useripcount[$single->userid];
                $location = $iplocation->getlocation($single->ip);
                $userip[$single->userid][$single->ip] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
            }
        }


        return $this->view()->assign('users', $users)->assign('regloc', $regloc)->assign('useripcount', $useripcount)->assign('userip', $userip)->display('admin/user/index.tpl');
    }

    public function sort($request, $response, $args)
    {
        $pageNum = 1;
        $text = $args['text'];
        $asc = $args['asc'];
        if (isset($request->getQueryParams()['page'])) {
            $pageNum = $request->getQueryParams()['page'];
        }

        $users->setPath('/admin/user/sort/' . $text . '/' . $asc);

        //Ip::where("datetime","<",time()-90)->get()->delete();
        //$total = Ip::where('datetime', '>=', time() - 90)->orderBy('userid', 'desc')->get();

        $userip = array();
        $useripcount = array();
        $regloc = array();

        $iplocation = new QQWry();
        foreach ($users as $user) {
            $useripcount[$user->id] = 0;
            $userip[$user->id] = array();

            $location = $iplocation->getlocation($user->reg_ip);
            $regloc[$user->id] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
        }


        foreach ($total as $single) {
            if (isset($useripcount[$single->userid]) && !isset($userip[$single->userid][$single->ip])) {
                ++$useripcount[$single->userid];
                $location = $iplocation->getlocation($single->ip);
                $userip[$single->userid][$single->ip] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
            }
        }

        return $this->view()->assign('users', $users)->assign('regloc', $regloc)->assign('useripcount', $useripcount)->assign('userip', $userip)->display('admin/user/index.tpl');
    }


    public function edit($request, $response, $args)
    {
        $id = $args['id'];
        $user = User::find($id);
        return $this->view()->assign('edit_user', $user)->display('admin/user/edit.tpl');
    }

    public function update($request, $response, $args)
    {
        $id = $args['id'];
        $user = User::find($id);

        $email1 = $user->email;

        $user->email = $request->getParam('email');

        $email2 = $request->getParam('email');

        $passwd = $request->getParam('passwd');

        if ($request->getParam('pass') != '') {
            $user->pass = Hash::passwordHash($request->getParam('pass'));
            $user->clean_link();
        }

        $user->passwd = $request->getParam('passwd');

        $user->is_su = $request->getParam('is_su');
        $user->is_whadmin = $request->getParam('is_whadmin');
        $user->is_tech = $request->getParam('is_tech');
        $user->is_depo = $request->getParam('is_depo');
        $user->is_sales = $request->getParam('is_sales');

        $user->remark = $request->getParam('remark');

        if (!$user->save()) {
            $rs['ret'] = 0;
            $rs['msg'] = '修改失败';
            return $response->getBody()->write(json_encode($rs));
        }
        $rs['ret'] = 1;
        $rs['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($rs));
    }

    public function delete($request, $response, $args)
    {
        $id = $request->getParam('id');
        $user = User::find($id);

        $email1 = $user->email;

        if (!$user->kill_user()) {
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
        //得到排序的方式
        $order = $request->getParam('order')[0]['dir'];
        //得到排序字段的下标
        $order_column = $request->getParam('order')[0]['column'];
        //根据排序字段的下标得到排序字段
        $order_field = $request->getParam('columns')[$order_column]['data'];
        $limit_start = $request->getParam('start');
        $limit_length = $request->getParam('length');
        $search = $request->getParam('search')['value'];

        if ($order_field == 'used_traffic') {
            $order_field = 'u + d';
        } elseif ($order_field == 'enable_traffic') {
            $order_field = 'transfer_enable';
        } elseif ($order_field == 'today_traffic') {
            $order_field = 'u +d - last_day_t';
        }

        $users = array();
        $count_filtered = 0;

        if ($search) {
            $users = User::where(
                static function ($query) use ($search) {
                    $query->where('id', 'LIKE', "%$search%")
                        ->orwhere('user_name', 'LIKE', "%$search%")
                        ->orwhere('email', 'LIKE', "%$search%")
                        ->orwhere('passwd', 'LIKE', "%$search%")
                        ->orwhere('reg_date', 'LIKE', "%$search%")
                        ->orwhere('im_value', 'LIKE', "%$search%")
                        ->orwhere('remark', 'LIKE', "%$search%");
                }
            )
                ->orderByRaw($order_field . ' ' . $order)
                ->skip($limit_start)->limit($limit_length)
                ->get();
            $count_filtered = User::where(
                static function ($query) use ($search) {
                    $query->where('id', 'LIKE', "%$search%")
                        ->orwhere('user_name', 'LIKE', "%$search%")
                        ->orwhere('email', 'LIKE', "%$search%")
                        ->orwhere('passwd', 'LIKE', "%$search%")
                        ->orwhere('reg_date', 'LIKE', "%$search%")
                        ->orwhere('im_value', 'LIKE', "%$search%")
                        ->orwhere('remark', 'LIKE', "%$search%");
                }
            )->count();
        } else {
            $users = User::orderByRaw($order_field . ' ' . $order)
                ->skip($limit_start)->limit($limit_length)
                ->get();
            $count_filtered = User::count();
        }

        $data = array();
        foreach ($users as $user) {
            $tempdata = array();
            //model里是casts所以没法直接 $tempdata=(array)$user
            $tempdata['op'] = '<a class="btn btn-brand" href="/admin/user/' . $user->id . '/edit">编辑</a>
                    <a class="btn btn-brand-accent" id="delete" href="javascript:void(0);" onClick="delete_modal_show(\'' . $user->id . '\')">删除</a>';
            $tempdata['id'] = $user->id;
            $tempdata['user_name'] = $user->user_name;
            $tempdata['remark'] = $user->remark;
            $tempdata['email'] = $user->email;
            $tempdata['money'] = $user->money;
            $tempdata['im_value'] = $user->im_value;
            switch ($user->im_type) {
                case 1:
                    $tempdata['im_type'] = '微信';
                    break;
                case 2:
                    $tempdata['im_type'] = 'QQ';
                    break;
                case 3:
                    $tempdata['im_type'] = '手机号码';
                    break;
                default:
                    $tempdata['im_type'] = 'Telegram';
                    $tempdata['im_value'] = '<a href="https://telegram.me/' . $user->im_value . '">' . $user->im_value . '</a>';
            }
            $tempdata['node_group'] = $user->node_group;
            $tempdata['expire_in'] = $user->expire_in;
            $tempdata['class'] = $user->class;
            $tempdata['class_expire'] = $user->class_expire;
            $tempdata['passwd'] = $user->passwd;
            $tempdata['port'] = $user->port;
            $tempdata['method'] = $user->method;
            $tempdata['protocol'] = $user->protocol;
            $tempdata['obfs'] = $user->obfs;
            $tempdata['online_ip_count'] = $user->online_ip_count();
            $tempdata['last_ss_time'] = $user->lastSsTime();
            $tempdata['used_traffic'] = Tools::flowToGB($user->u + $user->d);
            $tempdata['enable_traffic'] = Tools::flowToGB($user->transfer_enable);
            $tempdata['last_checkin_time'] = $user->lastCheckInTime();
            $tempdata['today_traffic'] = Tools::flowToMB($user->u + $user->d - $user->last_day_t);
            $tempdata['enable'] = $user->enable == 1 ? '可用' : '禁用';
            $tempdata['reg_date'] = $user->reg_date;
            $tempdata['reg_ip'] = $user->reg_ip;
            $tempdata['auto_reset_day'] = $user->auto_reset_day;
            $tempdata['auto_reset_bandwidth'] = $user->auto_reset_bandwidth;
            $tempdata['ref_by'] = $user->ref_by;

            $tempdata['is_su'] = $user->is_su == 1 ? '是' : '否';

            $tempdata['is_whadmin'] = $user->is_whadmin == 1 ? '是' : '否';
            $tempdata['is_depo'] = $user->is_depo == 1 ? '是' : '否';
            $tempdata['is_tech'] = $user->is_tech == 1 ? '是' : '否';
            $tempdata['is_sales'] = $user->is_sales == 1 ? '是' : '否';

            if ($user->ref_by == 0) {
                $tempdata['ref_by_user_name'] = '系统邀请';
            } else {
                $ref_user = User::find($user->ref_by);
                if ($ref_user == null) {
                    $tempdata['ref_by_user_name'] = '邀请人已经被删除';
                } else {
                    $tempdata['ref_by_user_name'] = $ref_user->user_name;
                }
            }

            $tempdata['top_up'] = $user->get_top_up();

            $data[] = $tempdata;
        }
        $info = [
            'draw' => $request->getParam('draw'), // ajax请求次数，作为标识符
            'recordsTotal' => User::count(),
            'recordsFiltered' => $count_filtered,
            'data' => $data,
        ];
        return json_encode($info, true);
    }
}
