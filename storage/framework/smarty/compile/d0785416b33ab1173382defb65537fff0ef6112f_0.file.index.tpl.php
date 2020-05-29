<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 13:48:56
  from '/www/wwwroot/sspanel/resources/views/material/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6092c80fa081_58695874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0785416b33ab1173382defb65537fff0ef6112f' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/index.tpl',
      1 => 1583387331,
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
function content_5e6092c80fa081_58695874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('ssr_prefer', App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,0));?>

<style>
.table {
    box-shadow: none;
}
table tr td:first-child {
    text-align: right;
    font-weight: bold;
}
</style>

<main class="content">

    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">用户中心</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">

                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">帐号等级</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                                            <dd>VIP <?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
</dd>
                                        <?php } else { ?>
                                            <dd>普通用户</dd>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                                        <div style="font-size: 14px">等级到期时间 <?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
</div>
                                    <?php } else { ?>
                                        <div style="font-size: 14px">账户等级不会过期</div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                                    <span><i class="icon icon-md">add_circle</i>到期流量清空</span>
                                <?php } else { ?>
                                    <span><i class="icon icon-md">add_circle</i>升级解锁 VIP 节点</span>
                                <?php }?>
                                <a href="/user/shop" class="card-tag tag-orange">商店</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">余额</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 CNY
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div style="font-size: 14px">账户有效时间 <?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
</div>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <span><i class="icon icon-md">attach_money</i>到期账户自动删除</span>
                                <a href="/user/code" class="card-tag tag-green">充值</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">在线设备数</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->node_connector != 0) {?>
                                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->online_ip_count();?>
 / <?php echo $_smarty_tpl->tpl_vars['user']->value->node_connector;?>
</dd>
                                        <?php } else { ?>
                                            <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->online_ip_count();?>
 / 不限制</dd>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->lastSsTime() != "从未使用喵") {?>
                                        <div style="font-size: 14px">上次使用：<?php echo $_smarty_tpl->tpl_vars['user']->value->lastSsTime();?>
</div>
                                    <?php } else { ?>
                                        <div style="font-size: 14px">从未使用过</div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <span><i class="icon icon-md">donut_large</i>在线设备/设备限制数</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xx-12 col-xs-6 col-lg-3">
                    <div class="card user-info">
                        <div class="user-info-main">
                            <div class="nodemain">
                                <div class="nodehead node-flex">
                                    <div class="nodename">端口速率</div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->node_speedlimit != 0) {?>
                                            <dd><code><?php echo $_smarty_tpl->tpl_vars['user']->value->node_speedlimit;?>
</code>Mbps</dd>
                                        <?php } else { ?>
                                            <dd>无限制</dd>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="nodemiddle node-flex">
                                    <div style="font-size: 14px">实际速率受限于运营商带宽上限</div>
                                </div>
                            </div>
                        </div>
                        <div class="user-info-bottom">
                            <div class="nodeinfo node-flex">
                                <span><i class="icon icon-md">signal_cellular_alt</i>账户最高下行网速</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="ui-card-wrap">

                <div class="col-xx-12 col-sm-5">

                    <div class="card">
                        <div class="card-main">
                        <div class="card-inner margin-bottom-no">
                            <p class="card-heading" style="margin-bottom: 0;"><i class="icon icon-md">account_circle</i>流量使用情况</p>
                                <div class="progressbar">
                                    <div class="before"></div>
                                    <div class="bar tuse color3"
                                         style="width:calc(<?php echo $_smarty_tpl->tpl_vars['user']->value->transfer_enable == 0 ? 0 : ($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d-$_smarty_tpl->tpl_vars['user']->value->last_day_t)/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
%);"></div>
                                    <div class="label-flex">
                                        <div class="label la-top">
                                            <div class="bar ard color3"></div>
                                            <span class="traffic-info">今日已用</span>
                                            <code class="card-tag tag-red"><?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTraffic();?>
</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressbar">
                                    <div class="before"></div>
                                    <div class="bar ard color2"
                                         style="width:calc(<?php echo $_smarty_tpl->tpl_vars['user']->value->transfer_enable == 0 ? 0 : $_smarty_tpl->tpl_vars['user']->value->last_day_t/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
