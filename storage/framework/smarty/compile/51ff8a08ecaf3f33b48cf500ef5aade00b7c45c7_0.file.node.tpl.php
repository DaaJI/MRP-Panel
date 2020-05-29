<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-25 21:15:55
  from '/www/wwwroot/zzz.zzz/resources/views/material/user/node.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7b598b5ae812_16179163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ff8a08ecaf3f33b48cf500ef5aade00b7c45c7' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/user/node.tpl',
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
function content_5e7b598b5ae812_16179163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'displayV2rayNode' => 
  array (
    'compiled_filepath' => '/www/wwwroot/zzz.zzz/storage/framework/smarty/compile/51ff8a08ecaf3f33b48cf500ef5aade00b7c45c7_0.file.node.tpl.php',
    'uid' => '51ff8a08ecaf3f33b48cf500ef5aade00b7c45c7',
    'call_name' => 'smarty_template_function_displayV2rayNode_5717574455e7b598b535d80_57298196',
  ),
  'displayNodeLinkV2' => 
  array (
    'compiled_filepath' => '/www/wwwroot/zzz.zzz/storage/framework/smarty/compile/51ff8a08ecaf3f33b48cf500ef5aade00b7c45c7_0.file.node.tpl.php',
    'uid' => '51ff8a08ecaf3f33b48cf500ef5aade00b7c45c7',
    'call_name' => 'smarty_template_function_displayNodeLinkV2_5717574455e7b598b535d80_57298196',
  ),
));
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/SuicidalCat/canvasjs.js@v2.3.1/canvasjs.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@3.3.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } <?php echo '</script'; ?>
>





<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">节点列表</h1>
        </div>
    </div>

    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 nodelist">

                        <div class="ui-switch node-switch">
                            <div class="card">
                                <div class="card-main">
                                    <div class="card-inner ui-switch">
                                        <div class="switch-btn" id="switch-cards"><a href="#" onclick="return false"><i
                                                        class="mdui-icon material-icons">apps</i></a></div>
                                        <div class="switch-btn" id="switch-table"><a href="#" onclick="return false"><i
                                                        class="mdui-icon material-icons">dehaze</i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="node-cardgroup">
                            <?php $_smarty_tpl->_assignInScope('class', -1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node', true);
$_smarty_tpl->tpl_vars['node']->iteration = 0;
$_smarty_tpl->tpl_vars['node']->index = -1;
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->tpl_vars['node']->iteration++;
$_smarty_tpl->tpl_vars['node']->index++;
$_smarty_tpl->tpl_vars['node']->first = !$_smarty_tpl->tpl_vars['node']->index;
$_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration === $_smarty_tpl->tpl_vars['node']->total;
$__foreach_node_0_saved = $_smarty_tpl->tpl_vars['node'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['node']->value['class'] != $_smarty_tpl->tpl_vars['class']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('class', $_smarty_tpl->tpl_vars['node']->value['class']);?>
                            <?php if (!$_smarty_tpl->tpl_vars['node']->first) {?></div><?php }?>
                        <div class="nodetitle">
                            <a class="waves-effect waves-button" data-toggle="collapse" href="#cardgroup<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
                               aria-expanded="true" aria-controls="cardgroup<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                                <span><?php if ($_smarty_tpl->tpl_vars['class']->value == 0) {?>普通<?php } else { ?>VIP <?php echo $_smarty_tpl->tpl_vars['node']->value['class'];?>
 <?php }?>用户节点</span><i
                                        class="material-icons">expand_more</i>
                            </a>
                        </div>
                        <div class="card-row collapse in" id="cardgroup<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
                            <?php }?>
                            <div class="node-card node-flex" cardindex="<?php echo $_smarty_tpl->tpl_vars['node']->index;?>
">
                                <div class="nodemain">
                                    <div class="nodehead node-flex">
                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_flag'] == 'true') {?>
                                            <div class="flag"><img src="/images/prefix/<?php echo $_smarty_tpl->tpl_vars['node']->value['flag'];?>
">
                                            </div><?php }?>
                                        <div class="nodename"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</div>
                                    </div>
                                    <div class="nodemiddle node-flex">
                                        <div class="onlinemember node-flex"><i class="material-icons node-icon">flight_takeoff</i><span><?php if ($_smarty_tpl->tpl_vars['node']->value['online_user'] == -1) {?> N/A<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['node']->value['online_user'];
}?></span>
                                        </div>
                                        <div class="nodetype"><?php echo $_smarty_tpl->tpl_vars['node']->value['status'];?>
