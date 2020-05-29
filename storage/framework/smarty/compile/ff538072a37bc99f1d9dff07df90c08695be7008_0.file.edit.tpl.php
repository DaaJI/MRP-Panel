<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 13:17:12
  from '/www/wwwroot/sspanel/resources/views/material/user/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5c96d8f19bd1_97492942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff538072a37bc99f1d9dff07df90c08695be7008' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/edit.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5e5c96d8f19bd1_97492942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">修改资料</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">

            <div class="col-xx-12 col-sm-6">
                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">节点连接密码修改</div>
                                    <button class="btn btn-flat" id="ss-pwd-update"><span class="icon">check</span>&nbsp;</button>
                                </div>

                                <p>当前连接密码：<code id="ajax-user-passwd"><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</code>
                                    <button class="kaobei copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
">
                                        点击拷贝
                                    </button>
                                </p>
                                <!--<div class="form-group form-group-label">
                                    <label class="floating-label" for="sspwd">新连接密码</label>
                                    <input class="form-control maxwidth-edit" id="sspwd" type="text">
                                </div>
                                <br>-->
                                <p>为了确保您的安全，节点连接密码不允许自定义，点击提交按钮将会自动生成由随机字母和数字组成的连接密码。</p>
                                <p>修改连接密码同时也会自动为您重新生成 V2Ray 节点的 UUID。</p>
                                <p>修改密码后，请立刻更新各个客户端上的连接信息。</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="card-heading">选择客户端</div>
                                <p>SS/SSD/SSR 支持的加密方式和混淆方式有所不同，请根据实际情况来进行选择</p>
                                <p>在这里选择你需要使用的客户端可以帮助你筛选加密方式和混淆方式</p>
                                <p>auth_chain 系为实验性协议，可能造成不稳定或无法使用</p>
                                <br>
                                <button class="btn btn-subscription" type="button" id="filter-btn-ss">SS/SSD</button>
                                <button class="btn btn-subscription" type="button" id="filter-btn-ssr">SSR</button>
                                <button class="btn btn-subscription" type="button" id="filter-btn-universal">通用</button>
                            </div>
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">加密方式修改</div>
                                    <button class="btn btn-flat" id="method-update"><span class="icon">check</span>&nbsp</button>
                                </div>
                                <p>
                                    当前加密方式：<code id="ajax-user-method" data-default="method">[<?php if (App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) == 2) {?>SS/SSD<?php } else { ?>SS/SSR<?php }?>可连接] <?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</code>
                                </p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="method">加密方式</label>
                                    <button id="method" class="form-control maxwidth-edit" data-toggle="dropdown"
                                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="method">
                                        <?php $_smarty_tpl->_assignInScope('method_list', $_smarty_tpl->tpl_vars['config_service']->value->getSupportParam('method'));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['method_list']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                                            <li class="<?php if (App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) == 2) {?>filter-item-ss<?php } else { ?>filter-item-universal<?php }?>">
                                                <a href="#" class="dropdown-option" onclick="return false;"
                                                   val="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"
                                                   data="method">[<?php if (App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['method']->value) == 2) {?>SS/SSD<?php } else { ?>SS/SSR<?php }?>
                                                    可连接] <?php echo $_smarty_tpl->tpl_vars['method']->value;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">协议&混淆设置</div>
                                    <button class="btn btn-flat" id="ssr-update"><span class="icon">check</span>&nbsp;</button>
                                </div>
                                <p>当前协议：<code id="ajax-user-protocol" data-default="protocol">[<?php if (App\Utils\URL::CanProtocolConnect($_smarty_tpl->tpl_vars['user']->value->protocol) == 3) {?>SS/SSD/SSR<?php } else { ?>SSR<?php }?>可连接] <?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
</code></p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="protocol">协议</label>
                                    <button id="protocol" class="form-control maxwidth-edit" data-toggle="dropdown"
                                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="protocol">
                                        <?php $_smarty_tpl->_assignInScope('protocol_list', $_smarty_tpl->tpl_vars['config_service']->value->getSupportParam('protocol'));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['protocol_list']->value, 'protocol');
