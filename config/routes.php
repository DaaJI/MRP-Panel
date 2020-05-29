<?php


use Slim\Container;
use App\Middleware\Auth;
use App\Middleware\Guest;
use App\Middleware\Admin;
// use App\Middleware\Api;
use App\Middleware\forUser;
use App\Middleware\forProduct;
use App\Middleware\forPurchase;
use App\Middleware\forDepo;
// use App\Middleware\Mu;
// use App\Middleware\Mod_Mu;
use Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware;

$configuration = [
    'settings' => [
        'debug' => DEBUG,
        'whoops.editor' => 'sublime',
        'displayErrorDetails' => DEBUG
    ]
];

$container = new Container($configuration);

// Init slim php view
$container['renderer'] = static function ($c) {
    return new Slim\Views\PhpRenderer();
};

$container['notFoundHandler'] = static function ($c) {
    return static function ($request, $response) use ($c) {
        return $response->withAddedHeader('Location', '/404');
    };
};

$container['notAllowedHandler'] = static function ($c) {
    return static function ($request, $response, $methods) use ($c) {
        return $response->withAddedHeader('Location', '/405');
    };
};

if ($debug == false) {
    $container['errorHandler'] = static function ($c) {
        return static function ($request, $response, $exception) use ($c) {
            return $response->withAddedHeader('Location', '/500');
        };
    };
}

$app = new Slim\App($container);
$app->add(new WhoopsMiddleware());


// Home
// $app->post('/spay_back', App\Services\Payment::class . ':notify');
// $app->get('/spay_back', App\Services\Payment::class . ':notify');
// $app->post('/telegram_callback', App\Controllers\HomeController::class . ':telegram');

$app->get('/', App\Controllers\HomeController::class . ':indexold');
$app->get('/indexold', App\Controllers\HomeController::class . ':indexold');
$app->get('/404', App\Controllers\HomeController::class . ':page404');
$app->get('/405', App\Controllers\HomeController::class . ':page405');
$app->get('/500', App\Controllers\HomeController::class . ':page500');
$app->post('/notify', App\Controllers\HomeController::class . ':notify');
$app->get('/tos', App\Controllers\HomeController::class . ':tos');
$app->get('/staff', App\Controllers\HomeController::class . ':staff');

// User Center main page
$app->group('/user', function () {
    $this->get('', App\Controllers\UserController::class . ':index');
    $this->get('/', App\Controllers\UserController::class . ':index');

    // $this->post('/checkin', App\Controllers\UserController::class . ':doCheckin');
    // $this->get('/lookingglass', App\Controllers\UserController::class . ':lookingglass');
    // $this->get('/profile', App\Controllers\UserController::class . ':profile');
    // $this->get('/disable', App\Controllers\UserController::class . ':disable');
    // $this->get('/edit', App\Controllers\UserController::class . ':edit');
    // $this->post('/sspwd', App\Controllers\UserController::class . ':updateSsPwd');
    // $this->get('/kill', App\Controllers\UserController::class . ':kill');
    // $this->post('/kill', App\Controllers\UserController::class . ':handleKill');
    // $this->post('/gacheck', App\Controllers\UserController::class . ':GaCheck');
    // $this->post('/gaset', App\Controllers\UserController::class . ':GaSet');
    // $this->get('/gareset', App\Controllers\UserController::class . ':GaReset');
    // $this->get('/telegram_reset', App\Controllers\UserController::class . ':telegram_reset');
    // $this->get('/trafficlog', App\Controllers\UserController::class . ':trafficLog');

    $this->post('/password', App\Controllers\UserController::class . ':updatePassword');
    $this->post('/wechat', App\Controllers\UserController::class . ':updateWechat');
    $this->post('/mail', App\Controllers\UserController::class . ':updateMail');
    $this->post('/method', App\Controllers\UserController::class . ':updateMethod');
    $this->post('/hide', App\Controllers\UserController::class . ':updateHide');
    $this->get('/sys', App\Controllers\UserController::class . ':sys');
    $this->get('/logout', App\Controllers\UserController::class . ':logout');

})->add(new Auth());