</div>
                                    </div>
                                    <div class="nodeinfo node-flex">
                                        <div class="nodetraffic node-flex"><i
                                                    class="material-icons node-icon">equalizer</i><span><?php if ($_smarty_tpl->tpl_vars['node']->value['traffic_limit'] > 0) {
echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
/<?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_limit'];?>
GB<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
GB<?php }?></span>
                                        </div>
                                        <div class="nodecheck node-flex">
                                            <i class="material-icons node-icon">network_check</i><span>x<?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_rate'];?>
</span>
                                        </div>
                                        <div class="nodeband node-flex"><i class="material-icons node-icon">flash_on</i><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];
}?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nodestatus">
                                    <div class="<?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == "1") {?>nodeonline<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>nodeunset<?php } else { ?>nodeoffline<?php }?>">
                                        <i class="material-icons"><?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == "1") {?>cloud_queue<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>wifi_off<?php } else { ?>flash_off<?php }?></i>
                                    </div>
                                </div>

                            </div>
                            <div class="node-tip cust-model" tipindex="<?php echo $_smarty_tpl->tpl_vars['node']->index;?>
">
                                <?php if ($_smarty_tpl->tpl_vars['node']->value['class'] > $_smarty_tpl->tpl_vars['user']->value->class) {?>
                                    <p class="card-heading" align="center"><b> <i
                                                    class="icon icon-lg">visibility_off</i>
                                            您当前等级不足以使用该节点，如需升级请<a href="/user/shop">点击这里</a>升级套餐</b></p>
                                <?php } else { ?>

                                    <?php $_smarty_tpl->_assignInScope('relay_rule', null);?>

                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 10) {?>
                                        <?php $_smarty_tpl->_assignInScope('relay_rule', $_smarty_tpl->tpl_vars['tools']->value->pick_out_relay_rule($_smarty_tpl->tpl_vars['node']->value['id'],$_smarty_tpl->tpl_vars['user']->value->port,$_smarty_tpl->tpl_vars['relay_rules']->value));?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['mu_only'] != 1 && ($_smarty_tpl->tpl_vars['node']->value['sort'] != 11 || $_smarty_tpl->tpl_vars['node']->value['sort'] != 12)) {?>
                                        <div class="tiptitle">
                                            <a href="javascript:void(0);"
                                               onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
',0,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)">
                                                <?php echo $_smarty_tpl->tpl_vars['node']->value['name'];
if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?>
                                            </a>
                                            <div class="nodeload">
                                                <div class="label label-brand-accent"> ↑点击节点查看配置信息</div>
                                                <div>
                                                    <span class="node-icon"><i class="icon icon-lg">cloud</i></span>
                                                    <span class="node-load">负载：<code><?php if ($_smarty_tpl->tpl_vars['node']->value['latest_load'] == -1) {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['latest_load'];?>
%<?php }?></code></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['sort'] == 11 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 12) {?>
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayNodeLinkV2', array('node'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                                        <?php $_smarty_tpl->_assignInScope('point_node', $_smarty_tpl->tpl_vars['node']->value);?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 0 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 10 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 13) {?>
                                        <?php $_smarty_tpl->_assignInScope('point_node', $_smarty_tpl->tpl_vars['node']->value);?>
                                    <?php }?>

                                    <?php if (($_smarty_tpl->tpl_vars['node']->value['sort'] == 0 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 10) && $_smarty_tpl->tpl_vars['node']->value['mu_only'] != -1) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes_muport']->value, 'single_muport');
