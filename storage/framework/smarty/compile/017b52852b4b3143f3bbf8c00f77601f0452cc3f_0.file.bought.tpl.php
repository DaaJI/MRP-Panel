<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 13:00:22
  from '/www/wwwroot/sspanel/resources/views/material/user/bought.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5c92e696cfd5_38654777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017b52852b4b3143f3bbf8c00f77601f0452cc3f' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/bought.tpl',
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
function content_5e5c92e696cfd5_38654777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">购买记录</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中您的购买记录。</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-table">
                                <div class="table-responsive table-user">
                                    <?php echo $_smarty_tpl->tpl_vars['shops']->value->render();?>

                                    <table class="table">
                                        <tr>
                                            <th>ID</th>
                                            <th>购买时间</th>
                                            <th>商品名称</th>
                                            <th>内容</th>
                                            <th>价格</th>
                                            <th>续费时间</th>
                                            <th>续费时重置流量</th>
                                            <th>操作</th>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
                                            <tr>
                                                <td>#<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['shop']->value->datetime("Y/m/d",$_smarty_tpl->tpl_vars['date_unix']->value);?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['shop']->value->shop()->name;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['shop']->value->shop()->content();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
 元</td>

                                                <?php if ($_smarty_tpl->tpl_vars['shop']->value->renew == 0) {?>
                                                    <td>不自动续费</td>
                                                <?php } else { ?>
                                                    <td>在 <?php echo $_smarty_tpl->tpl_vars['shop']->value->renew_date();?>
 续费</td>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['shop']->value->shop()->auto_reset_bandwidth == 0) {?>
                                                    <td>不自动重置</td>
                                                <?php } else { ?>
                                                    <td>自动重置</td>
                                                <?php }?>

                                                <td>
                                                    <a class="btn btn-brand"
                                                       <?php if ($_smarty_tpl->tpl_vars['shop']->value->renew == 0) {?>disabled<?php } else { ?>href="javascript:void(0);" onClick="delete_modal_show('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
')"<?php }?>>关闭自动续费</a>
                                                </td>

                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                    <?php echo $_smarty_tpl->tpl_vars['shops']->value->render();?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要关闭自动续费？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>请您确认。</p>
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
        $("#delete_modal").modal();
        document.getElementById('delete_input').setAttribute('data-id', id);
    }

    $(document).ready(function () {
        function delete_id(id) {
            $.ajax({
                type: "DELETE",
                url: "/user/bought",
                dataType: "json",
                data: {
                    id
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

        $$.getElementById('delete_input').addEventListener('click', () => {
            delete_id($$.getElementById('delete_input').getAttribute('data-id'));
        });
    })

<?php echo '</script'; ?>
>
<?php }
}