%);">
                                        <span></span>
                                    </div>
                                    <div class="label-flex">
                                        <div class="label la-top">
                                            <div class="bar ard color2"><span></span></div>
                                            <span class="traffic-info">过去已用</span>
                                            <code class="card-tag tag-orange"><?php echo $_smarty_tpl->tpl_vars['user']->value->LastusedTraffic();?>
</code>
                                        </div>
                                    </div>
                                </div>
                                <div class="progressbar">
                                    <div class="before"></div>
                                    <div class="bar remain color"
                                         style="width:calc(<?php echo $_smarty_tpl->tpl_vars['user']->value->transfer_enable == 0 ? 0 : ($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d))/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
%);">
                                        <span></span>
                                    </div>
                                    <div class="label-flex">
                                        <div class="label la-top">
                                            <div class="bar ard color"><span></span></div>
                                            <span class="traffic-info">剩余流量</span>
                                            <code class="card-tag tag-green" id="remain"><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
</code>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-inner margin-bottom-no">
                                <p class="card-heading"><i class="icon icon-md">account_circle</i>签到</p>

                                    <p>上次签到时间：<?php echo $_smarty_tpl->tpl_vars['user']->value->lastCheckInTime();?>
</p>

                                    <p id="checkin-msg"></p>

                                    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                                        <div id="popup-captcha"></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null && $_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                                        <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                                    <?php }?>

                                    <div class="card-action">
                                        <div class="usercheck pull-left">
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
                                                <div id="checkin-btn">
                                                    <button id="checkin" class="btn btn-brand btn-flat"><span
                                                                class="icon">check</span>&nbsp;点我签到&nbsp;
                                                        <div><span class="icon">screen_rotation</span>&nbsp;或者摇动手机签到
                                                        </div>
                                                    </button>
                                                </div>
                                            <?php } else { ?>
                                                <p><a class="btn btn-brand disabled btn-flat" href="#"><span
                                                                class="icon">check</span>&nbsp;今日已签到</a></p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </dl>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner margin-bottom-no">
                                <p class="card-heading"><i class="icon icon-md">notifications_active</i>公告栏</p>
                                <?php if ($_smarty_tpl->tpl_vars['ann']->value != null) {?>
                                    <p><?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>
</p>
                                    <br/>
                                    <strong>查看所有公告请<a href="/user/announcement">点击这里</a></strong>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_admin_contact"] == 'true') {?>
                                    <p class="card-heading">管理员联系方式</p>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact1"] != null) {?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact1"];?>
</p>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact2"] != null) {?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact2"];?>
</p>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact3"] != null) {?>
                                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact3"];?>
</p>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xx-12 col-sm-7">

                    <div class="card quickadd">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading"><i class="icon icon-md">phonelink</i> 快速添加节点</div>
                                    <div class="reset-flex"><span>重置订阅链接</span><a class="reset-link btn btn-brand-accent btn-flat"><i class="icon">autorenew</i>&nbsp;</a></div>
                                </div>
                                <nav class="tab-nav margin-top-no">
                                    <ul class="nav nav-list">
                                        <li <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                            <a class="" data-toggle="tab" href="#all_ssr"><i class="icon icon-lg">airplanemode_active</i>&nbsp;SSR</a>
                                        </li>
<!--                                        <li <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                            <a class="" data-toggle="tab" href="#all_ss"><i class="icon icon-lg">flight_takeoff</i>&nbsp;SS/SSD</a>
                                        </li>