$_smarty_tpl->tpl_vars['single_muport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single_muport']->value) {
$_smarty_tpl->tpl_vars['single_muport']->do_else = false;
?>

                                            <?php if (!($_smarty_tpl->tpl_vars['single_muport']->value['server']->node_class <= $_smarty_tpl->tpl_vars['user']->value->class && ($_smarty_tpl->tpl_vars['single_muport']->value['server']->node_group == 0 || $_smarty_tpl->tpl_vars['single_muport']->value['server']->node_group == $_smarty_tpl->tpl_vars['user']->value->node_group))) {?>
                                                <?php continue 1;?>
                                            <?php }?>

                                            <?php if (!($_smarty_tpl->tpl_vars['single_muport']->value['user']->class >= $_smarty_tpl->tpl_vars['node']->value['class'] && ($_smarty_tpl->tpl_vars['node']->value['group'] == 0 || $_smarty_tpl->tpl_vars['single_muport']->value['user']->node_group == $_smarty_tpl->tpl_vars['node']->value['group']))) {?>
                                                <?php continue 1;?>
                                            <?php }?>

                                            <?php $_smarty_tpl->_assignInScope('relay_rule', null);?>

                                            <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 10 && $_smarty_tpl->tpl_vars['single_muport']->value['user']['is_multi_user'] != 2) {?>
                                                <?php $_smarty_tpl->_assignInScope('relay_rule', $_smarty_tpl->tpl_vars['tools']->value->pick_out_relay_rule($_smarty_tpl->tpl_vars['node']->value['id'],$_smarty_tpl->tpl_vars['single_muport']->value['server']->server,$_smarty_tpl->tpl_vars['relay_rules']->value));?>
                                            <?php }?>
                                            <div class="tiptitle">
                                                <a href="javascript:void(0);"
                                                   onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['server']->server;?>
,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

                                                    <?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?> -
                                                    单端口 Shadowsocks - <?php echo $_smarty_tpl->tpl_vars['single_muport']->value['server']->server;?>
 端口
                                                </a>
                                            </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <div class="tipmiddle">
                                        <div><span class="node-icon"><i
                                                        class="icon icon-lg">chat</i> </span><?php echo $_smarty_tpl->tpl_vars['node']->value['info'];?>
</div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 11 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 12) {?>
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayV2rayNode', array('node'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                                    <?php }?>


                                <?php }?>
                            </div>
                            <?php $_smarty_tpl->_assignInScope('point_node', null);?>
                            <?php if ($_smarty_tpl->tpl_vars['node']->last) {?></div><?php }?>
                        <?php
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>

                    <div class="card node-table">
                        <div class="card-main">
                            <div class="card-inner margin-bottom-no">
                                <div class="tile-wrap">
                                    <?php $_smarty_tpl->_assignInScope('class', -1);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node', true);
$_smarty_tpl->tpl_vars['node']->iteration = 0;
$_smarty_tpl->tpl_vars['node']->index = -1;
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->tpl_vars['node']->iteration++;
$_smarty_tpl->tpl_vars['node']->index++;
$_smarty_tpl->tpl_vars['node']->first = !$_smarty_tpl->tpl_vars['node']->index;
$_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration === $_smarty_tpl->tpl_vars['node']->total;
$__foreach_node_2_saved = $_smarty_tpl->tpl_vars['node'];
?>

                                        <?php if ($_smarty_tpl->tpl_vars['node']->value['class'] != $_smarty_tpl->tpl_vars['class']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('class', $_smarty_tpl->tpl_vars['node']->value['class']);?>
                                            <p class="card-heading"><?php if ($_smarty_tpl->tpl_vars['class']->value == 0) {?>普通<?php } else { ?>VIP <?php echo $_smarty_tpl->tpl_vars['node']->value['class'];?>
 <?php }?>
                                                用户节点</p>
                                        <?php }?>
                                        <div class="tile tile-collapse">
                                            <div data-toggle="tile" data-target="#heading<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
">
                                                <div class="tile-side pull-left" data-ignore="tile">
                                                    <div class="avatar avatar-sm <?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == "1") {?>nodeonline<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>nodeunset<?php } else { ?>nodeoffline<?php }?>">
                                                        <span class="material-icons"><?php if ($_smarty_tpl->tpl_vars['node']->value['online'] == "1") {?>cloud_queue<?php } elseif ($_smarty_tpl->tpl_vars['node']->value['online'] == '0') {?>wifi_off<?php } else { ?>flash_off<?php }?></span>
                                                    </div>
                                                </div>
                                                <div class="tile-inner">
                                                    <div class="text-overflow node-textcolor">
														<span class="enable-flag">
															<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_flag'] == 'true') {?>
                                                                <img src="/images/prefix/<?php echo $_smarty_tpl->tpl_vars['node']->value['flag'];?>
