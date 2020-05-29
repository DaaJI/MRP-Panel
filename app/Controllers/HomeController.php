<?php

namespace App\Controllers;

// use App\Models\InviteCode;use App\Utils\AliPay;use App\Utils\TelegramSessionManager;use App\Utils\TelegramProcess;use App\Utils\Spay_tool;use App\Utils\Geetest;

use App\Services\Config;

// HomeController

class HomeController extends BaseController
{
    public function indexold()
    {
        return $this->view()->display('indexold.tpl');
    }

    public function tos()
    {
        return $this->view()->display('tos.tpl');
    }

    public function staff()
    {
        return $this->view()->display('staff.tpl');
    }

    public function page404($request, $response, $args)
    {
        return $this->view()->display('404.tpl');
    }

    public function page405($request, $response, $args)
    {
        return $this->view()->display('405.tpl');
    }

    public function page500($request, $response, $args)
    {
        return $this->view()->display('500.tpl');
    }
}