// Auth login page
$app->group('/auth', function () {
    $this->get('/login', App\Controllers\AuthController::class . ':login');
    $this->post('/qrcode_check', App\Controllers\AuthController::class . ':qrcode_check');
    $this->post('/login', App\Controllers\AuthController::class . ':loginHandle');
    $this->post('/qrcode_login', App\Controllers\AuthController::class . ':qrcode_loginHandle');
    $this->get('/register', App\Controllers\AuthController::class . ':register');
    $this->post('/register', App\Controllers\AuthController::class . ':registerHandle');
    $this->post('/send', App\Controllers\AuthController::class . ':sendVerify');
    $this->get('/logout', App\Controllers\AuthController::class . ':logout');
    $this->get('/telegram_oauth', App\Controllers\AuthController::class . ':telegram_oauth');
    $this->get('/login_getCaptcha', App\Controllers\AuthController::class . ':getCaptcha');
})->add(new Guest());

// Password forget the password
$app->group('/password', function () {
    $this->get('/reset', App\Controllers\PasswordController::class . ':reset');
    $this->post('/reset', App\Controllers\PasswordController::class . ':handleReset');
    $this->get('/token/{token}', App\Controllers\PasswordController::class . ':token');
    $this->post('/token/{token}', App\Controllers\PasswordController::class . ':handleToken');
})->add(new Guest());

// Admin
$app->group('/admin', function () {

    // Product Mange
    $this->get('/product', App\Controllers\Admin\ProductController::class . ':index');    
    $this->delete('/product/inlist', App\Controllers\Admin\ProductController::class . ':delete_inlist');
    $this->get('/product/create', App\Controllers\Admin\ProductController::class . ':create');
    $this->post('/product', App\Controllers\Admin\ProductController::class . ':add');
    $this->post('/product/{id}/add_from', App\Controllers\Admin\ProductController::class . ':add_from');
    $this->post('/product/to_list', App\Controllers\Admin\ProductController::class . ':add_to_list');
    $this->get('/product/{id}/edit', App\Controllers\Admin\ProductController::class . ':edit');
    $this->get('/product/{id}/edit_list', App\Controllers\Admin\ProductController::class . ':edit_list');
    $this->put('/product/{id}', App\Controllers\Admin\ProductController::class . ':update');   
    $this->delete('/product', App\Controllers\Admin\ProductController::class . ':delete');
    $this->post('/product/ajax', App\Controllers\Admin\ProductController::class . ':ajax');
    $this->post('/product/{id}/ajax_add', App\Controllers\Admin\ProductController::class . ':ajax_add');
    $this->post('/product/{oid}/ajax_depo', App\Controllers\Admin\ProductController::class . ':ajax_depo');
    $this->get('/product/{oid}/create_to_list/{sid}', App\Controllers\Admin\ProductController::class . ':create_to_list');
    $this->get('/product/{id}/sheet', App\Controllers\Admin\ProductController::class . ':product_detail_sheet');
    $this->get('/product/{oid}/edit_in_list/{sid}', App\Controllers\Admin\ProductController::class . ':edit_in_list');
    $this->put('/product/in_list/{id}', App\Controllers\Admin\ProductController::class . ':update_in_list');

    // Order Mange
    $this->get('/order', App\Controllers\Admin\OrderController::class . ':index');    
    $this->delete('/order/inlist', App\Controllers\Admin\OrderController::class . ':delete_inlist');
    $this->get('/order/create', App\Controllers\Admin\OrderController::class . ':create');
    $this->post('/order/create', App\Controllers\Admin\OrderController::class . ':add');
    $this->post('/order/{id}/add_from', App\Controllers\Admin\OrderController::class . ':add_from');
    $this->post('/order/to_list', App\Controllers\Admin\OrderController::class . ':add_to_list');
    $this->get('/order/{id}/edit', App\Controllers\Admin\OrderController::class . ':edit');
    $this->get('/order/{id}/edit_list', App\Controllers\Admin\OrderController::class . ':edit_list');
    $this->put('/order/{id}', App\Controllers\Admin\OrderController::class . ':update');   
    $this->delete('/order', App\Controllers\Admin\OrderController::class . ':delete');
    $this->post('/order/ajax', App\Controllers\Admin\OrderController::class . ':ajax');
    $this->post('/order/ajax_add', App\Controllers\Admin\OrderController::class . ':ajax_add');
    $this->get('/order/{id}/create_edit', App\Controllers\Admin\OrderController::class . ':create_edit');
    $this->post('/order/settle', App\Controllers\Admin\OrderController::class . ':settle');

})->add(new forProduct());

