<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-10 14:24:35
  from '/www/wwwroot/ts/resources/views/material/password/reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb79e23d76036_39913707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2657a9bfd808bee270fb1035167672c35bfc1473' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/password/reset.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:email_nrcy.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5eb79e23d76036_39913707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- 新的 -->
<div class="authpage">
    <div class="container">

        <div class="auth-main auth-row auth-col-one">
            <div class="auth-top auth-row">
                <a class="boardtop-left" href="/">
                    <div>首 页</div>
                </a>
                <div class="auth-logo">
                    <img src="/images/authlogo.jpg">
                </div>
                <a href="/auth/login" class="boardtop-right">
                    <div>登 录</div>
                </a>
            </div>
            <div class="auth-row">
                <div class="form-group-label auth-row row-login">
                    <label class="floating-label" for="email">邮箱</label>
                    <input class="form-control maxwidth-auth" id="email" type="text">
                </div>
            </div>

            <div class="btn-auth auth-row">
                <button id="reset" type="submit" class="btn btn-block btn-brand waves-attach waves-light">重置密码</button>
            </div>
            <div class="auth-help auth-row">
                <div class="auth-help-table auth-row auth-reset">
                    <a href="" onclick="return false;" data-toggle='modal'
                       data-target='#email_nrcy_modal'>收不到验证码？点击这里</a>
                </div>
            </div>
            <div class="auth-bottom auth-row auth-reset">
                <div class="tgauth">
                    <p>请妥善保管好自己的登录密码</p>
                </div>
            </div>
        </div>

        <div class="card auth-tg">
            <div class="card-main"></div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div aria-hidden="true" class="modal modal-va-middle fade" id="email_nrcy_modal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-heading">
                <h2 class="modal-title">收不到验证码？</h2>
            </div>
            <div class="modal-inner">
                <?php $_smarty_tpl->_subTemplateRender('file:email_nrcy.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="modal-footer">
                <p class="text-right">
                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect" data-dismiss="modal"
                            type="button">
                        我知道了
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        function reset() {
            $("#result").modal();
            $$.getElementById('msg').innerHTML = '发送中，请等待'
            $.ajax({
                type: "POST",
                url: "/password/reset",
                dataType: "json",
                data: {
                    email: $$getValue('email'),
                },
                success: (data) => {
                    if (data.ret == 1) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/auth/login'", 2000);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                }
            });
        }

        $("html").keydown(function (event) {
            if (event.keyCode === 13) {
                reset();
            }
        });
        $("#reset").click(function () {
            reset();
        });
    })
<?php echo '</script'; ?>
><?php }
}
