<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 14:19:55
  from '/www/wwwroot/sspanel/resources/views/material/user/relay/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b820b0535e6_98355779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d9ccb7b12531dadea595ed19e6c7ad1632652c' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/relay/index.tpl',
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
function content_5e4b820b0535e6_98355779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">中转规则</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>中转规则一般由中国中转至其他国外节点</p>
                            <p>请设置端口号为您自己的端口</p>
                            <p>优先级越大，代表其在多个符合条件的规则并存时会被优先采用，当优先级一致时，先添加的规则会被采用。</p>
                            <p>节点不设置中转时，这个节点就可以当作一个普通的节点来做代理使用。</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-main">
                        <div class="card-relayinner">
                            <?php if ($_smarty_tpl->tpl_vars['is_relay_able']->value) {?>
                            <nav class="tab-nav">
                                <ul class="nav nav-justified">
                                    <li class="active">
                                        <a class="" data-toggle="tab" href="#rule_table">规则表</a>
                                    </li>
                                    <li>
                                        <a class="" data-toggle="tab" href="#link_table">链路表</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="rule_table">
                                <div class="table-responsive table-user">
                                    <?php echo $_smarty_tpl->tpl_vars['rules']->value->render();?>

                                    <table class="table table-user">
                                        <tr>
                                            <!--	<th>ID</th>   -->
                                            <th>起源节点</th>
                                            <th>目标节点</th>
                                            <th>端口</th>
                                            <th>优先级</th>
                                            <th>操作</th>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                            <tr>
                                                <!--<td>#<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
</td>-->
                                                <?php if ($_smarty_tpl->tpl_vars['rule']->value->source_node_id == 0) {?>
                                                    <td>所有节点</td>
                                                <?php } else { ?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['rule']->value->Source_Node()->name;?>
</td>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['rule']->value->Dist_Node() == null) {?>
                                                    <td>不进行中转</td>
                                                <?php } else { ?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['rule']->value->Dist_Node()->name;?>
</td>
                                                <?php }?>

                                                <td><?php if ($_smarty_tpl->tpl_vars['rule']->value->port == 0) {?>所有端口<?php } else {
echo $_smarty_tpl->tpl_vars['rule']->value->port;
}?></td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['rule']->value->priority;?>
</td>
                                                <td>
                                                    <a class="btn btn-brand"
                                                       <?php if ($_smarty_tpl->tpl_vars['rule']->value->user_id == 0) {?>disabled<?php } else { ?>href="/user/relay/<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
/edit"<?php }?>>编辑</a>
                                                    <a class="btn btn-brand-accent" id="delete" value="<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
"
                                                       <?php if ($_smarty_tpl->tpl_vars['rule']->value->user_id == 0) {?>disabled<?php } else { ?>href="javascript:void(0);"
                                                       onClick="delete_modal_show('<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
')"<?php }?>>删除</a>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                    <?php echo $_smarty_tpl->tpl_vars['rules']->value->render();?>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="link_table">
                                <div class="table-responsive table-user">
                                    <table class="table">
                                        <tr>
                                            <th>端口</th>
                                            <th>始发节点</th>
                                            <th>终点节点</th>
                                            <th>途径节点</th>
                                            <th>状态</th>
                                        </tr>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathset']->value, 'path');
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['path']->value->port;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['path']->value->begin_node->name;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['path']->value->end_node->name;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['path']->value->path;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['path']->value->status;?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <?php }?>

                    </div>
                </div>

                <div class="fbtn-container">
                    <div class="fbtn-inner"><a class="fbtn fbtn-lg fbtn-brand-accent" href="/user/relay/create">+</a>
                    </div>
                </div>

                <div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要删除？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>请您确认</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                                            data-dismiss="modal" type="button">
                                        取消
                                    </button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal"
                                            id="delete_input" type="button">
                                        确定
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        </div>


    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    function delete_modal_show(id) {
        deleteid = id;
        $("#delete_modal").modal();
    }


    $(document).ready(() => {

        <?php if (!$_smarty_tpl->tpl_vars['is_relay_able']->value) {?>
        $("#result").modal();
        $$.getElementById('msg').innerHTML = `为了中转的稳定，您需要在<a href='/user/edit'>资料编辑</a>处设置协议为以下协议之一： <br><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relay_able_protocol_list']->value, 'single_text');
$_smarty_tpl->tpl_vars['single_text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single_text']->value) {
$_smarty_tpl->tpl_vars['single_text']->do_else = false;
echo $_smarty_tpl->tpl_vars['single_text']->value;?>
<br><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>后方可设置中转规则！`
        <?php }?>

        function delete_id() {
            $.ajax({
                type: "DELETE",
                url: "/user/relay",
                dataType: "json",
                data: {
                    id: deleteid
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
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
                            } 发生错误了`;
                }
            });
        }

        $("#delete_input").click(() => {
            delete_id();
        });
    })

<?php echo '</script'; ?>
>
<?php }
}