" height="22"
                                                                     width="40"/>
                                                            <?php }?>
                                                            <?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

														</span>
                                                        |
                                                        <span class="node-icon">
                                                            <i class="icon icon-lg">flight_takeoff</i></span>
                                                        <strong><b><span
                                                                        class="node-alive"><?php if ($_smarty_tpl->tpl_vars['node']->value['online_user'] == -1) {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['online_user'];
}?></span></b></strong>
                                                        | <span class="node-icon">
                                                            <i class="icon icon-lg">cloud</i></span>
                                                        <span class="node-load">负载：<?php if ($_smarty_tpl->tpl_vars['node']->value['latest_load'] == -1) {?>N/A<?php } else {
echo $_smarty_tpl->tpl_vars['node']->value['latest_load'];?>
%<?php }?></span>
                                                        | <span class="node-icon">
                                                            <i class="icon icon-lg">import_export</i></span>
                                                        <span class="node-mothed"><?php echo $_smarty_tpl->tpl_vars['node']->value['bandwidth'];?>
</span>
                                                        | <span class="node-icon"><i class="icon icon-lg">equalizer</i></span>
                                                        <?php if ($_smarty_tpl->tpl_vars['node']->value['traffic_limit'] > 0) {?>
                                                            <span class="node-band"><?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
/<?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_limit'];?>
</span>
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_used'];?>
GB
                                                        <?php }?>
                                                        | <span class="node-icon">
                                                            <i class="icon icon-lg">network_check</i></span>
                                                        <span class="node-tr"><?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_rate'];?>
 倍率</span>
                                                        | <span class="node-icon"><i class="icon icon-lg">notifications_none</i></span>
                                                        <span class="node-status"><?php echo $_smarty_tpl->tpl_vars['node']->value['status'];?>
</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="collapsible-region collapse" id="heading<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
">
                                                <div class="tile-sub">
                                                    <br>
                                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['class'] > $_smarty_tpl->tpl_vars['user']->value->class) {?>
                                                        <div class="card">
                                                            <div class="card-main">
                                                                <div class="card-inner">
                                                                    <p class="card-heading" align="center"><b> <i
                                                                                    class="icon icon-lg">visibility_off</i>
                                                                            您当前等级不足以使用该节点，如需升级请<a
                                                                                    href="/user/shop">点击这里</a>升级套餐</b>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } else { ?>

                                                        <?php $_smarty_tpl->_assignInScope('relay_rule', null);?>
                                                        <!-- 用户等级不小于节点等级 -->

                                                        <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 10) {?>
                                                            <?php $_smarty_tpl->_assignInScope('relay_rule', $_smarty_tpl->tpl_vars['tools']->value->pick_out_relay_rule($_smarty_tpl->tpl_vars['node']->value['id'],$_smarty_tpl->tpl_vars['user']->value->port,$_smarty_tpl->tpl_vars['relay_rules']->value));?>
                                                        <?php }?>
                                                        <div class="card nodetip-table">
                                                            <div class="card-main">
                                                                <div class="card-inner">
                                                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['mu_only'] != 1 && ($_smarty_tpl->tpl_vars['node']->value['sort'] != 11 || $_smarty_tpl->tpl_vars['node']->value['sort'] != 12)) {?>
                                                                        <p class="card-heading">
                                                                            <a href="javascript:void(0);"
                                                                               onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
',0,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

                                                                                <?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?></a>
                                                                            <span class="label label-brand-accent">←点击节点查看配置信息</span>
                                                                        </p>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['node']->value['sort'] == 11 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 12) {?>
                                                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayNodeLinkV2', array('node'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                                                                        <?php $_smarty_tpl->_assignInScope('point_node', $_smarty_tpl->tpl_vars['node']->value);?>
                                                                    <?php }?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 0 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 10 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 13) {?>
                                                                        <?php $_smarty_tpl->_assignInScope('point_node', $_smarty_tpl->tpl_vars['node']->value);?>
                                                                    <?php }?>

                                                                    <?php if (($_smarty_tpl->tpl_vars['node']->value['sort'] == 0 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 10) && $_smarty_tpl->tpl_vars['node']->value['mu_only'] != -1) {?>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes_muport']->value, 'single_muport');
$_smarty_tpl->tpl_vars['single_muport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single_muport']->value) {
$_smarty_tpl->tpl_vars['single_muport']->do_else = false;
?>

                                                                            <?php if (!($_smarty_tpl->tpl_vars['single_muport']->value['server']->node_class <= $_smarty_tpl->tpl_vars['user']->value->class && ($_smarty_tpl->tpl_vars['single_muport']->value['server']->node_group == 0 || $_smarty_tpl->tpl_vars['single_muport']->value['server']->node_group == $_smarty_tpl->tpl_vars['user']->value->node_group))) {?>
                                                                                <?php continue 1;?>
                                                                            <?php }?>

                                                                            <?php if (!($_smarty_tpl->tpl_vars['single_muport']->value['user']->class >= $_smarty_tpl->tpl_vars['node']->value['class'] && ($_smarty_tpl->tpl_vars['node']->value['group'] == 0 || $_smarty_tpl->tpl_vars['single_muport']->value['user']->node_group == $_smarty_tpl->tpl_vars['node']->value['group']))) {?>
                                                                                <?php continue 1;?>
                                                                            <?php }?>

                                                                            <?php $_smarty_tpl->_assignInScope('relay_rule', null);?>

                                                                            <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 10 && $_smarty_tpl->tpl_vars['single_muport']->value['user']['is_multi_user'] != 2) {?>
                                                                                <?php $_smarty_tpl->_assignInScope('relay_rule', $_smarty_tpl->tpl_vars['tools']->value->pick_out_relay_rule($_smarty_tpl->tpl_vars['node']->value['id'],$_smarty_tpl->tpl_vars['single_muport']->value['server']->server,$_smarty_tpl->tpl_vars['relay_rules']->value));?>
                                                                            <?php }?>
                                                                            <p class="card-heading">
                                                                                <a href="javascript:void(0);"
                                                                                   onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['server']->server;?>
