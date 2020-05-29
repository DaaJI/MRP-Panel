<?php

namespace App\Controllers;

/*
use App\Models\Node;use App\Models\TrafficLog;use App\Models\InviteCode;use App\Models\Speedtest;use App\Models\Shop;use App\Models\Bought;use App\Models\Ticket;
use App\Services\Gateway\ChenPay;use App\Services\BitPayment;use App\Services\Payment;use App\Utils\AliPay;use App\Utils\Radius;use App\Models\DetectLog; use App\Models\DetectRule;use App\Models\NodeOnlineLog;use App\Models\NodeInfoLog;
use App\Models\Code;use App\Models\Ip;use App\Models\BlockIp;use App\Models\UnblockIp;use App\Models\Payback;use App\Models\Relay;
use App\Utils\GA;use App\Utils\Geetest;use App\Utils\Telegram;use App\Utils\TelegramSessionManager;use App\Utils\Pay;
use App\Models\Coupon;use App\Services\Mail;
*/

use App\Services\Auth;
use App\Models\Ann;

use App\Services\Config;
use App\Utils;
use App\Utils\Hash;
use App\Utils\Tools;
use Exception;
use voku\helper\AntiXSS;
use App\Models\User;
use App\Models\LoginIp;
use App\Utils\QQWry;
use App\Utils\URL;
use App\Utils\DatatablesHelper;

// HomeController //

class UserController extends BaseController
{
    public function index($request, $response, $args)
    {
        $iplocation = new QQWry();
        $totallogin = LoginIp::where('userid', '=', $this->user->id)->where('type', '=', 0)->orderBy('datetime', 'desc')->take(10)->get();
        $userloginip = array();

        foreach ($totallogin as $single) {
            //if(isset($useripcount[$single->userid]))
            {
            if (!isset($userloginip[$single->ip])) {
                //$useripcount[$single->userid]=$useripcount[$single->userid]+1;
                $location = $iplocation->getlocation($single->ip);
                $userloginip[$single->ip] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
            }
            }
        }

        $ssr_sub_token = LinkController::GenerateSSRSubCode($this->user->id, 0);

        $GtSdk = null;
        $recaptcha_sitekey = null;
        if (Config::get('enable_checkin_captcha') == 'true') {
            switch (Config::get('captcha_provider')) {
                case 'recaptcha':
                    $recaptcha_sitekey = Config::get('recaptcha_sitekey');
                    break;
                case 'geetest':
                    $uid = time() . random_int(1, 10000);
                    $GtSdk = Geetest::get($uid);
                    break;
            }
        }

        $Ann = Ann::orderBy('date', 'desc')->first();

        return $this->view()
        	->assign('userloginip', $userloginip)
            ->assign('ann', $Ann)
            ->assign('geetest_html', $GtSdk)
            ->assign('user', $this->user)
            ->registerClass('URL', URL::class)
            ->assign('baseUrl', Config::get('baseUrl'))
            ->assign('recaptcha_sitekey', $recaptcha_sitekey)
            ->display('user/index.tpl');
    }

    public function isHTTPS()
    {
        define('HTTPS', false);
        if (defined('HTTPS') && HTTPS) {
            return true;
        }
        if (!isset($_SERVER)) {
            return false;
        }
        if (!isset($_SERVER['HTTPS'])) {
            return false;
        }
        if ($_SERVER['HTTPS'] === 1) {  //Apache
            return true;
        }

        if ($_SERVER['HTTPS'] === 'on') { //IIS
            return true;
        }

        if ($_SERVER['SERVER_PORT'] == 443) { //其他
            return true;
        }
        return false;
    }

    public function GaCheck($request, $response, $args)
    {
        $code = $request->getParam('code');
        $user = $this->user;


        if ($code == '') {
            $res['ret'] = 0;
            $res['msg'] = '二维码不能为空';
            return $response->getBody()->write(json_encode($res));
        }

        $ga = new GA();
        $rcode = $ga->verifyCode($user->ga_token, $code);
        if (!$rcode) {
            $res['ret'] = 0;
            $res['msg'] = '测试错误';
            return $response->getBody()->write(json_encode($res));
        }


        $res['ret'] = 1;
        $res['msg'] = '测试成功';
        return $response->getBody()->write(json_encode($res));
    }


    public function GaSet($request, $response, $args)
    {
        $enable = $request->getParam('enable');
        $user = $this->user;

        if ($enable == '') {
            $res['ret'] = 0;
            $res['msg'] = '选项无效';
            return $response->getBody()->write(json_encode($res));
        }

        $user->ga_enable = $enable;
        $user->save();


        $res['ret'] = 1;
        $res['msg'] = '设置成功';
        return $response->getBody()->write(json_encode($res));
    }

    public function GaReset($request, $response, $args)
    {
        $user = $this->user;
        $ga = new GA();
        $secret = $ga->createSecret();

        $user->ga_token = $secret;
        $user->save();
        return $response->withStatus(302)->withHeader('Location', '/user/edit');
    }

