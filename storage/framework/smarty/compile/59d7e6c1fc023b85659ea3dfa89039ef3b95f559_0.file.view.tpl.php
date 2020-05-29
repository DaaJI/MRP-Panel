<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 14:25:24
  from '/www/wwwroot/sspanel/resources/views/material/admin/ticket/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5f49d49a8193_66604739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d7e6c1fc023b85659ea3dfa89039ef3b95f559' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/admin/ticket/view.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5e5f49d49a8193_66604739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/editor.md@1.5.0/css/editormd.min.css"/>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">查看工单</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content">内容</label>
                                <div id="editormd">
                                    <textarea style="display:none;" id="content"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="modal modal-va-middle fade" id="changetouser_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要切换为该用户？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>切换为该用户以后，你随时可以通过菜单底部的「返回管理员身份」按钮返回本条工单。</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect" data-dismiss="modal" type="button">取消</button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal" id="changetouser_input" type="button">确定</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        <button id="submit" type="submit" class="btn btn-brand waves-attach waves-light">添加</button>
                                        <button id="close" type="submit" class="btn btn-brand-accent waves-attach waves-light">添加并关闭</button>
                                        <button id="close_directly" type="submit" class="btn btn-brand-accent waves-attach waves-light">直接关闭</button>
                                        <button  id="changetouser" class="btn btn-brand waves-attach waves-light" onClick="changetouser_modal_show()">切换为该用户</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo $_smarty_tpl->tpl_vars['ticketset']->value->render();?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketset']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
                    <div class="card">
                        <aside class="card-side pull-left" style="padding: 16px; text-align: center">
                            <img style="border-radius: 100%; width: 100%" src="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->User()->gravatar;?>
">
                            <br>
                            <?php echo $_smarty_tpl->tpl_vars['ticket']->value->User()->user_name;?>

                        </aside>
                        <div class="card-main">
                            <div class="card-inner">
                                <?php echo $_smarty_tpl->tpl_vars['ticket']->value->content;?>

                            </div>
                            <div class="card-action" style="padding: 12px"> <?php echo $_smarty_tpl->tpl_vars['ticket']->value->datetime();?>
</div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo $_smarty_tpl->tpl_vars['ticketset']->value->render();?>



                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>

    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/editor.md@1.5.0/editormd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function changetouser_modal_show() {
        $("#changetouser_modal").modal();
    }

    window.addEventListener('load', () => {
        function submit() {
            $("#result").modal();
            $$.getElementById('msg').innerHTML = `正在提交。`;
            $.ajax({
                type: "PUT",
                url: "/admin/ticket/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
                dataType: "json",
                data: {
                    content: editor.getHTML(),
                    status
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

        $$.getElementById('submit').addEventListener('click', () => {
            status = 1;
            submit();
        });

        $$.getElementById('close').addEventListener('click', () => {
            status = 0;
            submit();
        });

        $$.getElementById('close_directly').addEventListener('click', () => {
            status = 0;
            $("#result").modal();
            $$.getElementById('msg').innerHTML = `正在提交。`;
            $.ajax({
                type: "PUT",
                url: "/admin/ticket/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
                dataType: "json",
                data: {
                    content: '这条工单已被关闭',
                    status
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
        });

        function changetouser_id() {
            $.ajax({
                type: "POST",
                url: "/admin/user/changetouser",
                dataType: "json",
                data: {
                    userid: <?php echo $_smarty_tpl->tpl_vars['ticket']->value->User()->id;?>
,
                    adminid: <?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
,
                    local: '/admin/ticket/' + <?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
 +'/view'
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/user'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
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

        $$.getElementById('changetouser_input').addEventListener('click', () => {
            changetouser_id();
        });

    });

    (() => {
        editor = editormd("editormd", {
            path: "https://cdn.jsdelivr.net/npm/editor.md@1.5.0/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
            height: 450,
            saveHTMLToTextarea: true,
            emoji: true
        });

        /*
        // or
        var editor = editormd({
            id   : "editormd",
            path : "../lib/"
        });
        */
    })();

<?php echo '</script'; ?>
>
<?php }
}