$app->group('/admin', function () {
    
    // Purchase Mange
    $this->get('/purchase', App\Controllers\Admin\PurchaseController::class . ':index');
    
    $this->get('/purchase/create', App\Controllers\Admin\PurchaseController::class . ':create');
    $this->post('/purchase/create', App\Controllers\Admin\PurchaseController::class . ':add');
    $this->post('/purchase', App\Controllers\Admin\PurchaseController::class . ':add');
    $this->get('/purchase/{id}/edit', App\Controllers\Admin\PurchaseController::class . ':edit');
    $this->get('/purchase/{id}/create_edit', App\Controllers\Admin\PurchaseController::class . ':create_edit');
    $this->post('/purchase/settle', App\Controllers\Admin\PurchaseController::class . ':settle');
    $this->put('/purchase/{id}', App\Controllers\Admin\PurchaseController::class . ':update');
    $this->delete('/purchase', App\Controllers\Admin\PurchaseController::class . ':delete');
    $this->post('/purchase/ajax', App\Controllers\Admin\PurchaseController::class . ':ajax');
    $this->post('/purchase/ajax_add', App\Controllers\Admin\PurchaseController::class . ':ajax_add');
    
})->add(new forPurchase());

$app->group('/admin', function () {   

    // Depo Mange
    $this->get('/depository', App\Controllers\Admin\DepositoryController::class . ':index');    
    $this->get('/depository/create', App\Controllers\Admin\DepositoryController::class . ':create');
    $this->post('/depository', App\Controllers\Admin\DepositoryController::class . ':add');
    $this->get('/depository/{id}/edit', App\Controllers\Admin\DepositoryController::class . ':edit');
    $this->put('/depository/{id}', App\Controllers\Admin\DepositoryController::class . ':update');
    $this->delete('/depository', App\Controllers\Admin\DepositoryController::class . ':delete');
    $this->post('/depository/ajax', App\Controllers\Admin\DepositoryController::class . ':ajax');
    $this->get('/depository/update_all', App\Controllers\Admin\DepositoryController::class . ':update_all');
    
})->add(new forDepo());

$app->group('/admin', function () {
    
    // User Mange
    $this->get('/user', App\Controllers\Admin\UserController::class . ':index');
    $this->get('/user/{id}/edit', App\Controllers\Admin\UserController::class . ':edit');
    $this->put('/user/{id}', App\Controllers\Admin\UserController::class . ':update');
    $this->delete('/user', App\Controllers\Admin\UserController::class . ':delete');
    //$this->post('/user/changetouser', App\Controllers\Admin\UserController::class . ':changetouser');
    $this->post('/user/ajax', App\Controllers\Admin\UserController::class . ':ajax');
    $this->post('/user/create', App\Controllers\Admin\UserController::class . ':createNewUser');
    //$this->post('/user/buy', App\Controllers\Admin\UserController::class . ':buy');

})->add(new forUser());

// API
// $app->group('/api', function () {
//     $this->get('/token/{token}', App\Controllers\ApiController::class . ':token');
//     $this->post('/token', App\Controllers\ApiController::class . ':newToken');
//     $this->get('/node', App\Controllers\ApiController::class . ':node')->add(new Api());
//     $this->get('/user/{id}', App\Controllers\ApiController::class . ':userInfo')->add(new Api());
//     $this->get('/sublink', App\Controllers\Client\ClientApiController::class . ':GetSubLink');
// });

// // mu
// $app->group('/mu', function () {
//     $this->get('/users', App\Controllers\Mu\UserController::class . ':index');
//     $this->post('/users/{id}/traffic', App\Controllers\Mu\UserController::class . ':addTraffic');
//     $this->post('/nodes/{id}/online_count', App\Controllers\Mu\NodeController::class . ':onlineUserLog');
//     $this->post('/nodes/{id}/info', App\Controllers\Mu\NodeController::class . ':info');
// })->add(new Mu());

