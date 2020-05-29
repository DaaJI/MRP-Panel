<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 23:06:57
  from '/www/wwwroot/ts/resources/views/material/admin/user/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9874919a2222_57069760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd589faf3777b12dceb1b74bf2c2a2d8a1caa3f3' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/admin/user/edit.tpl',
      1 => 1585462421,
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
function content_5e9874919a2222_57069760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">用户编辑 #<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->id;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="email">邮箱</label>
                                <input class="form-control maxwidth-edit" id="email" type="email"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->email;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="remark">备注(仅对管理员可见)</label>
                                <input class="form-control maxwidth-edit" id="remark" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->remark;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="pass">密码(不修改请留空)</label>
                                <input class="form-control maxwidth-edit" id="pass" type="password"
                                       autocomplete="new-password">
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="enable">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->enable == 1) {?>checked<?php }?> class="access-hide" id="enable"
                                               type="checkbox"><span class="switch-toggle"></span>用户启用
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_su">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_su == 1) {?>checked<?php }?> class="access-hide"
                                               id="is_su" type="checkbox"><span class="switch-toggle"></span>是否管理员
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_whadmin">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_whadmin == 1) {?>checked<?php }?> class="access-hide"
                                               id="is_whadmin" type="checkbox"><span class="switch-toggle"></span>是否采购部
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_depo">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_depo == 1) {?>checked<?php }?> class="access-hide"
                                               id="is_depo" type="checkbox"><span class="switch-toggle"></span>是否仓储部
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_tech">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_tech == 1) {?>checked<?php }?> class="access-hide"
                                               id="is_tech" type="checkbox"><span class="switch-toggle"></span>是否技术部
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_sales">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_sales == 1) {?>checked<?php }?> class="access-hide"
                                               id="is_sales" type="checkbox"><span class="switch-toggle"></span>是否销售部
                                    </label>
                                </div>
                            </div>

<!--
                            <div class="form-group form-group-label">
                                <label for="is_multi_user">
                                    <label class="floating-label" for="sort">预留选项</label>
                                    <select id="is_multi_user" class="form-control maxwidth-edit" name="is_multi_user">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_multi_user == 0) {?>selected<?php }?>>0
                                        </option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_multi_user == 1) {?>selected<?php }?>>1
                                        </option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_multi_user == 2) {?>selected<?php }?>>2
                                        </option>
                                    </select>
                                </label>
                            </div>
-->

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
                                                class="btn btn-block btn-brand waves-attach waves-light">修改
                                        </button>
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
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    //document.getElementById("class_expire").value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->class_expire;?>
";

    window.addEventListener('load', () => {
        function submit() {
            if (document.getElementById('is_su').checked) {
                var is_su = 1;
            } else {
                var is_su = 0;
            }

            if (document.getElementById('enable').checked) {
                var enable = 1;
            } else {
                var enable = 0;
            }

            if (document.getElementById('is_whadmin').checked) {
                var is_whadmin = 1;
            } else {
                var is_whadmin = 0;
            }

            if (document.getElementById('is_tech').checked) {
                var is_tech = 1;
            } else {
                var is_tech = 0;
            }

            if (document.getElementById('is_depo').checked) {
                var is_depo = 1;
            } else {
                var is_depo = 0;
            }

            if (document.getElementById('is_sales').checked) {
                var is_sales = 1;
            } else {
                var is_sales = 0;
            }

            $.ajax({
                type: "PUT",
                url: "/admin/user/<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->id;?>
",
                dataType: "json",
                data: {
                    email: $$getValue('email'),
                    pass: $$getValue('pass'),
                    //is_multi_user: $$getValue('is_multi_user'),
                    remark: $$getValue('remark'),

                    enable,
                    is_su,
                    is_whadmin,
                    is_tech,
                    is_depo,
                    is_sales

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
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }

        $("html").keydown(event => {
            if (event.keyCode == 13) login();
        });

        $$.getElementById('submit').addEventListener('click', submit);

    })
<?php echo '</script'; ?>
>
<?php }
}
