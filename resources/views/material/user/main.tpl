<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
    <meta name="theme-color" content="#4285f4">
    <title>{$config["appName"]}</title

    <!-- css -->
    <link href="/theme/material/css/base.min.css" rel="stylesheet">
    <link href="/theme/material/css/project.min.css" rel="stylesheet">
    <link href="/theme/material/css/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="/theme/material/css/user.css">
    <link href="/theme/material/css/material.min.css" rel="stylesheet">
    <link href="/theme/material/css/dataTables.material.min.css" rel="stylesheet">

    <!-- js -->
    <script src="/theme/material/js/jquery@3.2.1"></script>
    <!-- favicon -->
    <!-- ... -->
    <style>
        body {
            position: relative;
        }

        .table-responsive {
            background: white;
        }

        .dropdown-menu.dropdown-menu-right a {
            color: #212121;
        }

        a[href='#ui_menu'] {
            color: #212121;
        }
    </style>
</head>

<body class="page-brand">
<header class="header header-red header-transparent header-waterfall ui-header">
    <ul class="nav nav-list pull-left">
        <div>
            <a data-toggle="menu" href="#ui_menu">
                <span class="icon icon-lg">menu</span>
            </a>
        </div>
    </ul>

    <ul class="nav nav-list pull-right">
        <div class="dropdown margin-right">
            <a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
                {if $user->isLogin}
                <span class="access-hide">{$user->user_name}</span>
                <span class="avatar avatar-sm"><img src="{$user->gravatar}"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a class="waves-attach" href="/user/"><span class="icon icon-lg margin-right">account_box</span>个人中心</a>
                </li>
                <li>
                    <a class="waves-attach" href="/user/logout"><span
                                class="icon icon-lg margin-right">exit_to_app</span>登出</a>
                </li>
            </ul>
            {else}
            <span class="access-hide">未登录</span>
            <span class="avatar avatar-sm"><img src="/theme/material/images/users/avatar-001.jpg"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a class="waves-attach" href="/auth/login"><span
                                class="icon icon-lg margin-right">account_box</span>登录</a>
                </li>
                <li>
                    <a class="waves-attach" href="/auth/register"><span
                                class="icon icon-lg margin-right">pregnant_woman</span>注册</a>
                </li>
            </ul>
            {/if}

        </div>
    </ul>
</header>
<nav aria-hidden="true" class="menu menu-left nav-drawer nav-drawer-md" id="ui_menu" tabindex="-1">
    <div class="menu-scroll">
        <div class="menu-content">
            <a class="menu-logo" href="/"><i class="icon icon-lg">language</i>&nbsp;网上管理系统</a>
            <ul class="nav">
                <li>
<!--                    <a class="waves-attach" data-toggle="collapse" href="#ui_menu_me">我的</a>
                    <ul class="menu-collapse collapse in" id="ui_menu_me">{$config["appName"]}
-->
                        <li>
                            <a href="/user"><i class="icon icon-lg">account_box</i>&nbsp;个人中心</a>
                        </li>

	        {if $user->isTech() || $user->isSales() || $user->isSu()}
                        <li>
                            <a href="/admin/order"><i class="icon icon-lg">assignment</i>&nbsp;订单管理</a>
                        </li>

                        <li>
                            <a href="/admin/product"><i class="icon icon-lg">shop</i>&nbsp;产品清单</a>
                        </li>
                {/if}

	        {if $user->isWHAdmin() || $user->isTech() || $user->isDepo()|| $user->isSu()}
                        <li>
                            <a href="/admin/depository"><i class="icon icon-lg">account_balance</i>&nbsp;仓库库存</a>
                        </li>
                {/if}

	        {if $user->isWHAdmin()|| $user->isSu()}
                        <li>
                            <a href="/admin/purchase"><i class="icon icon-lg">shopping_cart</i>&nbsp;物料采购</a>
                        </li>
                {/if}

                    	{if $user->isSu()}
                		<li>
                    		<a href="/admin/user"><i class="icon icon-lg">person_pin</i>&nbsp;用户管理</a>
                		</li>
                	{/if}
                    </ul>
            </ul>
        </div>
    </div>
</nav>