// // mu
// $app->group('/mod_mu', function () {
//     $this->get('/nodes/{id}/info', App\Controllers\Mod_Mu\NodeController::class . ':get_info');
//     $this->get('/users', App\Controllers\Mod_Mu\UserController::class . ':index');
//     $this->post('/users/traffic', App\Controllers\Mod_Mu\UserController::class . ':addTraffic');
//     $this->post('/users/aliveip', App\Controllers\Mod_Mu\UserController::class . ':addAliveIp');
//     $this->post('/users/detectlog', App\Controllers\Mod_Mu\UserController::class . ':addDetectLog');
//     $this->post('/nodes/{id}/info', App\Controllers\Mod_Mu\NodeController::class . ':info');

//     $this->get('/nodes', App\Controllers\Mod_Mu\NodeController::class . ':get_all_info');
//     $this->post('/nodes/config', App\Controllers\Mod_Mu\NodeController::class . ':getConfig');

//     $this->get('/func/detect_rules', App\Controllers\Mod_Mu\FuncController::class . ':get_detect_logs');
//     $this->get('/func/relay_rules', App\Controllers\Mod_Mu\FuncController::class . ':get_relay_rules');
//     $this->post('/func/block_ip', App\Controllers\Mod_Mu\FuncController::class . ':addBlockIp');
//     $this->get('/func/block_ip', App\Controllers\Mod_Mu\FuncController::class . ':get_blockip');
//     $this->get('/func/unblock_ip', App\Controllers\Mod_Mu\FuncController::class . ':get_unblockip');
//     $this->post('/func/speedtest', App\Controllers\Mod_Mu\FuncController::class . ':addSpeedtest');
//     $this->get('/func/autoexec', App\Controllers\Mod_Mu\FuncController::class . ':get_autoexec');
//     $this->post('/func/autoexec', App\Controllers\Mod_Mu\FuncController::class . ':addAutoexec');

//     $this->get('/func/ping', App\Controllers\Mod_Mu\FuncController::class . ':ping');
//     //============================================
// })->add(new Mod_Mu());

// // res
// $app->group('/res', function () {
//     $this->get('/captcha/{id}', App\Controllers\ResController::class . ':captcha');
// });


// $app->group('/link', function () {
//     $this->get('/{token}', App\Controllers\LinkController::class . ':GetContent');
// });

// $app->group('/user', function () {
//     $this->post('/doiam', App\Services\Payment::class . ':purchase');
// })->add(new Auth());
// $app->group('/doiam', function () {
//     $this->post('/callback/{type}', App\Services\Payment::class . ':notify');
//     $this->get('/return/alipay', App\Services\Payment::class . ':returnHTML');
//     $this->post('/status', App\Services\Payment::class . ':getStatus');
// });

// // Vue

// $app->get('/logout', App\Controllers\VueController::class . ':vuelogout');
// $app->get('/globalconfig', App\Controllers\VueController::class . ':getGlobalConfig');
// $app->get('/getuserinfo', App\Controllers\VueController::class . ':getUserInfo');
// $app->post('/getuserinviteinfo', App\Controllers\VueController::class . ':getUserInviteInfo');
// $app->get('/getusershops', App\Controllers\VueController::class . ':getUserShops');
// $app->get('/getallresourse', App\Controllers\VueController::class . ':getAllResourse');
// $app->get('/getnewsubtoken', App\Controllers\VueController::class . ':getNewSubToken');
// $app->get('/getnewinvotecode', App\Controllers\VueController::class . ':getNewInviteCode');
// $app->get('/gettransfer', App\Controllers\VueController::class . ':getTransfer');
// $app->get('/getCaptcha', App\Controllers\VueController::class . ':getCaptcha');
// $app->post('/getChargeLog', App\Controllers\VueController::class . ':getChargeLog');
// $app->get('/getnodelist', App\Controllers\VueController::class . ':getNodeList');

/**
 * chenPay
 */
// $app->group('/user', function () {
//     $this->get('/chenPay', App\Services\Payment::class . ':purchase');
//     $this->get('/orderDelete', App\Controllers\UserController::class . ':orderDelete');
// })->add(new Auth());
// $app->group('/chenPay', function () {
//     $this->get('/status', App\Services\Payment::class . ':getStatus');
// });
// $app->group('/admin', function () {
//     $this->get('/editConfig', App\Controllers\AdminController::class . ':editConfig');
//     $this->post('/saveConfig', App\Controllers\AdminController::class . ':saveConfig');
// })->add(new Admin());
// chenPay end

// Run Slim Routes for App
$app->run();
