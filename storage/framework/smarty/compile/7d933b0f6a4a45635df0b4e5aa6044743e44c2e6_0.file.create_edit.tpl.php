<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-21 21:41:27
  from '/www/wwwroot/ts/resources/views/material/admin/order/create_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec68507980fc3_22887087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d933b0f6a4a45635df0b4e5aa6044743e44c2e6' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/admin/order/create_edit.tpl',
      1 => 1590068486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5ec68507980fc3_22887087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">添加合同 #<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['node']->value->size;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="id">清单ID</label>
                                    <input class="form-control maxwidth-edit" id="id" name="id" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">清单名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">备注</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="num">数量</label>
                                    <input class="form-control maxwidth-edit" id="num" name="num" type="text">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">添加
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>


    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>

    $('#main_form').validate({
        rules: {
            num: {required: true}
        },

        submitHandler: () => {


            $.ajax({
                type: "POST",
                url: "/admin/order/create",
                dataType: "json",
                data: {
                    id: <?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
,
                    info: $$getValue('info'),
                    num: $$getValue('num')
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/admin/order'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },

                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${jqXHR.status}`;
                }
            });
        }
    });

<?php echo '</script'; ?>
>

<?php }
}