,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

                                                                                    <?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?>
                                                                                    - 单端口 Shadowsocks -
                                                                                    <?php echo $_smarty_tpl->tpl_vars['single_muport']->value['server']->server;?>

                                                                                    端口</a><span
                                                                                        class="label label-brand-accent">←点击节点查看配置信息</span>
                                                                            </p>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    <?php }?>

                                                                    <div>
                                                                        <i class="icon icon-lg node-icon">chat</i> <?php echo $_smarty_tpl->tpl_vars['node']->value['info'];?>

                                                                    </div>

                                                                    <?php if ($_smarty_tpl->tpl_vars['node']->value['sort'] == 11 || $_smarty_tpl->tpl_vars['node']->value['sort'] == 12) {?>
                                                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'displayV2rayNode', array('node'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                                                                    <?php }?>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    <?php }?>

                                                    <?php if (isset($_smarty_tpl->tpl_vars['point_node']->value)) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['point_node']->value != null) {?>
                                                            <div class="card">
                                                                <div class="card-main">
                                                                    <div class="card-inner" id="info<?php echo $_smarty_tpl->tpl_vars['node']->index;?>
">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php echo '<script'; ?>
>
                                                                $().ready(function () {
                                                                    $('#heading<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
').on("shown.bs.tile", function () {
                                                                        $("#info<?php echo $_smarty_tpl->tpl_vars['node']->index;?>
").load("/user/node/<?php echo $_smarty_tpl->tpl_vars['point_node']->value['id'];?>
/ajax");
                                                                    });
                                                                });
                                                            <?php echo '</script'; ?>
>
                                                        <?php }?>
                                                    <?php }?>

                                                </div>
                                            </div>


                                            <?php $_smarty_tpl->_assignInScope('point_node', null);?>

                                        </div>
                                    <?php
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div aria-hidden="true" class="modal modal-va-middle fade" id="nodeinfo" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                            <iframe class="iframe-seamless" title="Modal with iFrame" id="infoifram"></iframe>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>

    function urlChange(id, is_mu, rule_id) {
        var site = `./node/${
                id
                }?ismu=${
                is_mu
                }&relay_rule=${
                rule_id
                }`;
        if (id == 'guide') {
            var doc = document.getElementById('infoifram').contentWindow.document;
            doc.open();
            doc.write('<img src="../images/node.gif" style="width: 100%;height: 100%; border: none;"/>');
            doc.close();
        } else {
            document.getElementById('infoifram').src = site;
        }
        $("#nodeinfo").modal();
    }

    $(function () {
        new Clipboard('.copy-text');
    });
    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已复制，请进入软件添加。';
    });

    
    ;(function () {
        'use strict'
        //箭头旋转
        let rotateTrigger = document.querySelectorAll('a[href^="#cardgroup"]');
        let arrows = document.querySelectorAll('a[href^="#cardgroup"] i')

        for (let i = 0; i < rotateTrigger.length; i++) {
            rotatrArrow(rotateTrigger[i], arrows[i]);
        }

        //UI切换
        let elNodeCard = $$.querySelector(".node-cardgroup");
        let elNodeTable = $$.querySelector(".node-table");

        let switchToCard = new UIswitch('switch-cards', elNodeTable, elNodeCard, 'grid', 'tempnode');
        switchToCard.listenSwitch();

        let switchToTable = new UIswitch('switch-table', elNodeCard, elNodeTable, 'flex', 'tempnode');
        switchToTable.listenSwitch();

        switchToCard.setDefault();
        switchToTable.setDefault();

        //遮罩
        let buttongroup = document.querySelectorAll('.node-card');
        let modelgroup = document.querySelectorAll('.node-tip');

        for (let i = 0; i < buttongroup.length; i++) {
            custModal(buttongroup[i], modelgroup[i]);
        }

    })();
    

