<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-13 14:00:48
  from '/www/wwwroot/ts/resources/views/material/admin/product/create_to_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebb8d10c8fe15_23514272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4834febd4fb0f7e3583e2ce9b405989fbabc10b7' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/admin/product/create_to_list.tpl',
      1 => 1585396100,
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
function content_5ebb8d10c8fe15_23514272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">添加物料 #<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['node']->value->size;?>
 到清单 #<?php echo $_smarty_tpl->tpl_vars['order']->value->name;?>
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
                                    <label class="floating-label" for="m_id">物料编号</label>
                                    <input class="form-control maxwidth-edit" id="m_id" name="m_id" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->m_id;?>
" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">物料名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="size">规格</label>
                                    <input class="form-control maxwidth-edit" id="size" name="size" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->size;?>
" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">备注</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="stock">数量</label>
                                    <input class="form-control maxwidth-edit" id="stock" name="stock" type="text">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="q_unit">单位</label>
                                    <input class="form-control maxwidth-edit" id="q_unit" name="q_unit" type="text"
                                           value="<?php echo $_smarty_tpl->tpl_vars['node']->value->q_unit;?>
" readonly>
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
            name: {required: true},
            stock: {required: true},
        },

        submitHandler: () => {
            

            $.ajax({
                type: "POST",
                url: "/admin/product/to_list",
                dataType: "json",
                data: {
                    id: <?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
,
                    oid: <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
,
                    stock: $$getValue('stock'),
                    info: $$getValue('info')
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
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
    });

<?php echo '</script'; ?>
>
<?php }
}