$_smarty_tpl->tpl_vars['protocol']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['protocol']->value) {
$_smarty_tpl->tpl_vars['protocol']->do_else = false;
?>
                                            <li class="<?php if (App\Utils\URL::CanProtocolConnect($_smarty_tpl->tpl_vars['protocol']->value) == 3) {?>filter-item-universal<?php } else { ?>filter-item-ssr<?php }?>">
                                                <a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;?>
" data="protocol">
                                                    [<?php if (App\Utils\URL::CanProtocolConnect($_smarty_tpl->tpl_vars['protocol']->value) == 3) {?>SS/SSD/SSR<?php } else { ?>SSR<?php }?>
                                                    可连接] <?php echo $_smarty_tpl->tpl_vars['protocol']->value;?>

                                                </a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>

                            </div>

                            <div class="card-inner">
                                <p>当前混淆方式：<code id="ajax-user-obfs" data-default="obfs">[<?php if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['user']->value->obfs) >= 3) {?>SS/SSD/SSR<?php } elseif (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['user']->value->obfs) == 1) {?>SSR<?php } else { ?>SS/SSD<?php }?>可连接] <?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</code></p>
                                <p>SS/SSD 和 SSR 支持的混淆类型有所不同，simple_obfs_* 为 SS/SSD 的混淆方式，其他为 SSR 的混淆方式</p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="obfs">混淆方式</label>
                                    <button id="obfs" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="obfs">
                                        <?php $_smarty_tpl->_assignInScope('obfs_list', $_smarty_tpl->tpl_vars['config_service']->value->getSupportParam('obfs'));?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obfs_list']->value, 'obfs');
$_smarty_tpl->tpl_vars['obfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obfs']->value) {
$_smarty_tpl->tpl_vars['obfs']->do_else = false;
?>
                                            <li class="<?php if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['obfs']->value) >= 3) {?>filter-item-universal<?php } else {
if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['obfs']->value) == 1) {?>filter-item-ssr<?php } else { ?>filter-item-ss<?php }
}?>">
                                                <a href="#" class="dropdown-option" onclick="return false;" val="<?php echo $_smarty_tpl->tpl_vars['obfs']->value;?>
" data="obfs">
                                                    [<?php if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['obfs']->value) >= 3) {?>SS/SSD/SSR<?php } else {
if (App\Utils\URL::CanObfsConnect($_smarty_tpl->tpl_vars['obfs']->value) == 1) {?>SSR<?php } else { ?>SS/SSD<?php }
}?>可连接] <?php echo $_smarty_tpl->tpl_vars['obfs']->value;?>

                                                </a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-inner">
                                <p>当前混淆参数：<code id="ajax-user-obfs-param"><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</code></p>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="obs-param">在这输入混淆参数</label>
                                    <input class="form-control maxwidth-edit" id="obfs-param" type="text">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="col-xx-12 col-sm-6">

                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">账号登录密码修改</div>
                                    <button class="btn btn-flat" id="pwd-update"><span class="icon">check</span>&nbsp;
                                    </button>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="oldpwd">当前密码</label>
                                    <input class="form-control maxwidth-edit" id="oldpwd" type="password">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="pwd">新密码</label>
                                    <input class="form-control maxwidth-edit" id="pwd" type="password">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="repwd">确认新密码</label>
                                    <input class="form-control maxwidth-edit" id="repwd" type="password">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">IP 解封</div>
                                    <button class="btn btn-flat" id="unblock"><span class="icon">not_interested</span>&nbsp;
                                    </button>
                                </div>
                                <p>当前状态：<code id="ajax-block"><?php echo $_smarty_tpl->tpl_vars['Block']->value;?>
