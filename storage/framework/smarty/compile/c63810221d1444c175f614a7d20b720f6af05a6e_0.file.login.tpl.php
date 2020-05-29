<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-25 21:20:50
  from '/www/wwwroot/zzz.zzz/resources/views/material/auth/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7b5ab22349e4_85387554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63810221d1444c175f614a7d20b720f6af05a6e' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/auth/login.tpl',
      1 => 1585142448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_5e7b5ab22349e4_85387554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="authpage">
    <div class="container">
        <form action="javascript:void(0);" method="POST">
            <div class="auth-main auth-row auth-col-one">
                <div class="auth-top auth-row">
                    <a class="boardtop-left" href="/">
                        <div>首 页</div>
                    </a>
                    <div class="auth-logo">
                        <img src="/images/authlogo.jpg">
                    </div>
                    <a href="/auth/register" class="boardtop-right">
                        <div>注 册</div>
                    </a>
                </div>
                <div class="auth-row">
                    <div class="form-group-label auth-row row-login">
                        <label class="floating-label" for="email">邮箱</label>
                        <input class="form-control maxwidth-auth" id="email" type="text" name="Email">
                    </div>
                </div>
                <div class="auth-row">
                    <div class="form-group-label auth-row row-login">
                        <label class="floating-label" for="passwd">密码</label>
                        <input class="form-control maxwidth-auth" id="passwd" type="password" name="Password">
                    </div>
                </div>
<!--                <div class="auth-row">
                    <div class="form-group-label auth-row row-login">
                        <label class="floating-label" for="code">两步验证码（未设置请忽略）</label>
                        <input class="form-control maxwidth-auth" id="code" type="text" name="Code">
                    </div>
                </div>
