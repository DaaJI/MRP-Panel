<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-21 12:55:39
  from '/www/wwwroot/ts/resources/views/material/user/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec609cb471d19_37821783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8aae0f39c1541d87618810f57a1d69714612720' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/user/main.tpl',
      1 => 1590036936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mylivechat.tpl' => 1,
  ),
),false)) {
function content_5ec609cb471d19_37821783 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
    <meta name="theme-color" content="#4285f4">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title

    <!-- css -->
    <link href="/theme/material/css/base.min.css" rel="stylesheet">
    <link href="/theme/material/css/project.min.css" rel="stylesheet">
    <link href="/theme/material/css/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="/theme/material/css/user.css">
    <link href="/theme/material/css/material.min.css" rel="stylesheet">
    <link href="/theme/material/css/dataTables.material.min.css" rel="stylesheet">

    <!-- js -->
    <?php echo '<script'; ?>
 src="/theme/material/js/jquery@3.2.1"><?php echo '</script'; ?>
>
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
                <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
                <span class="access-hide"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</span>
                <span class="avatar avatar-sm"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->gravatar;?>
"></span>
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
            <?php } else { ?>
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
            <?php }?>

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
                    <ul class="menu-collapse collapse in" id="ui_menu_me"><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>

-->
                        <li>
                            <a href="/user"><i class="icon icon-lg">account_box</i>&nbsp;个人中心</a>
                        </li>
<!--
                        <li>
                            <a href="/admin/plan"><i class="icon icon-lg">start</i>&nbsp;我的方案</a>
                        </li>
-->
	        <?php if ($_smarty_tpl->tpl_vars['user']->value->isTech() || $_smarty_tpl->tpl_vars['user']->value->isSales() || $_smarty_tpl->tpl_vars['user']->value->isSu()) {?>
                        <li>
                            <a href="/admin/order"><i class="icon icon-lg">assignment</i>&nbsp;合同管理</a>
                        </li>

                        <li>
                            <a href="/admin/product"><i class="icon icon-lg">shop</i>&nbsp;产品清单</a>
                        </li>
                <?php }?>

	        <?php if ($_smarty_tpl->tpl_vars['user']->value->isWHAdmin() || $_smarty_tpl->tpl_vars['user']->value->isTech() || $_smarty_tpl->tpl_vars['user']->value->isDepo() || $_smarty_tpl->tpl_vars['user']->value->isSu()) {?>
                        <li>
                            <a href="/admin/depository"><i class="icon icon-lg">account_balance</i>&nbsp;仓库库存</a>
                        </li>
                <?php }?>

	        <?php if ($_smarty_tpl->tpl_vars['user']->value->isWHAdmin() || $_smarty_tpl->tpl_vars['user']->value->isSu()) {?>
                        <li>
                            <a href="/admin/purchase"><i class="icon icon-lg">shopping_cart</i>&nbsp;物料采购</a>
                        </li>
                <?php }?>

                    	<?php if ($_smarty_tpl->tpl_vars['user']->value->isSu()) {?>
                		<li>
                    		<a href="/admin/user"><i class="icon icon-lg">person_pin</i>&nbsp;用户管理</a>
                		</li>
                	<?php }?>
                    </ul>

<!--
                    <a class="waves-attach" data-toggle="collapse" href="#ui_menu_use">使用</a>
                    <ul class="menu-collapse collapse in" id="ui_menu_use">

                        <li>
                            <a href="/user/profile"><i class="icon icon-lg">account_box</i>&nbsp;账户信息</a>
                        </li>

                        <li>
                            <a href="/user/edit"><i class="icon icon-lg">sync_problem</i>&nbsp;资料编辑</a>
                        </li>

                        <li>
                            <a href="/user/trafficlog"><i class="icon icon-lg">hourglass_empty</i>&nbsp;流量记录</a>
                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_ticket'] == 'true') {?>
                            <li>
                                <a href="/user/ticket"><i class="icon icon-lg">question_answer</i>&nbsp;工单系统</a>
                            </li>
                        <?php }?>

                        <li>
                            <a href="/user/invite"><i class="icon icon-lg">loyalty</i>&nbsp;邀请链接</a>
                        </li>

                        <li>
                            <a href="/user/node"><i class="icon icon-lg">airplanemode_active</i>&nbsp;节点列表</a>
                        </li>

                        <li>
                            <a href="/user/relay"><i class="icon icon-lg">compare_arrows</i>&nbsp;中转规则</a>
                        </li>

                        <li>
                            <a href="/user/lookingglass"><i class="icon icon-lg">visibility</i>&nbsp;延迟检测</a>
                        </li>

                        <li>
                            <a href="/user/announcement"><i class="icon icon-lg">announcement</i>&nbsp;网站公告</a>
                        </li>

                        <li>
                            <a href="/user/tutorial"><i class="icon icon-lg">start</i>&nbsp;使用教程</a>
                        </li>
                    </ul>

                    <a class="waves-attach" data-toggle="collapse" href="#ui_menu_detect">审计</a>
                    <ul class="menu-collapse collapse in" id="ui_menu_detect">
                        <li><a href="/user/detect"><i class="icon icon-lg">account_balance</i>&nbsp;审计规则</a></li>
                        <li><a href="/user/detect/log"><i class="icon icon-lg">assignment_late</i>&nbsp;审计记录</a></li>
                    </ul>

                    <a class="waves-attach" data-toggle="collapse" href="#ui_menu_help">商店</a>
                    <ul class="menu-collapse collapse in" id="ui_menu_help">
                        <li>
                            <a href="/user/code"><i class="icon icon-lg">code</i>&nbsp;充值</a>
                        </li>

                        <li>
                            <a href="/user/shop"><i class="icon icon-lg">shop</i>&nbsp;套餐购买</a>
                        </li>

                        <li><a href="/user/bought"><i class="icon icon-lg">shopping_cart</i>&nbsp;购买记录</a></li>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_donate'] == 'true') {?>
                            <li>
                                <a href="/user/donate"><i class="icon icon-lg">attach_money</i>&nbsp;捐赠公示</a>
                            </li>
                        <?php }?>

                    </ul>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
                <li>
                    <a href="/admin"><i class="icon icon-lg">person_pin</i>&nbsp;管理面板</a>
                </li>
                <?php }?>
-->
                <?php if ($_smarty_tpl->tpl_vars['can_backtoadmin']->value) {?>
                    <li>
                        <a class="padding-right-cd waves-attach" href="/user/backtoadmin"><span
                                    class="icon icon-lg margin-right">backtoadmin</span>返回管理员身份</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>

<?php if ($_smarty_tpl->tpl_vars['config']->value["enable_mylivechat"] == 'true') {
$_smarty_tpl->_subTemplateRender('file:mylivechat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