-->
                                        <li>
                                            <a class="" data-toggle="tab" href="#all_v2ray"><i class="icon icon-lg">flight_takeoff</i>&nbsp;V2RAY</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="all_ssr">
                                            <?php $_smarty_tpl->_assignInScope('pre_user', App\Utils\URL::cloneUser($_smarty_tpl->tpl_vars['user']->value));?>

                                                <?php $_smarty_tpl->_assignInScope('user', App\Utils\URL::getSSRConnectInfo($_smarty_tpl->tpl_vars['pre_user']->value));?>
                                                <?php $_smarty_tpl->_assignInScope('ssr_url_all', App\Utils\URL::getAllUrl($_smarty_tpl->tpl_vars['pre_user']->value,0,0));?>
                                                <?php $_smarty_tpl->_assignInScope('ssr_url_all_mu', App\Utils\URL::getAllUrl($_smarty_tpl->tpl_vars['pre_user']->value,1,0));?>
                                                <?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value)) {?>
<!--
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>端口</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>密码</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义加密</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义协议</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆参数</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <br>

                                                <?php if ($_smarty_tpl->tpl_vars['mergeSub']->value != 'true') {?>
                                                <div>
                                                    <span class="icon icon-lg text-white">flash_auto</span> 普通节点订阅地址：
                                                </div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" value="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=0" readonly="true">
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=0">点击复制</button>
                                                </div>

                                                <br>
-->
                                                <div>
                                                    <span class="icon icon-lg text-white">flash_auto</span> 单端口节点订阅地址：
                                                </div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" value="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=1" readonly="true">
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=1">点击复制</button>
                                                </div>
                                                <?php } else { ?>
                                                <div>
                                                    <span class="icon icon-lg text-white">flash_auto</span> 订阅地址：
                                                </div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" value="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
" readonly="true">
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
">点击复制</button>
                                                </div>
                                                <?php }?>

                                                <br>

                                                    <?php if ($_smarty_tpl->tpl_vars['mergeSub']->value != 'true') {?>
<!--
                                                        <button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ssr_url_all']->value;?>
">点击复制 SSR 普通端口节点链接</button>
-->
                                                        <button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ssr_url_all_mu']->value;?>
">点击复制 SSR 单端口多用户链接</button>
                                                    <?php } else { ?>
                                                        <button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ssr_url_all']->value;?>
">点击复制全部 SSR 节点链接</button>
                                                    <?php }?>

                                                <?php } else { ?>
                                                    <p>您好，您目前的 加密方式，混淆，或者协议设置在 ShadowsocksR 客户端下无法连接。请您选用 Shadowsocks
                                                        客户端来连接，或者到 资料编辑 页面修改后再来查看此处</p>
                                                    <p>同时, ShadowsocksR 单端口多用户的连接不受您设置的影响,您可以在此使用相应的客户端进行连接~</p>
                                                    <p>请注意，在当前状态下您的 SSR 订阅链接已经失效，您无法通过此种方式导入节点</p>
                                                <?php }?>

                                        </div>

                                        <div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="all_ss">
                                                <?php $_smarty_tpl->_assignInScope('user', App\Utils\URL::getSSConnectInfo($_smarty_tpl->tpl_vars['pre_user']->value));?>
                                                <?php $_smarty_tpl->_assignInScope('ss_url_all_mu', App\Utils\URL::getAllUrl($_smarty_tpl->tpl_vars['pre_user']->value,1,1));?>
                                                <?php $_smarty_tpl->_assignInScope('ss_url_all', App\Utils\URL::getAllUrl($_smarty_tpl->tpl_vars['pre_user']->value,0,2));?>
                                                <?php $_smarty_tpl->_assignInScope('ssd_url_all', App\Utils\URL::getAllSSDUrl($_smarty_tpl->tpl_vars['user']->value));?>

                                                <?php if (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value)) {?>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>端口</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>密码</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义加密</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>自定义混淆参数</strong></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <div>
                                                    <span class="icon icon-lg text-white">flash_auto</span> SSD 节点订阅地址
                                                </div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" readonly value="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=3" readonly="true">
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=3">点击复制
                                                    </button>
                                                </div>

                                                <br>
                                                <button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ssd_url_all']->value;?>
">点击复制全部 SSD 节点链接</button>
                                                <button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ss_url_all']->value;?>
">点击复制全部 SS 节点链接</button>
                                                
                                                <?php } else { ?>
                                                    <p>您好，您目前的 加密方式，混淆，或者协议设置在 SS 客户端下无法连接。请您选用 SSR 客户端来连接，或者到 资料编辑 页面修改后再来查看此处</p>
                                                    <p>同时, Shadowsocks 单端口多用户的连接不受您设置的影响,您可以在此使用相应的客户端进行连接~</p>
                                                <?php }?>
                                        </div>

                                        <div class="tab-pane fade" id="all_v2ray">

                                                <?php $_smarty_tpl->_assignInScope('v2_url_all', App\Utils\URL::getAllVMessUrl($_smarty_tpl->tpl_vars['user']->value));?>
                                                

                                                <div><span class="icon icon-lg text-white">flash_auto</span> 订阅地址：</div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" value="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=2" readonly="true"/>
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subUrl']->value;
echo $_smarty_tpl->tpl_vars['ssr_sub_token']->value;?>
?mu=2">点击复制</button>
                                                </div>
                                                <br>
                                                <button class="copy-text btn btn-subscription" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['v2_url_all']->value;?>