<?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_displayV2rayNode_5717574455e7b598b535d80_57298196 */
if (!function_exists('smarty_template_function_displayV2rayNode_5717574455e7b598b535d80_57298196')) {
function smarty_template_function_displayV2rayNode_5717574455e7b598b535d80_57298196(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('node'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php $_smarty_tpl->_assignInScope('v2server', App\Utils\URL::getV2Url($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['node']->value['raw_node'],1));?>
    <p>地址：<span class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['v2server']->value['add'];?>
</span></p>
    <p>端口：<span class="card-tag tag-volcano"><?php echo $_smarty_tpl->tpl_vars['v2server']->value['port'];?>
</span></p>
    <p>AlterId：<span class="card-tag tag-purple"><?php echo $_smarty_tpl->tpl_vars['v2server']->value['aid'];?>
</span></p>
    <p>用户 UUID：<span class="card-tag tag-geekblue"><?php echo $_smarty_tpl->tpl_vars['user']->value->getUuid();?>
</span></p>
    <p>传输协议：<span class="card-tag tag-green"><?php if ($_smarty_tpl->tpl_vars['v2server']->value['net'] == "tls") {?>tcp<?php } else {
echo $_smarty_tpl->tpl_vars['v2server']->value['net'];
}?></span></p>
    <?php if ($_smarty_tpl->tpl_vars['v2server']->value['net'] == "ws") {?>
        <p>路径：<span class="card-tag tag-green"><?php echo $_smarty_tpl->tpl_vars['v2server']->value['path'];?>
</span></p>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['v2server']->value['net'] == "kcp") {?>
        <p>伪装方式：<span class="card-tag tag-green"><?php echo $_smarty_tpl->tpl_vars['v2server']->value['type'];?>
</span></p>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['v2server']->value['net'] == "ws" && $_smarty_tpl->tpl_vars['v2server']->value['tls'] == "tls") || $_smarty_tpl->tpl_vars['v2server']->value['net'] == "tls") {?>
        <p>TLS：<span class="card-tag tag-green">TLS</span></p>
    <?php }?>
    <p>流量比例：<span class="card-tag tag-red"><?php echo $_smarty_tpl->tpl_vars['node']->value['traffic_rate'];?>
</span></p>
    <p>VMess链接：
        <a class="copy-text" data-clipboard-text="<?php echo App\Utils\URL::getV2Url($_smarty_tpl->tpl_vars['user']->value,$_smarty_tpl->tpl_vars['node']->value['raw_node']);?>
">点击复制</a>
    </p>
<?php
}}
/*/ smarty_template_function_displayV2rayNode_5717574455e7b598b535d80_57298196 */
/* smarty_template_function_displayNodeLinkV2_5717574455e7b598b535d80_57298196 */
if (!function_exists('smarty_template_function_displayNodeLinkV2_5717574455e7b598b535d80_57298196')) {
function smarty_template_function_displayNodeLinkV2_5717574455e7b598b535d80_57298196(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('node'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="tiptitle">
        <a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a>
    </div>
<?php
}}
/*/ smarty_template_function_displayNodeLinkV2_5717574455e7b598b535d80_57298196 */
}