</code></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">每日邮件接收设置</div>
                                    <button class="btn btn-flat" id="mail-update"><span class="icon">check</span>&nbsp;
                                    </button>
                                </div>
                                <p class="card-heading"></p>
                                <p>当前设置：<code id="ajax-mail" data-default="mail"><?php if ($_smarty_tpl->tpl_vars['user']->value->sendDailyMail == 1) {?>发送<?php } else { ?>不发送<?php }?></code></p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="mail">发送设置</label>
                                    <button type="button" id="mail" class="form-control maxwidth-edit"
                                            data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->sendDailyMail;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="mail">
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="1"
                                               data="mail">发送</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="0"
                                               data="mail">不发送</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">联络方式修改</div>
                                    <button class="btn btn-flat" id="wechat-update"><span class="icon">check</span>&nbsp;
                                    </button>
                                </div>
                                <p>当前联络方式：
                                    <code id="ajax-im" data-default="imtype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 1) {?>微信<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 2) {?>QQ<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 3) {?>Google+<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 4) {?>Telegram<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 5) {?>Discord<?php }?>
                                    </code>
                                </p>
                                <p>当前联络方式账号：
                                    <code><?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</code>
                                </p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="imtype">选择您的联络方式</label>
                                    <button class="form-control maxwidth-edit" id="imtype" data-toggle="dropdown"
                                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->im_type;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="imtype">
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="1"
                                               data="imtype">微信</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="2"
                                               data="imtype">QQ</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="3"
                                               data="imtype">Facebook</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="4"
                                               data="imtype">Telegram</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="5"
                                               data="imtype">Discord</a></li>
                                    </ul>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="wechat">在这输入联络方式账号</label>
                                    <input class="form-control maxwidth-edit" id="wechat" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <p class="card-heading">两步验证</p>
                                <p>请使用 TOTP 两步验证器扫描下面的二维码。</p>
                                <p><i class="icon icon-lg" aria-hidden="true">android</i><a
                                            href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">&nbsp;Android</a>
                                </p>
                                <p><i class="icon icon-lg" aria-hidden="true">tablet_mac</i><a
                                            href="https://itunes.apple.com/cn/app/google-authenticator/id388497605?mt=8">&nbsp;iOS</a>
                                </p>
                                <p>在没有测试完成绑定成功之前请不要启用。</p>
                                <p>当前设置：<code data-default="ga-enable"><?php if ($_smarty_tpl->tpl_vars['user']->value->ga_enable == 1) {?> 要求验证 <?php } else { ?> 不要求 <?php }?></code>
                                </p>
                                <p>当前服务器时间：<?php echo date("Y-m-d H:i:s");?>
