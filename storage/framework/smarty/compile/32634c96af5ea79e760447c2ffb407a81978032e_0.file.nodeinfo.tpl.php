<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 23:05:05
  from '/www/wwwroot/sspanel/resources/views/material/user/nodeinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e61152157b229_78102511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32634c96af5ea79e760447c2ffb407a81978032e' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/nodeinfo.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/header_info.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5e61152157b229_78102511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/header_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_assignInScope('ssr_prefer', App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value));?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">节点信息</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner">
            <div class="ui-card-wrap">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">注意！</p>
                                    <p>配置文件以及二维码请勿泄露！</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">配置信息</p>
                                    <div class="tab-content">

                                        <nav class="tab-nav">
                                            <ul class="nav nav-list">
                                                <li <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                    <a class="" data-toggle="tab" href="#ssr_info"><i
                                                                class="icon icon-lg">airplanemode_active</i>&nbsp;ShadowsocksR</a>
                                                </li>
                                                <li <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                    <a class="" data-toggle="tab" href="#ss_info"><i
                                                                class="icon icon-lg">flight_takeoff</i>&nbsp;Shadowsocks</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ssr_info">
                                            <?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('ssr_item', App\Utils\URL::getItem($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['node']->value,$_smarty_tpl->tpl_vars['mu']->value,$_smarty_tpl->tpl_vars['relay_rule_id']->value,0));?>
                                                <?php if ($_smarty_tpl->tpl_vars['ssr_item']->value['obfs'] == "v2ray") {?>
                                                    <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                        页面修改后再来查看此处。</p>
                                                <?php } else { ?>
                                                    <p>服务器地址：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['address'];?>
<br>
                                                        服务器端口：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['port'];?>
<br>
                                                        加密方式：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['method'];?>
<br>
                                                        密码：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['passwd'];?>
<br>
                                                        协议：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['protocol'];?>
<br>
                                                        协议参数：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['protocol_param'];?>
<br>
                                                        混淆：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['obfs'];?>
<br>
                                                        混淆参数：<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['obfs_param'];?>
<br></p>
                                                <?php }?>
                                            <?php } else { ?>
                                                <p>您好，您目前的 加密方式，混淆，或者协议设置在 ShadowsocksR 客户端下无法连接。请您选用 Shadowsocks
                                                    客户端来连接，或者到 资料编辑 页面修改后再来查看此处。</p>
                                                <p>同时, ShadowsocksR 单端口多用户的连接不受您设置的影响,您可以在此使用相应的客户端进行连接~</p>
                                            <?php }?>
                                        </div>
                                        <div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ss_info">
                                            <?php if (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('ss_item', App\Utils\URL::getItem($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['node']->value,$_smarty_tpl->tpl_vars['mu']->value,$_smarty_tpl->tpl_vars['relay_rule_id']->value,1));?>
                                                <?php if ($_smarty_tpl->tpl_vars['ss_item']->value['obfs'] == "v2ray" && App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) != 2) {?>
                                                    <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                        页面修改后再来查看此处。</p>
                                                <?php } else { ?>
                                                    <p>服务器地址：<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['address'];?>
<br>
                                                        服务器端口：<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['port'];?>
<br>
                                                        加密方式：<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['method'];?>
<br>
                                                        密码：<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['passwd'];?>
<br>
                                                        混淆：<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['obfs'];?>
<br>
                                                        混淆参数：<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['obfs_param'];?>
<br></p>
                                                <?php }?>
                                            <?php } else { ?>
                                                <p>您好，您目前的 加密方式，混淆，或者协议设置在 Shadowsocks 客户端下无法连接。请您选用 ShadowsocksR
                                                    客户端来连接，或者到 资料编辑 页面修改后再来查看此处。</p>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">配置Json</p>

                                    <nav class="tab-nav">
                                        <ul class="nav nav-list">
                                            <li <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                <a class="" data-toggle="tab" href="#ssr_json"><i class="icon icon-lg">airplanemode_active</i>&nbsp;ShadowsocksR</a>
                                            </li>
                                            <li <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                <a class="" data-toggle="tab" href="#ss_json"><i class="icon icon-lg">flight_takeoff</i>&nbsp;Shadowsocks</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ssr_json">
                                        <?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['ssr_item']->value['obfs'] == "v2ray") {?>
                                                <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                    页面修改后再来查看此处。</p>
                                            <?php } else { ?>
                                                <pre>
{
    "server": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['address'];?>
",
    "local_address": "127.0.0.1",
    "local_port": 1080,
    "timeout": 300,
    "workers": 1,
    "server_port": <?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['port'];?>
,
    "password": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['passwd'];?>
",
    "method": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['method'];?>
",
    "obfs": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['obfs'];?>
",
    "obfs_param": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['obfs_param'];?>
",
    "protocol": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['protocol'];?>
",
    "protocol_param": "<?php echo $_smarty_tpl->tpl_vars['ssr_item']->value['protocol_param'];?>
"
}
                                               </pre>
                                            <?php }?>
                                        <?php } else { ?>
                                            <p>您好，您目前的 加密方式，混淆，或者协议设置在 ShadowsocksR 客户端下无法连接。请您选用 Shadowsocks 客户端来连接，或者到
                                                资料编辑 页面修改后再来查看此处。</p>
                                        <?php }?>
                                    </div>
                                    <div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ss_json">
                                        <?php if (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['ss_item']->value['obfs'] == "v2ray" && App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) != 2) {?>
                                                <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                    页面修改后再来查看此处。</p>
                                            <?php } else { ?>
                                                <pre>
{
        "server": "<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['address'];?>
",
        "local_address": "127.0.0.1",
        "local_port": 1080,
        "timeout": 300,
        "workers": 1,
        "server_port": <?php echo $_smarty_tpl->tpl_vars['ss_item']->value['port'];?>
,
        "password": "<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['passwd'];?>
",
        "method": "<?php echo $_smarty_tpl->tpl_vars['ss_item']->value['method'];?>
",
        "plugin": "<?php echo App\Utils\URL::getJsonObfs($_smarty_tpl->tpl_vars['ss_item']->value);?>
"
}
</pre>
                                            <?php }?>
                                        <?php } else { ?>
                                            <p>您好，您目前的 加密方式，混淆，或者协议设置在 Shadowsocks 客户端下无法连接。请您选用 ShadowsocksR 客户端来连接，或者到
                                                资料编辑 页面修改后再来查看此处。</p>
                                        <?php }?>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">配置链接</p>

                                    <nav class="tab-nav">
                                        <ul class="nav nav-list">
                                            <li <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                <a class="" data-toggle="tab" href="#ssr_url"><i class="icon icon-lg">airplanemode_active</i>&nbsp;ShadowsocksR</a>
                                            </li>
                                            <li <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                <a class="" data-toggle="tab" href="#ss_url"><i class="icon icon-lg">flight_takeoff</i>&nbsp;Shadowsocks</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ssr_url">
                                        <?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['ssr_item']->value['obfs'] == "v2ray") {?>
                                                <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                    页面修改后再来查看此处。</p>
                                            <?php } else { ?>
                                                <p><a class="copy-text"
                                                      data-clipboard-text="<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ssr_item']->value,0);?>
">点我复制配置链接</a>
                                                </p>
                                                <p><a href="<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ssr_item']->value,0);?>
">iOS 上用 Safari
                                                        打开点我即可直接添加</a></p>
                                            <?php }?>
                                        <?php } else { ?>
                                            <p>您好，您目前的 加密方式，混淆，或者协议设置在 ShadowsocksR 客户端下无法连接。请您选用 Shadowsocks 客户端来连接，或者到
                                                资料编辑 页面修改后再来查看此处。</p>
                                        <?php }?>
                                    </div>
                                    <div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ss_url">
                                        <?php if (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['ss_item']->value['obfs'] == "v2ray" && App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) != 2) {?>
                                                <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                    页面修改后再来查看此处。</p>
                                            <?php } else { ?>
                                                <p><a class="copy-text"
                                                      data-clipboard-text="<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ss_item']->value,1);?>
">点我复制配置链接</a>
                                                </p>
                                                <p><a href="<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ss_item']->value,1);?>
">iOS 上用 Safari 打开点我即可直接添加</a>
                                                </p>
                                            <?php }?>
                                        <?php } else { ?>
                                            <p>您好，您目前的 加密方式，混淆，或者协议设置在 Shadowsocks 客户端下无法连接。请您选用 ShadowsocksR 客户端来连接，或者到
                                                资料编辑 页面修改后再来查看此处。</p>
                                        <?php }?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <p class="card-heading">配置二维码</p>

                                    <nav class="tab-nav">
                                        <ul class="nav nav-list">
                                            <li <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                <a class="" data-toggle="tab" href="#ssr_qrcode">
                                                    <i class="icon icon-lg">airplanemode_active</i>
                                                    &nbsp;ShadowsocksR
                                                </a>
                                            </li>
                                            <li <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>class="active"<?php }?>>
                                                <a class="" data-toggle="tab" href="#ss_qrcode">
                                                    <i class="icon icon-lg">flight_takeoff</i>
                                                    &nbsp;Shadowsocks
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ssr_qrcode">
                                        <?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['ssr_item']->value['obfs'] == "v2ray") {?>
                                                <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                    页面修改后再来查看此处。</p>
                                            <?php } else { ?>
                                                <div class="text-center">
                                                    <div id="ss-qr-n" class="qr-center"></div>
                                                </div>
                                            <?php }?>
                                        <?php } else { ?>
                                            <p>您好，您目前的 加密方式，混淆，或者协议设置在 ShadowsocksR 客户端下无法连接。请您选用 Shadowsocks 客户端来连接，或者到
                                                资料编辑 页面修改后再来查看此处。</p>
                                        <?php }?>
                                    </div>
                                    <div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ssr_prefer']->value) {?>active in<?php }?>" id="ss_qrcode">
                                        <?php if (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['ss_item']->value['obfs'] == "v2ray" && App\Utils\URL::CanMethodConnect($_smarty_tpl->tpl_vars['user']->value->method) != 2) {?>
                                                <p>您好，Shadowsocks V2Ray-Plugin 节点需要您的加密方式使用 AEAD 系列。请您到 资料编辑
                                                    页面修改后再来查看此处。</p>
                                            <?php } else { ?>
                                                <nav class="tab-nav">
                                                    <ul class="nav nav-list">
                                                        <li class="active">
                                                            <a class="" data-toggle="tab" href="#ss_qrcode_normal">
                                                                <i class="icon icon-lg">android</i>
                                                                &nbsp;其他平台
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="" data-toggle="tab" href="#ss_qrcode_win">
                                                                <i class="icon icon-lg">desktop_windows</i>
                                                                &nbsp;Windows
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div class="tab-pane fade active in" id="ss_qrcode_normal">
                                                    <div class="text-center">
                                                        <div id="ss-qr" class="qr-center"></div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="ss_qrcode_win">
                                                    <div class="text-center">
                                                        <div id="ss-qr-win" class="qr-center"></div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        <?php } else { ?>
                                            <p>您好，您目前的 加密方式，混淆，或者协议设置在 Shadowsocks 客户端下无法连接。请您选用 ShadowsocksR 客户端来连接，或者到
                                                资料编辑 页面修改后再来查看此处。</p>
                                        <?php }?>
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
 src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        new Clipboard('.copy-text');
    });
    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已拷贝订阅链接，请您继续接下来的操作'
    });

    <?php if (App\Utils\URL::SSCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
    var text_qrcode = '<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ss_item']->value,1);?>
',
            text_qrcode_win = '<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ss_item']->value,2);?>
';

    var qrcode1 = new QRCode(document.getElementById("ss-qr"), {
                correctLevel: 3
            }),
            qrcode2 = new QRCode(document.getElementById("ss-qr-win"), {
                correctLevel: 3
            });

    qrcode1.clear();
    qrcode1.makeCode(text_qrcode);
    qrcode2.clear();
    qrcode2.makeCode(text_qrcode_win);
    <?php }?>

    <?php if (App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['mu']->value)) {?>
    var text_qrcode2 = '<?php echo App\Utils\URL::getItemUrl($_smarty_tpl->tpl_vars['ssr_item']->value,0);?>
';
    var qrcode3 = new QRCode(document.getElementById("ss-qr-n"), {
        correctLevel: 3
    });
    qrcode3.clear();
    qrcode3.makeCode(text_qrcode2);
    <?php }
echo '</script'; ?>
>
<?php }
}