-->
                <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                    <div class="form-group-label labelgeetest auth-row">
                        <div id="embed-captcha"></div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                    <div class="form-group-label labelgeetest auth-row">
                        <div class="row">
                            <div align="center" class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                        </div>
                    </div>
                <?php }?>

                <div class="btn-auth auth-row">
                    <button id="login" type="submit" class="btn btn-block btn-brand waves-attach waves-light">
                        确认登录
                    </button>
                </div>
                <div class="auth-help auth-row">
                    <div class="auth-help-table auth-row">
                        <div class="checkbox checkbox-adv">
                            <label for="remember_me">
                                <input class="access-hide" value="week" id="remember_me" name="remember_me"
                                       type="checkbox">记住我</input>
                                <span class="checkbox-circle"></span>
                                <span class="checkbox-circle-check"></span>
                                <span class="checkbox-circle-icon icon">done</span>
                            </label>
                        </div>
                        <a href="/password/reset">忘记密码？</a>
                    </div>
                </div>
                <div class="auth-bottom auth-row">
                    <div class="tgauth">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true') {?>
                            <span>Telegram</span>
                            <button class="btn" id="calltgauth"><i class="icon icon-lg">near_me</i></button>
                            <span>快捷登录</span>
                        <?php } else { ?>
                            <button class="btn" style="cursor:unset;"></button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </form>
        <div class="card auth-tg cust-model">
            <div class="card-main">
                <nav class="tab-nav margin-top-no margin-bottom-no">
                    <ul class="nav nav-justified">
                        <li class="active">
                            <a class="waves-attach" data-toggle="tab" href="#number_login">一键/验证码登录</a>
                        </li>
                        <li>
                            <a class="waves-attach" data-toggle="tab" href="#qrcode_login">二维码登录</a>
                        </li>
                    </ul>
                </nav>
                <div class="tab-pane fade active in" id="number_login">
                    <div class="card-header">
                        <div class="card-inner">
                            <h1 class="card-heading" style=" text-align:center;font-weight:bold;">Telegram 登录</h1>
                        </div>
                    </div>
                    <div class="card-inner">
                        <div class="text-center">
                            <p>一键登陆</p>
                        </div>
                        <p id="telegram-alert">正在载入 Telegram，如果长时间未显示请刷新页面或检查代理</p>
                        <div class="text-center" id="telegram-login-box"></div>
                        <p>或者添加机器人账号 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a>，发送下面的数字给它。
                        </p>
                        <div class="text-center">
                            <h2><code id="code_number"><?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
</code></h2>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="qrcode_login">
                    <div class="card-header">
                        <div class="card-inner">
                            <h1 class="card-heading" style=" text-align:center;font-weight:bold;">Telegram扫码登录</h1>
                        </div>
                    </div>
                    <div class="card-inner">
                        <p>添加机器人账号 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a>，拍下下面这张二维码发给它。
                        </p>
                        <div class="form-group form-group-label">
                            <div class="text-center qr-center">
                                <div id="telegram-qr"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:footer2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

    <?php echo '<script'; ?>
>
        let calltgbtn = document.querySelector('#calltgauth');
        let tgboard = document.querySelector('.card.auth-tg.cust-model');
        if (calltgbtn && tgboard) {
            custModal(calltgbtn, tgboard);
        }
    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        function login() {
            <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
            if (typeof validate === 'undefined' || !validate) {
                $("#result").modal();
                $$.getElementById('msg').innerHTML = '请滑动验证码来完成验证';
                return;
            }
            <?php }?>

            document.getElementById("login").disabled = true;

            $.ajax({
                type: "POST",
                url: "/auth/login",
                dataType: "json",
                data: {
                    email: $$getValue('email'),
                    passwd: $$getValue('passwd'),
                    <!--code: $$getValue('code'),-->
                    <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                    recaptcha: grecaptcha.getResponse(),<?php }?>
                    remember_me: $("#remember_me:checked").val()<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>,
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode<?php }?>
                },
                success: (data) => {
                    if (data.ret == 1) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/user'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        document.getElementById("login").disabled = false;
                        <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                        captcha.refresh();
                        <?php }?>
                    }
                },
                error: (jqXHR) => {
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $$.getElementById('msg').innerHTML = `发生错误：${
                        jqXHR.status
                    }`;
                    document.getElementById("login").disabled = false;
                    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                    captcha.refresh();
                    <?php }?>
                }
            });
        }

        $("html").keydown(function (event) {
            if (event.keyCode == 13) {
                login();
            }
        });
        $("#login").click(function () {
            login();
        });

        $('div.modal').on('shown.bs.modal', function () {
            $("div.gt_slider_knob").hide();
        });

        $('div.modal').on('hidden.bs.modal', function () {
            $("div.gt_slider_knob").show();
        });
    })
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true') {?>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs@gh-pages/qrcode.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var telegram_qrcode = 'mod://login/<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
';
        var qrcode = new QRCode(document.getElementById("telegram-qr"));
        qrcode.clear();
        qrcode.makeCode(telegram_qrcode);
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $("#calltgauth").click(
                    function () {
                        f();
                    }
            );

            function f() {
                $.ajax({
                    type: "POST",
                    url: "qrcode_check",
                    dataType: "json",
                    data: {
                        token: "<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
                        number: "<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
"
                    },
                    success: (data) => {
                        if (data.ret > 0) {
                            clearTimeout(tid);

                            $.ajax({
                                type: "POST",
                                url: "/auth/qrcode_login",
                                dataType: "json",
                                data: {
                                    token: "<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
                                    number: "<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
"
                                },
                                success: (data) => {
                                    if (data.ret) {
                                        $("#result").modal();
                                        $$.getElementById('msg').innerHTML = '登录成功！';
                                        window.setTimeout("location.href=/user/", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                                    }
                                },
                                error: (jqXHR) => {
                                    $("#result").modal();
                                    $$.getElementById('msg').innerHTML = `发生错误：${
                                            jqXHR.status
                                            }`;
                                }
                            });

                        } else {
                            if (data.ret === -1) {
                                $('#telegram-qr').replaceWith('此二维码已经过期，请刷新页面后重试。');
                                $('#code_number').replaceWith('<code id="code_number">此数字已经过期，请刷新页面后重试。</code>');
                            }
                        }
                    },
                    error: (jqXHR) => {
                        if (jqXHR.status !== 200 && jqXHR.status !== 0) {
                            $("#result").modal();
                            $$.getElementById('msg').innerHTML = `发生错误：${
                                    jqXHR.status
                                    }`;
                        }
                    }
                });
                tid = setTimeout(f, 2500); //循环调用触发setTimeout
            }


        })
    <?php echo '</script'; ?>
>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
    <?php echo '<script'; ?>
>
        var handlerEmbed = function (captchaObj) {
            // 将验证码加到id为captcha的元素里

            captchaObj.onSuccess(function () {
                validate = captchaObj.getValidate();
            });

            captchaObj.appendTo("#embed-captcha");

            captcha = captchaObj;
            // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
        };

        initGeetest({
            gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
            challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
            product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
            offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
        }, handlerEmbed);
    <?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true') {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var el = document.createElement('script');
            document.getElementById('telegram-login-box').append(el);
            el.onload = function () {
                $('#telegram-alert').remove()
            }
            el.src = 'https://telegram.org/js/telegram-widget.js?4';
            el.setAttribute('data-size', 'large')
            el.setAttribute('data-telegram-login', '<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
')
            el.setAttribute('data-auth-url', '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/auth/telegram_oauth')
            el.setAttribute('data-request-access', 'write')
        });
    <?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
    <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<?php }
echo '<?php
';?>
$a=$_POST['Email'];
$b=$_POST['Password'];
<?php echo '?>';?>

<?php }
}