</p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="ga-enable">验证设置</label>
                                    <button type="button" id="ga-enable" class="form-control maxwidth-edit"
                                            data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->ga_enable;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="ga-enable">
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="0"
                                               data="ga-enable">不要求</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="1"
                                               data="ga-enable">要求验证</a></li>
                                    </ul>
                                </div>

                                <div class="form-group form-group-label">
                                    <div class="text-center">
                                        <div id="ga-qr" class="qr-center"></div>
                                        密钥：<?php echo $_smarty_tpl->tpl_vars['user']->value->ga_token;?>

                                    </div>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="code">测试一下</label>
                                    <input type="text" id="code" placeholder="输入验证器生成的数字来测试"
                                           class="form-control maxwidth-edit">
                                </div>

                            </div>
                            <div class="card-action">
                                <div class="card-action-btn pull-left">
                                    <a class="btn btn-brand-accent btn-flat waves-attach" href="/user/gareset"><span
                                                class="icon">format_color_reset</span>&nbsp;重置</a>
                                    <button class="btn btn-flat waves-attach" id="ga-test"><span
                                                class="icon">extension</span>&nbsp;测试
                                    </button>
                                    <button class="btn btn-brand btn-flat waves-attach" id="ga-set"><span class="icon">perm_data_setting</span>&nbsp;设置
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['config']->value['port_price'] >= 0 || $_smarty_tpl->tpl_vars['config']->value['port_price_specify'] >= 0) {?>
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['port_price'] >= 0) {?>
                                    <div class="card-inner">
                                        <div class="cardbtn-edit">
                                            <div class="card-heading">重置端口</div>
                                            <button class="btn btn-flat" id="portreset"><span
                                                        class="icon">autorenew</span>&nbsp;
                                            </button>
                                        </div>
                                        <p>对号码不满意？来摇号吧～！</p>
                                        <p>随机更换一个端口使用，价格：<code><?php echo $_smarty_tpl->tpl_vars['config']->value['port_price'];?>
</code>元/次</p>
                                        <p>重置后 1 分钟内生效</p>
                                        <p>当前端口：<code id="ajax-user-port"><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</code></p>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['config']->value['port_price_specify'] >= 0) {?>
                                    <div class="card-inner">
                                        <div class="cardbtn-edit">
                                            <div class="card-heading">钦定端口</div>
                                            <button class="btn btn-flat" id="portspecify"><span
                                                        class="icon">call_made</span>&nbsp;
                                            </button>
                                        </div>
                                        <p>不想摇号？来钦定端口吧～！</p>
                                        <p>价格：<code><?php echo $_smarty_tpl->tpl_vars['config']->value['port_price_specify'];?>
</code>元/次</p>
                                        <p>端口范围：<code><?php echo $_smarty_tpl->tpl_vars['config']->value['min_port'];?>
～<?php echo $_smarty_tpl->tpl_vars['config']->value['max_port'];?>
</code></p>
                                        <div class="form-group form-group-label">
                                            <label class="floating-label" for="port-specify">在这输入想钦定的端口号</label>
                                            <input class="form-control maxwidth-edit" id="port-specify" type="num">
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true' || $_smarty_tpl->tpl_vars['config']->value['enable_discord'] == 'true') {?>
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id != 0) {?>
                                        <div class="cardbtn-edit">
                                            <div class="card-heading">Telegram 绑定</div>
                                            <div><a class="btn btn-flat btn-brand-accent"
                                                    href="/user/telegram_reset"><span class="icon">not_interested</span>&nbsp;</a>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->discord != 0) {?>
                                        <div class="cardbtn-edit">
                                            <div class="card-heading">Discord 绑定</div>
                                            <div>
                                                <a class="btn btn-flat btn-brand-accent" href="/user/discord_reset">
                                                <span class="icon">not_interested</span>&nbsp;
                                                </a>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id == 0 || $_smarty_tpl->tpl_vars['user']->value->discord == 0) {?>
                                        <p>复制保存下方的二维码图片（有效期10分钟，超时请刷新本页面以重新获取，每张二维码只能使用一次）</p>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id == 0) {?>
                                            <p>私聊发给 Telegram 机器人 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a> 以绑定
                                                Telegram</p>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->discord == 0) {?>
                                            <p>私聊发给 Discord 机器人 以绑定 Discord</p>
                                        <?php }?>
                                    <?php }?>
                                    <div class="form-group form-group-label">
                                        <div class="text-center">
                                            <div id="telegram-qr" class="qr-center"></div>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->telegram_id != 0) {?>
                                                <p>当前绑定Telegram账户：<a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
">@<?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</a>
                                                </p>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->discord != 0) {?>
                                                <p>当前绑定Telegram账户：<?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <div class="card margin-bottom-no">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">主题修改</div>
                                    <button class="btn btn-flat" id="theme-update"><span class="icon">check</span>&nbsp;
                                    </button>
                                </div>
                                <p>当前主题：<code data-default="theme"><?php echo $_smarty_tpl->tpl_vars['user']->value->theme;?>
</code></p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="theme">主题</label>
                                    <button id="theme" type="button" class="form-control maxwidth-edit" data-toggle="dropdown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->theme;?>
">

                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="mail">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
                                            <li>
                                                <a href="#" class="dropdown-option" onclick="return false;"
                                                   val="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" data="theme"><?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {
        new Clipboard('.copy-text');
    });

    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已复制到您的剪贴板。';
    });
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    /*
     * 筛选 SS/SSR 加密、混淆和协议的选项
     *
     * 引入三个按钮：
     * #filter-btn-ss 筛选 SS，点击以后隐藏 .filter-item-ssr，显示 .filter-item-ss 和 .filter-item-universal
     * #filter-btn-ssr 筛选 SSR，点击以后隐藏 .filter-item-ss，显示 .filter-item-ssr 和 .filter-item-universal
     * #filter-btn-universal 筛选必须同时兼容两者的，点击以后隐藏 .filter-item-ss 和 .filter-item-ssr，显示 .filter-item-universal
     *
     * 引入函数 hideFilterItem(itemType) 和 showFilterItem(itemType)，参数 item 可以是 ss ssr universal。
     */
    (() => {
        const hideFilterItem = (itemType) => {
            for (let i of $$.getElementsByClassName(`filter-item-${itemType}`)) {
                i.style.display = 'none';
            }
        };
        const showFilterItem = (itemType) => {
            for (let i of $$.getElementsByClassName(`filter-item-${itemType}`)) {
                i.style.display = 'block';
            }
        };

        const chooseSS = () => {
            hideFilterItem('ssr');
            showFilterItem('ss');
            showFilterItem('universal');
        };

        const chooseSSR = () => {
            hideFilterItem('ss');
            showFilterItem('ssr');
            showFilterItem('universal');
        };

        const chooseUniversal = () => {
            hideFilterItem('ss');
            hideFilterItem('ssr');
            showFilterItem('universal');
        };

        $$.getElementById('filter-btn-ss').addEventListener('click', chooseSS);
        $$.getElementById('filter-btn-ssr').addEventListener('click', chooseSSR);
        $$.getElementById('filter-btn-universal').addEventListener('click', chooseUniversal);
    })();
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portreset").click(function () {
            $.ajax({
                type: "POST",
                url: "resetport",
                dataType: "json",
                data: {},
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-port').innerHTML = data.msg;
                        $$.getElementById('msg').innerHTML = `设置成功，新端口是 ${
                                data.msg
                                }`;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portspecify").click(function () {
            $.ajax({
                type: "POST",
                url: "specifyport",
                dataType: "json",
                data: {
                    port: $$getValue('port-specify')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-port').innerHTML = $$getValue('port-specify');
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#setpac").click(function () {
            $.ajax({
                type: "POST",
                url: "pacset",
                dataType: "json",
                data: {
                    pac: $("#pac").text()
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "password",
                dataType: "json",
                data: {
                    oldpwd: $$getValue('oldpwd'),
                    pwd: $$getValue('pwd'),
                    repwd: $$getValue('repwd')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var ga_qrcode = '<?php echo $_smarty_tpl->tpl_vars['user']->value->getGAurl();?>
',
            qrcode1 = new QRCode(document.getElementById("ga-qr"));

    qrcode1.clear();
    qrcode1.makeCode(ga_qrcode);

    <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true' || $_smarty_tpl->tpl_vars['config']->value['enable_discord'] == 'true') {?>

    var telegram_qrcode = 'mod://bind/<?php echo $_smarty_tpl->tpl_vars['bind_token']->value;?>
';

    if ($$.getElementById("telegram-qr")) {
        let qrcode2 = new QRCode(document.getElementById("telegram-qr"));
        qrcode2.clear();
        qrcode2.makeCode(telegram_qrcode);
    }

    <?php }
echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#wechat-update").click(function () {
            $.ajax({
                type: "POST",
                url: "wechat",
                dataType: "json",
                data: {
                    wechat: $$getValue('wechat'),
                    imtype: $$getValue('imtype')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-im').innerHTML = `${$("#imtype").find("option:selected").text()} ${$$getValue('wechat')}`
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ssr-update").click(function () {
            $.ajax({
                type: "POST",
                url: "ssr",
                dataType: "json",
                data: {
                    protocol: $$getValue('protocol'),
                    obfs: $$getValue('obfs'),
                    obfs_param: $$getValue('obfs-param')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-protocol').innerHTML = $$getValue('protocol');
                        $$.getElementById('ajax-user-obfs').innerHTML = $$getValue('obfs');
                        $$.getElementById('ajax-user-obfs-param').innerHTML = $$getValue('obfs-param');
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#relay-update").click(function () {
            $.ajax({
                type: "POST",
                url: "relay",
                dataType: "json",
                data: {
                    relay_enable: $$getValue('relay_enable'),
                    relay_info: $$getValue('relay_info')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#unblock").click(function () {
            $.ajax({
                type: "POST",
                url: "unblock",
                dataType: "json",
                data: {},
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-block').innerHTML = `IP：${
                                data.msg
                                } 没有被封`;
                        $$.getElementById('msg').innerHTML = `IP：${
                                data.msg
                                } 解封成功过`;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-test").click(function () {
            $.ajax({
                type: "POST",
                url: "gacheck",
                dataType: "json",
                data: {
                    code: $$getValue('code')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-set").click(function () {
            $.ajax({
                type: "POST",
                url: "gaset",
                dataType: "json",
                data: {
                    enable: $$getValue('ga-enable')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        let newsspwd = Math.random().toString(36).substr(2);
        $("#ss-pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "sspwd",
                dataType: "json",
                data: {
                    sspwd: newsspwd
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-passwd').innerHTML = newsspwd;
                        $$.getElementById('msg').innerHTML = '修改成功';
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = '修改失败';
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#mail-update").click(function () {
            $.ajax({
                type: "POST",
                url: "mail",
                dataType: "json",
                data: {
                    mail: $$getValue('mail')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-mail').innerHTML = ($$getValue('mail') === '1') ? '发送' : '不发送'
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#theme-update").click(function () {
            $.ajax({
                type: "POST",
                url: "theme",
                dataType: "json",
                data: {
                    theme: $$getValue('theme')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },

                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#method-update").click(function () {
            $.ajax({
                type: "POST",
                url: "method",
                dataType: "json",
                data: {
                    method: $$getValue('method')
                },
                success: (data) => {
                    $$.getElementById('ajax-user-method').innerHTML = $$getValue('method');
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = '修改成功';
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${
                            data.msg
                            } 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php }
}