">点击复制全部 VMess 链接</button>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner margin-bottom-no">
                                <div class="card-heading"><i class="icon icon-md">phonelink</i> 客户端下载</div>

                                <nav class="tab-nav margin-top-no">
                                    <ul class="nav nav-list">
                                        <li <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                            <a class="" data-toggle="tab" href="#all_ssr_client"><i class="icon icon-lg">airplanemode_active</i>&nbsp;SSR</a>
                                        </li>
<!--                                        <li <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                            <a class="" data-toggle="tab" href="#all_ss_client"><i class="icon icon-lg">flight_takeoff</i>&nbsp;SS/SSD</a>
                                        </li>
-->
                                        <li>
                                            <a class="" data-toggle="tab" href="#all_v2ray_client"><i class="icon icon-lg">flight_takeoff</i>&nbsp;V2RAY</a>
                                        </li>

                                        <?php if ($_smarty_tpl->tpl_vars['display_ios_class']->value >= 0) {?>
                                        <li>
                                            <a class="" data-toggle="tab" href="#all_appid_client"><i class="icon icon-lg">phone_iphone</i>&nbsp;iOS 公共账号</a>
                                        </li>
                                        <?php }?>
                                    </ul>
                                </nav>
                                <div class="card-inner">
                                    <div class="tab-content">
                                        <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="all_ssr_client">
                                            <p><i class="icon icon-lg">laptop_windows</i> Windows：下载 <a href="/download/SSR-win.zip" target="_blank">ShadowsocksR Windows</a> 或 <a href="/download/Netch.7z" target="_blank">Netch</a></p>
                                            <p><i class="icon icon-lg">laptop_mac</i> macOS：下载 <a href="/download/ShadowsocksX-NG.zip" target="_blank">ShadowsocksX-NG</a></p>
                                            <p><i class="icon icon-lg">laptop_windows</i> Linux（GUI）：下载 <a href="/download/electron-ssr.AppImage" target="_blank">Electron SSR</a></p>
                                            <p><i class="icon icon-lg">android</i> Android：下载 <a href="/download/shadowsocksr-android.apk">SSR</a></p>
                                            <p><i class="icon icon-lg">phone_iphone</i> iOS：可以使用 Shadowrocket、Quantumult、Potatso 或 Potatso Lite</p>
                                            <p><i class="icon icon-lg">router</i> Koolshare 固件路由器/软路由：前往 <a href="https://github.com/hq450/fancyss_history_package" target="_blank">FancySS 下载页面</a></p>
                                        </div>
                                        <div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="all_ss_client">
                                            <p><i class="icon icon-lg">laptop_windows</i> Windows：下载 <a href="/ssr-download/ssd-win.7z" target="_blank">SSD Windows</a>，<a href="/ssr-download/ss-win.zip" target="_blank">Shadowsocks Windows</a> 或 <a href="/ssr-download/SSTap.7z" target="_blank">SSTap</a></p>
                                            <p><i class="icon icon-lg">laptop_mac</i> macOS：下载 <a href="/ssr-download/ss-mac.zip" target="_blank">ShadowsocksX-NG</a></p>
                                            <p><i class="icon icon-lg">laptop_windows</i> Linux（GUI）：下载 <a href="/ssr-download/ssr-linux.AppImage" target="_blank">Electron SSR</a></p>
                                            <p><i class="icon icon-lg">android</i> Android：下载 <a href="/ssr-download/ss-android.apk">Shadowsocks Android</a> 或 <a href="/ssr-download/ssd-android.apk">SSD Android</a>。如果需要启用混淆还需要下载 <a href="/ssr-download/ss-android-obfs.apk">Simple-Obfs 混淆插件</a>。</p>
                                            <p><i class="icon icon-lg">phone_iphone</i> iOS：可以使用 Shadowrocket、Quantumult、Potatso 或 Potatso Lite</p>
                                            <p><i class="icon icon-lg">router</i> Koolshare 固件路由器/软路由：前往 <a href="https://github.com/hq450/fancyss_history_package" target="_blank">FancySS 下载页面</a></p>
                                        </div>
                                        <div class="tab-pane fade" id="all_v2ray_client">
                                            <p><i class="icon icon-lg">laptop_windows</i> Windows：下载 <a href="/download/V2RayN.zip" target="_blank">V2RayN</a></p>
                                            <p><i class="icon icon-lg">laptop_mac</i> macOS：下载 <a href="/download/V2RayU.dmg">V2RayU</a></p>
                                            <p><i class="icon icon-lg">android</i> Android：下载 <a href="/download/V2RayNG.apk">V2RayNG</a></p>
                                            <p><i class="icon icon-lg">phone_iphone</i> iOS：可以使用 Shadowrocket</p>
                                            <p><i class="icon icon-lg">router</i> Koolshare 固件路由器/软路由：前往 <a href="https://github.com/hq450/fancyss_history_package/tree/master/fancyss_X64" target="_blank">FancySS 历史下载页面</a> 下载 v2ray 插件</p>
                                        </div>

                                        <?php if ($_smarty_tpl->tpl_vars['display_ios_class']->value >= 0) {?>
                                        <div class="tab-pane fade" id="all_appid_client">
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->class >= $_smarty_tpl->tpl_vars['display_ios_class']->value && $_smarty_tpl->tpl_vars['user']->value->get_top_up() >= $_smarty_tpl->tpl_vars['display_ios_topup']->value) {?>
                                                <div>
                                                    <span class="icon icon-lg text-white">account_box</span>本站iOS账户：
                                                </div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" readonly value="<?php echo $_smarty_tpl->tpl_vars['ios_account']->value;?>
" readonly="true">
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ios_account']->value;?>
">点击复制</button>
                                                    <br>
                                                </div>

                                                <div>
                                                    <span class="icon icon-lg text-white">lock</span> 本站iOS密码：
                                                </div>
                                                <div class="float-clear">
                                                    <input type="text" class="input form-control form-control-monospace cust-link col-xx-12 col-sm-8 col-lg-7" name="input1" readonly value="<?php echo $_smarty_tpl->tpl_vars['ios_password']->value;?>
" readonly="true">
                                                    <button class="copy-text btn btn-subscription col-xx-12 col-sm-3 col-lg-2" type="button" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['ios_password']->value;?>
">点击复制</button>
                                                    <br>
                                                </div>
                                                <p>
                                                    <span class="icon icon-lg text-white">error</span>
                                                    <strong>禁止将账户分享给他人！</strong>
                                                </p>
                                                <br>
                                            <?php } else { ?>
                                                <p class="card-heading" align="center">
                                                    <i class="icon icon-lg">visibility_off</i> <b>等级至少为<code><?php echo $_smarty_tpl->tpl_vars['display_ios_class']->value;?>
</code>且累计充值大于<code><?php echo $_smarty_tpl->tpl_vars['display_ios_topup']->value;?>
</code>时可见，如需升级请<a href="/user/shop">点击这里</a>升级套餐</b>
                                                </p>
                                            <?php }?>

                                        </div>
                                        <?php }?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>


    </div>
    </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/shake.js@1.2.2/shake.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    ;(function () {
        'use strict'

        let onekeysubBTN = document.querySelectorAll('[data-onekeyfor]');
        for (let i = 0; i < onekeysubBTN.length; i++) {
            onekeysubBTN[i].addEventListener('click', () => {
                let onekeyId = onekeysubBTN[i].dataset.onekeyfor;
                AddSub(onekeyId);
            });
        }

        function AddSub(id) {
            let url = $$getValue(id),
                tmp = window.btoa(url);

            tmp = tmp.substring(0, tmp.length);
            url = "sub://" + tmp + "#";
            window.location.href = url;
        }
    })();
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    function DateParse(str_date) {
        var str_date_splited = str_date.split(/[^0-9]/);
        return new Date(str_date_splited[0], str_date_splited[1] - 1, str_date_splited[2], str_date_splited[3], str_date_splited[4], str_date_splited[5]);
    }

    /*
     * Author: neoFelhz & CloudHammer
     * https://github.com/CloudHammer/CloudHammer/make-sspanel-v3-mod-great-again
     * License: MIT license & SATA license
     */
    function CountDown() {
        var levelExpire = DateParse("<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
");
        var accountExpire = DateParse("<?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
");
        var nowDate = new Date();
        var a = nowDate.getTime();
        var b = levelExpire - a;
        var c = accountExpire - a;
        var levelExpireDays = Math.floor(b / (24 * 3600 * 1000));
        var accountExpireDays = Math.floor(c / (24 * 3600 * 1000));
        if (levelExpireDays < 0 || levelExpireDays > 315360000000) {
            document.getElementById('days-level-expire').innerHTML = "无限期";
            for (var i = 0; i < document.getElementsByClassName('label-level-expire').length; i += 1) {
                document.getElementsByClassName('label-level-expire')[i].style.display = 'none';
            }
        } else {
            document.getElementById('days-level-expire').innerHTML = levelExpireDays;
        }
        if (accountExpireDays < 0 || accountExpireDays > 315360000000) {
            document.getElementById('days-account-expire').innerHTML = "无限期";
            for (var i = 0; i < document.getElementsByClassName('label-account-expire').length; i += 1) {
                document.getElementsByClassName('label-account-expire')[i].style.display = 'none';
            }
        } else {
            document.getElementById('days-account-expire').innerHTML = accountExpireDays;
        }
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(function () {
        new Clipboard('.copy-text');
    });

    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已复制，请您继续接下来的操作';
    });

    $(function () {
        new Clipboard('.reset-link');
    });

    $(".reset-link").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已重置您的订阅链接，请变更或添加您的订阅链接！';
        window.setTimeout("location.href='/user/url_reset'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
    });

    <?php if ($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d) == 0) {?>
    window.onload = function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '您的流量已经用完或账户已经过期了，如需继续使用，请进入商店选购新的套餐~';
    };
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value == null) {?>

    var checkedmsgGE = '<p><a class="btn btn-brand disabled btn-flat waves-attach" href="#"><span class="icon">check</span>&nbsp;已签到</a></p>';
    window.onload = function () {
        var myShakeEvent = new Shake({
            threshold: 15
        });

        myShakeEvent.start();
        CountDown();

        window.addEventListener('shake', shakeEventDidOccur, false);

        function shakeEventDidOccur() {
            if ("vibrate" in navigator) {
                navigator.vibrate(500);
            }

            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                data: {
                    recaptcha: grecaptcha.getResponse()
                },<?php }?>
                success: (data) => {
                    if (data.ret) {

                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.traffic;
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }
    };


    $(document).ready(function () {
        $("#checkin").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                data: {
                    recaptcha: grecaptcha.getResponse()
                },<?php }?>
                success: (data) => {
                    if (data.ret) {
                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.traffic;
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            })
        })
    })


    <?php } else { ?>


    window.onload = function () {
        var myShakeEvent = new Shake({
            threshold: 15
        });

        myShakeEvent.start();

        window.addEventListener('shake', shakeEventDidOccur, false);

        function shakeEventDidOccur() {
            if ("vibrate" in navigator) {
                navigator.vibrate(500);
            }

            c.show();
        }
    };


    var handlerPopup = function (captchaObj) {
        c = captchaObj;
        captchaObj.onSuccess(function () {
            var validate = captchaObj.getValidate();
            $.ajax({
                url: "/user/checkin", // 进行二次验证
                type: "post",
                dataType: "json",
                data: {
                    // 二次验证所需的三个值
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
                },
                success: (data) => {
                    if (data.ret) {
                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.traffic;
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        });
        // 弹出式需要绑定触发验证码弹出按钮
        //captchaObj.bindOn("#checkin")
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#popup-captcha");
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };

    initGeetest({
        gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
        challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
        product: "popup", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
        offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
    }, handlerPopup);



    <?php }?>


<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
    <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<?php }
}
}
