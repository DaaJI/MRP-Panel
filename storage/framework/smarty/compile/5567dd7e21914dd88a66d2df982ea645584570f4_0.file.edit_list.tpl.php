<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-21 20:00:04
  from '/www/wwwroot/ts/resources/views/material/admin/product/edit_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec66d44dbd8b9_89420121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5567dd7e21914dd88a66d2df982ea645584570f4' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/admin/product/edit_list.tpl',
      1 => 1590062402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:table/checkbox_2.tpl' => 1,
    'file:table/table_2.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_2.tpl' => 1,
    'file:table/js_1_2.tpl' => 1,
    'file:table/js_2_2.tpl' => 1,
    'file:table/js_delete_2.tpl' => 1,
  ),
),false)) {
function content_5ec66d44dbd8b9_89420121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">清单增减物料 #<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>从系统中所有的仓库物料中选择，如果需要添加新的物料，请先到仓库库存页面创建。</p>
                        <div class="card-table">
                            <div class="table-responsive">
                                <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>清单中已有物料。</p>
                            <p>显示表项:
                                <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </p>
                        <div class="card-table">
                            <div class="table-responsive">
                                <?php $_smarty_tpl->_subTemplateRender('file:table/table_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>

                        </div>

                        </div>
                    </div>
                </div>
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <p>从已有清单中导入物料，当前仅支持导入到空的清单。</p>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ref">源清单</label>
                                    <select id="ref" class="form-control maxwidth-edit" name="ref">
                                        <option value="">无</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ref_from']->value, 'ref');
$_smarty_tpl->tpl_vars['ref']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ref']->value) {
$_smarty_tpl->tpl_vars['ref']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ref']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['ref']->value->name;?>
 #<?php echo $_smarty_tpl->tpl_vars['ref']->value->id;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">导入
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand waves-attach waves-circle waves-light"
                           href="/admin/product"><</a>

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
                                <p>请您确认。</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                                            data-dismiss="modal" type="button">取消
                                    </button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal"
                                            id="delete_input" type="button">确定
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

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>

    function delete_modal_show(id) {
        deleteid = id;
        $("#delete_modal").modal();
    }

    window.addEventListener('load', () => {
        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    })

    <?php $_smarty_tpl->_subTemplateRender('file:table/js_1_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    window.addEventListener('load', () => {
        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        function delete_id() {
            $.ajax({
                type: "DELETE",
                url: "/admin/product/inlist",
                dataType: "json",
                data: {
                    id: deleteid
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        <?php $_smarty_tpl->_subTemplateRender('file:table/js_delete_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 发生错误了。`;
                }
            });
        }

        $$.getElementById('delete_input').addEventListener('click', delete_id);

    })


    
    $('#main_form').validate({
        rules: {
            ref: {required: true},
        },
        
        submitHandler: () => {

            $.ajax({
                type: "POST",
                url: "/admin/product/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
/add_from",
                dataType: "json",
                data: {
                    ref: $$getValue('ref'),
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/admin/product/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
/edit_list'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 发生错误了。`;
                }
            });
        }
    });


<?php echo '</script'; ?>
>
<?php }
}