    public function profile($request, $response, $args)
    {
        $pageNum = $request->getQueryParams()['page'] ?? 1;
        $paybacks = Payback::where('ref_by', $this->user->id)->orderBy('datetime', 'desc')->paginate(15, ['*'], 'page', $pageNum);
        $paybacks->setPath('/user/profile');

        $iplocation = new QQWry();
        $userip = array();

        $total = Ip::where('datetime', '>=', time() - 300)->where('userid', '=', $this->user->id)->get();
        $totallogin = LoginIp::where('userid', '=', $this->user->id)->where('type', '=', 0)->orderBy('datetime', 'desc')->take(10)->get();
        $userloginip = array();

        foreach ($totallogin as $single) {
            //if(isset($useripcount[$single->userid]))
            {
            if (!isset($userloginip[$single->ip])) {
                //$useripcount[$single->userid]=$useripcount[$single->userid]+1;
                $location = $iplocation->getlocation($single->ip);
                $userloginip[$single->ip] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
            }
            }
        }

        foreach ($total as $single) {
            //if(isset($useripcount[$single->userid]))
            {
                $single->ip = Tools::getRealIp($single->ip);
                $is_node = Node::where('node_ip', $single->ip)->first();
            if ($is_node) {
                continue;
            }


            if (!isset($userip[$single->ip])) {
                //$useripcount[$single->userid]=$useripcount[$single->userid]+1;
                $location = $iplocation->getlocation($single->ip);
                $userip[$single->ip] = iconv('gbk', 'utf-8//IGNORE', $location['country'] . $location['area']);
            }
            }
        }


        return $this->view()->assign('userip', $userip)->assign('userloginip', $userloginip)->assign('paybacks', $paybacks)->display('user/profile.tpl');
    }

    public function updatePassword($request, $response, $args)
    {
        $oldpwd = $request->getParam('oldpwd');
        $pwd = $request->getParam('pwd');
        $repwd = $request->getParam('repwd');
        $user = $this->user;
        if (!Hash::checkPassword($user->pass, $oldpwd)) {
            $res['ret'] = 0;
            $res['msg'] = '旧密码错误';
            return $response->getBody()->write(json_encode($res));
        }
        if ($pwd != $repwd) {
            $res['ret'] = 0;
            $res['msg'] = '两次输入不符合';
            return $response->getBody()->write(json_encode($res));
        }
        if (strlen($pwd) < 1) {
            $res['ret'] = 0;
            $res['msg'] = '密码太短啦';
            return $response->getBody()->write(json_encode($res));
        }

        $hashPwd = Hash::passwordHash($pwd);
        $user->pass = $hashPwd;
        $user->save();

        $user->clean_link();

        $res['ret'] = 1;
        $res['msg'] = '修改成功';
        return $this->echoJson($response, $res);
    }

    public function updateWechat($request, $response, $args)
    {
        $type = $request->getParam('imtype');
        $wechat = $request->getParam('wechat');
        $wechat = trim($wechat);

        $user = $this->user;

        if ($user->telegram_id != 0) {
            $res['ret'] = 0;
            $res['msg'] = '您绑定了 Telegram ，所以此项并不能被修改。';
            return $response->getBody()->write(json_encode($res));
        }

        if ($user->discord != 0) {
            $res['ret'] = 0;
            $res['msg'] = '您绑定了 Discord ，所以此项并不能被修改。';
            return $response->getBody()->write(json_encode($res));
        }

        if ($wechat == '' || $type == '') {
            $res['ret'] = 0;
            $res['msg'] = '非法输入';
            return $response->getBody()->write(json_encode($res));
        }

        $user1 = User::where('im_value', $wechat)->where('im_type', $type)->first();
        if ($user1 != null) {
            $res['ret'] = 0;
            $res['msg'] = '此联络方式已经被注册';
            return $response->getBody()->write(json_encode($res));
        }

        $user->im_type = $type;
        $antiXss = new AntiXSS();
        $user->im_value = $antiXss->xss_clean($wechat);
        $user->save();

        $res['ret'] = 1;
        $res['msg'] = '修改成功';
        return $this->echoJson($response, $res);
    }

    public function logout($request, $response, $args)
    {
        Auth::logout();
        return $response->withStatus(302)->withHeader('Location', '/');
    }

    public function backtoadmin($request, $response, $args)
    {
        $userid = Utils\Cookie::get('uid');
        $adminid = Utils\Cookie::get('old_uid');
        $user = User::find($userid);
        $admin = User::find($adminid);

        if (!$admin->is_admin || !$user) {
            Utils\Cookie::set([
                'uid' => null,
                'email' => null,
                'key' => null,
                'ip' => null,
                'expire_in' => null,
                'old_uid' => null,
                'old_email' => null,
                'old_key' => null,
                'old_ip' => null,
                'old_expire_in' => null,
                'old_local' => null
            ], time() - 1000);
        }
        $expire_in = Utils\Cookie::get('old_expire_in');
        $local = Utils\Cookie::get('old_local');
        Utils\Cookie::set([
            'uid' => Utils\Cookie::get('old_uid'),
            'email' => Utils\Cookie::get('old_email'),
            'key' => Utils\Cookie::get('old_key'),
            'ip' => Utils\Cookie::get('old_ip'),
            'expire_in' => $expire_in,
            'old_uid' => null,
            'old_email' => null,
            'old_key' => null,
            'old_ip' => null,
            'old_expire_in' => null,
            'old_local' => null
        ], $expire_in);
        return $response->withStatus(302)->withHeader('Location', $local);
    }
}
