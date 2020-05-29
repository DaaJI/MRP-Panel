<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-24 18:35:34
  from '/www/wwwroot/xykt_1.0/resources/views/material/auth/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eca4df6a82704_45209223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4826de101c1b3cc583a05b9352ac6b991dcf05e' => 
    array (
      0 => '/www/wwwroot/xykt_1.0/resources/views/material/auth/register.tpl',
      1 => 1585142475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:reg_tos.tpl' => 1,
    'file:email_nrcy.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer2.tpl' => 1,
  ),
),false)) {
function content_5eca4df6a82704_45209223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="authpage auth-reg">
    <div class="container">
        <section class="content-inner">
            <div class="auth-main auth-row">
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
                <?php if ($_smarty_tpl->tpl_vars['config']->value['register_mode'] != 'close') {?>
                    <div class="rowtocol">
                        <div class="auth-row">
                            <div class="form-group-label auth-row">
                                <label class="floating-label" for="name">姓名</label>
                                <input class="form-control maxwidth-auth" id="name" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="rowtocol">
                        <div class="auth-row">
                            <div class="form-group-label auth-row">
                                <label class="floating-label" for="email">邮箱(唯一凭证请认真对待)</label>
                                <input class="form-control maxwidth-auth" id="email" type="text" maxlength="32">
                            </div>
                        </div>
                    </div>
                    <div class="rowtocol">
                        <div class="auth-row">
                            <div class="form-group-label auth-row">
                                <label class="floating-label" for="passwd">密码</label>
                                <input class="form-control maxwidth-auth" id="passwd" type="password">
                                <p id="passwd-strong" style="text-align: left; margin: 3px; font-size: 80%"></p>
                            </div>
                        </div>
                    </div>
                    <div class="rowtocol">
                        <div class="auth-row">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="repasswd">重复密码</label>
                                <input class="form-control maxwidth-auth" id="repasswd" type="password">
                            </div>
                        </div>
                    </div>
                    <div class="rowtocol">
                        <div class="auth-row">
                            <div class="form-group form-group-label dropdown">
                                <label class="floating-label" for="imtype">怎样才能联系到您</label>
                                <button class="form-control maxwidth-auth" id="imtype" data-toggle="dropdown">

                                </button>
                                <ul class="dropdown-menu" aria-labelledby="imtype">
                                    <li><a href="#" class="dropdown-option" onclick="return false;" val="1"
                                           data="imtype">微信</a></li>
                                    <li><a href="#" class="dropdown-option" onclick="return false;" val="2"
                                           data="imtype">QQ</a></li>
                                    <li><a href="#" class="dropdown-option" onclick="return false;" val="3"
                                           data="imtype">手机号码</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rowtocol">
                        <div class="auth-row">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="wechat">在这输入联络方式号码</label>
                                <input class="form-control maxwidth-auth" id="wechat" type="text">
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['register_mode'] == 'invite') {?>
                        <div class="rowtocol">
                            <div class="auth-row">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="code">邀请码(必填)</label>
                                    <input class="form-control maxwidth-auth" id="code" type="text">
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['enable_email_verify']->value == 'true') {?>
                        <div class="rowtocol">
                            <div class="rowtocol">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="email_code">邮箱验证码</label>
                                    <input class="form-control maxwidth-auth" id="email_code" type="text"
                                           onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;">
                                </div>
                            </div>
                            <div class="rowtocol">
                                <div class="form-group form-group-label">
                                    <button id="email_verify"
                                            class="btn-reg btn btn-block btn-brand-accent waves-attach waves-light">
                                        获取验证码
                                    </button>
                                    <a href="" onclick="return false;" data-toggle='modal'
                                       data-target='#email_nrcy_modal'
                                       class="auth-help-reg">收不到验证码？</a>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                        <div class="rowtocol">
                            <div class="form-group form-group-label">
                                <div id="embed-captcha"></div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                        <div class="form-group form-group-label">
                            <div class="row">
                                <div align="center" class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_sitekey']->value;?>
"></div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="rowtocol">
                        <div class="btn-auth auth-row">
                            <button id="tos" type="submit"
                                    class="btn-reg btn btn-block btn-brand waves-attach waves-light">确认注册
                            </button>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="form-group">
                        <p><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 已停止新用户注册，请联系网站管理员</p>
                    </div>
                <?php }?>
                <div class="auth-bottom auth-row auth-reg">
                    <div class="tgauth">

                        <p>注册即代表同意<a href="/tos">服务条款</a>，以及保证所录入信息的真实性，如有不实信息会导致账号被删除。</p>

                        <!-- <span>Telegram</span><button class="btn" id="calltgauth"><i class="icon icon-lg">near_me</i></button><span>快捷登录</span> -->
                    </div>
                </div>
            </div>
        </section>
        <div class="card auth-tg">
            <div class="card-main">

            </div>
        </div>
    </div>
</div>

<div aria-hidden="true" class="modal modal-va-middle fade" id="tos_modal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-heading">
                <h2 class="modal-title">注册须知</h2>
            </div>
            <div class="modal-inner">
                <?php $_smarty_tpl->_subTemplateRender('file:reg_tos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="modal-footer">
                <p class="text-right">
                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                            data-dismiss="modal" type="button" id="cancel">我不同意
                    </button>
                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect" data-dismiss="modal"
                            id="reg"
                            type="button">我同意
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

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
                            type="button">我知道了
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="tiphidden"></div>

<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:footer2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
const checkStrong = (sValue) => {
    let modes = 0;
    if (sValue.length < 7) return modes;
    if (/\d/.test(sValue)) modes++;
    if (/[a-z]/.test(sValue)) modes++;
    if (/[A-Z]/.test(sValue)) modes++;
    if (/\W/.test(sValue)) modes++;

    switch (modes) {
        case 1:
            return 1;
            break;
        case 2:
            return 2;
        case 3:
        case 4:
            return sValue.length < 12 ? 3 : 4
            break;
    }
}

const showStrong = () => {
    const password = document.getElementById('passwd').value;
    const $passwordStrongEl = document.getElementById('passwd-strong');
    const strong = checkStrong(password);
    if (strong = 0) {
        $passwordStrongEl.innerHTML = '需大于 8 位；推荐使用包含大小写字母、数字、符号的密码';
    } else if (strong = 1) {
        $passwordStrongEl.innerHTML = '你的密码强度为： <span style="color: red; font-weight: bold">非常弱</span>';
    } else if (strong = 2) {
        $passwordStrongEl.innerHTML = '你的密码强度为： <span style="color: red; font-weight: bold">弱</span>';
    } else if (strong = 3) {
        $passwordStrongEl.innerHTML = '你的密码强度为： <span style="color: yellow; font-weight: bold">中等</span>';
    } else if (strong = 4) {
        $passwordStrongEl.innerHTML = '你的密码强度为： <span style="color: green; font-weight: bold">强</span>';
    }
}

document.getElementById('passwd').addEventListener('input', checkStrong);
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['config']->value['register_mode'] != 'close') {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            function register() {
                <?php if ($_smarty_tpl->tpl_vars['config']->value['register_mode'] == 'invite') {?>
                code = $$getValue('code');
                <?php } else { ?>
                code = 0;
                if ((getCookie('code')) != '') {
                    code = getCookie('code');
                }
                <?php }?>
                document.getElementById("tos").disabled = true;

                $.ajax({
                    type: "POST",
                    url: "/auth/register",
                    dataType: "json",
                    data: {
                        email: $$getValue('email'),
                        name: $$getValue('name'),
                        passwd: $$getValue('passwd'),
                        repasswd: $$getValue('repasswd'),
                        wechat: $$getValue('wechat'),

                        <?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                        recaptcha: grecaptcha.getResponse(),
                        <?php }?>

                        imtype: $$getValue('imtype'),
                        code<?php if ($_smarty_tpl->tpl_vars['enable_email_verify']->value == 'true') {?>,
                        emailcode: $$getValue('email_code')<?php }
if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>,
                        geetest_challenge: validate.geetest_challenge,
                        geetest_validate: validate.geetest_validate,
                        geetest_seccode: validate.geetest_seccode
                        <?php }?>
                    },
                    success: (data) => {
                        if (data.ret == 1) {
                            $("#result").modal();
                            $$.getElementById('msg').innerHTML = data.msg;
                            window.setTimeout("location.href='/auth/login'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                        } else {
                            $("#result").modal();
                            $$.getElementById('msg').innerHTML = data.msg;
                            setCookie('code', '', 0);
                            $("#code").val(getCookie('code'));
                            document.getElementById("tos").disabled = false;
                            <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                            captcha.refresh();
                            <?php }?>
                        }
                    },
                    error: (jqXHR) => {
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $$.getElementById('msg-error-p').innerHTML = `发生错误：${
                                jqXHR.status
                                }`;
                        document.getElementById("tos").disabled = false;
                        <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                        captcha.refresh();
                        <?php }?>
                    }
                });
            }

            $("html").keydown(function (event) {
                if (event.keyCode == 13) {
                    $("#tos_modal").modal();
                }
            });

            <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
            $('div.modal').on('shown.bs.modal', function () {
                $("div.gt_slider_knob").hide();
            });


            $('div.modal').on('hidden.bs.modal', function () {
                $("div.gt_slider_knob").show();
            });


            <?php }?>

            $("#reg").click(function () {
                register();
            });

            $("#tos").click(function () {
                <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
                if (typeof validate === 'undefined' || !validate) {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = '请滑动验证码来完成验证'
                    return;
                }

                <?php }?>
                $("#tos_modal").modal();
            });
        })
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['enable_email_verify']->value == 'true') {?>
    <?php echo '<script'; ?>
>
        var wait = 60;

        function time(o) {
            if (wait == 0) {
                o.removeAttr("disabled");
                o.text("获取验证码");
                wait = 60;
            } else {
                o.attr("disabled", "disabled");
                o.text("重新发送(" + wait + ")");
                wait--;
                setTimeout(function () {
                            time(o)
                        },
                        1000)
            }
        }


        $(document).ready(function () {
            $("#email_verify").click(function () {
                time($("#email_verify"));

                $.ajax({
                    type: "POST",
                    url: "send",
                    dataType: "json",
                    data: {
                        email: $$getValue('email')
                    },
                    success: (data) => {
                        if (data.ret) {
                            $("#result").modal();
                            $$.getElementById('msg').innerHTML = data.msg;

                        } else {
                            $("#result").modal();
                            $$.getElementById('msg').innerHTML = data.msg;
                        }
                    },
                    error: (jqXHR) => {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = `${
                                data.msg
                                } 出现了一些错误`;
                    }
                })
            })
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
<?php }?>

<?php echo '<script'; ?>
>
        function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return "";
    }

        function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

        function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }

        if (getQueryVariable('code') != '') {
        setCookie('code', getQueryVariable('code'), 30);
        window.location.href = '/auth/register';
    }

    <?php if ($_smarty_tpl->tpl_vars['config']->value['register_mode'] == 'invite') {?>
        if ((getCookie('code')) != '') {
        $("#code").val(getCookie('code'));
    }
    <?php }?>


<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
    <?php echo '<script'; ?>
 src="https://recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
<?php }
}
}
