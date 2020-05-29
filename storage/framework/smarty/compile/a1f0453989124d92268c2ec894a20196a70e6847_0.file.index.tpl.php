<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 00:11:02
  from '/www/wwwroot/zzz.zzz/resources/views/material/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e821a16beaf65_00217448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f0453989124d92268c2ec894a20196a70e6847' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/user/index.tpl',
      1 => 1585584568,
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
function content_5e821a16beaf65_00217448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('ssr_prefer', App\Utils\URL::SSRCanConnect($_smarty_tpl->tpl_vars['user']->value,0));?>

<style>
.table {
    box-shadow: none;
}
table tr td:first-child {
    text-align: right;
    font-weight: bold;
}
</style>

<main class="content">

    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">个人中心</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">

            </div>
            <div class="ui-card-wrap">

                <div class="col-xx-12 col-sm-6">

                    <div class="card user-info">

                        <div class="user-info-main">

                            <div class="nodemain">
                                <p class="card-heading"><i class="icon icon-md">account_circle</i>您的角色</p>
                                <div class="nodemiddle node-flex">
                                    <div class="nodetype">

<dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->is_su) {?>
                                            管理员
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->is_whadmin) {?>采购部
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->is_depo) {?>+仓储部<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->is_tech) {?>+技术部<?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->is_sales) {?>+销售部<?php }?>

                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->is_depo) {?>仓储部
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->is_tech) {?>+技术部<?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->is_sales) {?>+销售部<?php }?>
                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->is_tech) {?>技术部
                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->is_sales) {?>+销售部<?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->is_sales) {?>
                                                            销售部
                                                        <?php } else { ?>
                                                            用户
                                                        <?php }?>
                                                    <?php }?>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
</dd>
                                		<br>
                                            <p>用户名： <?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</p>
                                            <p>邮箱： <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>
   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

		  <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">最近几次登录IP</p>
                                    <p>请确认都为自己的IP，如有异常请及时修改密码。</p>
                                </div>
                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <table class="table table-fixed">
                                            <tr>

                                                <th>IP</th>
                                                <th>归属地</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userloginip']->value, 'location', false, 'single');
$_smarty_tpl->tpl_vars['location']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single']->value => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->do_else = false;
?>
                                                <tr>

                                                    <td><?php echo $_smarty_tpl->tpl_vars['single']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-xx-12 col-sm-6">
		                      
                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">账号登录密码修改</div>
                                    <button class="btn btn-flat" id="pwd-update"><span class="icon">check</span>&nbsp;
                                    </button>
                                </div>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="oldpwd">当前密码</label>
                                    <input class="form-control maxwidth-edit" id="oldpwd" type="password">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="pwd">新密码</label>
                                    <input class="form-control maxwidth-edit" id="pwd" type="password">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="repwd">确认新密码</label>
                                    <input class="form-control maxwidth-edit" id="repwd" type="password">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-inner">
                                <div class="cardbtn-edit">
                                    <div class="card-heading">联络方式修改</div>
                                    <button class="btn btn-flat" id="wechat-update"><span class="icon">check</span>&nbsp;
                                    </button>
                                </div>
                                <p>当前联络方式：
                                    <code id="ajax-im" data-default="imtype">
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 1) {?>微信<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 2) {?>QQ<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->im_type == 3) {?>手机号码<?php }?>
                                    </code>
                                </p>
                                <p>当前联络方式账号：
                                    <code><?php echo $_smarty_tpl->tpl_vars['user']->value->im_value;?>
</code>
                                </p>
                                <div class="form-group form-group-label control-highlight-custom dropdown">
                                    <label class="floating-label" for="imtype">选择您的联络方式</label>
                                    <button class="form-control maxwidth-edit" id="imtype" data-toggle="dropdown"
                                            value="<?php echo $_smarty_tpl->tpl_vars['user']->value->im_type;?>
"></button>
                                    <ul class="dropdown-menu" aria-labelledby="imtype">
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="1"
                                               data="imtype">微信</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="2"
                                               data="imtype">QQ</a></li>
                                        <li><a href="#" class="dropdown-option" onclick="return false;" val="3"
                                               data="imtype">手机号码</a></li>
                                    </ul>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="wechat">在这输入联络方式账号</label>
                                    <input class="form-control maxwidth-edit" id="wechat" type="text">
                                </div>
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
    </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="/theme/material/js/shake.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    ;(function () {
        'use strict'

        let onekeysubBTN = document.querySelectorAll('[data-onekeyfor]');
        for (let i = 0; i < onekeysubBTN.length; i++) {
            onekeysubBTN[i].addEventListener('click', () => {
                let onekeyId = onekeysubBTN[i].dataset.onekeyfor;
                AddSub(onekeyId);
            });
        }

        function AddSub(id) {
            let url = $$getValue(id),
                tmp = window.btoa(url);

            tmp = tmp.substring(0, tmp.length);
            url = "sub://" + tmp + "#";
            window.location.href = url;
        }
    })();
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>

    (() => {
        const hideFilterItem = (itemType) => {
            for (let i of $$.getElementsByClassName(`filter-item-${itemType}`)) {
                i.style.display = 'none';
            }
        };
        const showFilterItem = (itemType) => {
            for (let i of $$.getElementsByClassName(`filter-item-${itemType}`)) {
                i.style.display = 'block';
            }
        };

        const chooseSS = () => {
            hideFilterItem('ssr');
            showFilterItem('ss');
            showFilterItem('universal');
        };

        const chooseSSR = () => {
            hideFilterItem('ss');
            showFilterItem('ssr');
            showFilterItem('universal');
        };

        const chooseUniversal = () => {
            hideFilterItem('ss');
            hideFilterItem('ssr');
            showFilterItem('universal');
        };

        $$.getElementById('filter-btn-ss').addEventListener('click', chooseSS);
        $$.getElementById('filter-btn-ssr').addEventListener('click', chooseSSR);
        $$.getElementById('filter-btn-universal').addEventListener('click', chooseUniversal);
    })();
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portreset").click(function () {
            $.ajax({
                type: "POST",
                url: "resetport",
                dataType: "json",
                data: {},
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-port').innerHTML = data.msg;
                        $$.getElementById('msg').innerHTML = `设置成功，新端口是 ${
                                data.msg
                                }`;
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
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portspecify").click(function () {
            $.ajax({
                type: "POST",
                url: "specifyport",
                dataType: "json",
                data: {
                    port: $$getValue('port-specify')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-port').innerHTML = $$getValue('port-specify');
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

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#setpac").click(function () {
            $.ajax({
                type: "POST",
                url: "pacset",
                dataType: "json",
                data: {
                    pac: $("#pac").text()
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
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

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/password",
                dataType: "json",
                data: {
                    oldpwd: $$getValue('oldpwd'),
                    pwd: $$getValue('pwd'),
                    repwd: $$getValue('repwd')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
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

<?php echo '<script'; ?>
>
    var ga_qrcode = '<?php echo $_smarty_tpl->tpl_vars['user']->value->getGAurl();?>
',
            qrcode1 = new QRCode(document.getElementById("ga-qr"));

    qrcode1.clear();
    qrcode1.makeCode(ga_qrcode);

    <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true' || $_smarty_tpl->tpl_vars['config']->value['enable_discord'] == 'true') {?>

    var telegram_qrcode = 'mod://bind/<?php echo $_smarty_tpl->tpl_vars['bind_token']->value;?>
';

    if ($$.getElementById("telegram-qr")) {
        let qrcode2 = new QRCode(document.getElementById("telegram-qr"));
        qrcode2.clear();
        qrcode2.makeCode(telegram_qrcode);
    }

    <?php }
echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#wechat-update").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/wechat",
                dataType: "json",
                data: {
                    wechat: $$getValue('wechat'),
                    imtype: $$getValue('imtype')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-im').innerHTML = `${$("#imtype").find("option:selected").text()} ${$$getValue('wechat')}`
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ssr-update").click(function () {
            $.ajax({
                type: "POST",
                url: "ssr",
                dataType: "json",
                data: {
                    protocol: $$getValue('protocol'),
                    obfs: $$getValue('obfs'),
                    obfs_param: $$getValue('obfs-param')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-protocol').innerHTML = $$getValue('protocol');
                        $$.getElementById('ajax-user-obfs').innerHTML = $$getValue('obfs');
                        $$.getElementById('ajax-user-obfs-param').innerHTML = $$getValue('obfs-param');
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#relay-update").click(function () {
            $.ajax({
                type: "POST",
                url: "relay",
                dataType: "json",
                data: {
                    relay_enable: $$getValue('relay_enable'),
                    relay_info: $$getValue('relay_info')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#unblock").click(function () {
            $.ajax({
                type: "POST",
                url: "unblock",
                dataType: "json",
                data: {},
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-block').innerHTML = `IP：${
                                data.msg
                                } 没有被封`;
                        $$.getElementById('msg').innerHTML = `IP：${
                                data.msg
                                } 解封成功过`;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-test").click(function () {
            $.ajax({
                type: "POST",
                url: "gacheck",
                dataType: "json",
                data: {
                    code: $$getValue('code')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-set").click(function () {
            $.ajax({
                type: "POST",
                url: "gaset",
                dataType: "json",
                data: {
                    enable: $$getValue('ga-enable')
                },
                success: (data) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        let newsspwd = Math.random().toString(36).substr(2);
        $("#ss-pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "sspwd",
                dataType: "json",
                data: {
                    sspwd: newsspwd
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-user-passwd').innerHTML = newsspwd;
                        $$.getElementById('msg').innerHTML = '修改成功';
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = '修改失败';
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#mail-update").click(function () {
            $.ajax({
                type: "POST",
                url: "mail",
                dataType: "json",
                data: {
                    mail: $$getValue('mail')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('ajax-mail').innerHTML = ($$getValue('mail') === '1') ? '发送' : '不发送'
                        $$.getElementById('msg').innerHTML = data.msg;
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 出现了一些错误`;
                }
            })
        })
    })
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>

    function DateParse(str_date) {
        var str_date_splited = str_date.split(/[^0-9]/);
        return new Date(str_date_splited[0], str_date_splited[1] - 1, str_date_splited[2], str_date_splited[3], str_date_splited[4], str_date_splited[5]);
    }

    function CountDown() {
        var levelExpire = DateParse("<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
");
        var accountExpire = DateParse("<?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
");
        var nowDate = new Date();
        var a = nowDate.getTime();
        var b = levelExpire - a;
        var c = accountExpire - a;
        var levelExpireDays = Math.floor(b / (24 * 3600 * 1000));
        var accountExpireDays = Math.floor(c / (24 * 3600 * 1000));
        if (levelExpireDays < 0 || levelExpireDays > 315360000000) {
            document.getElementById('days-level-expire').innerHTML = "无限期";
            for (var i = 0; i < document.getElementsByClassName('label-level-expire').length; i += 1) {
                document.getElementsByClassName('label-level-expire')[i].style.display = 'none';
            }
        } else {
            document.getElementById('days-level-expire').innerHTML = levelExpireDays;
        }
        if (accountExpireDays < 0 || accountExpireDays > 315360000000) {
            document.getElementById('days-account-expire').innerHTML = "无限期";
            for (var i = 0; i < document.getElementsByClassName('label-account-expire').length; i += 1) {
                document.getElementsByClassName('label-account-expire')[i].style.display = 'none';
            }
        } else {
            document.getElementById('days-account-expire').innerHTML = accountExpireDays;
        }
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(function () {
        new Clipboard('.copy-text');
    });

    $(".copy-text").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已复制，请您继续接下来的操作';
    });

    $(function () {
        new Clipboard('.reset-link');
    });

    $(".reset-link").click(function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '已重置您的订阅链接，请变更或添加您的订阅链接！';
        window.setTimeout("location.href='/user/url_reset'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
    });

    <?php if ($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d) == 0) {?>
    window.onload = function () {
        $("#result").modal();
        $$.getElementById('msg').innerHTML = '您的流量已经用完或账户已经过期了，如需继续使用，请进入商店选购新的套餐~';
    };
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value == null) {?>

    var checkedmsgGE = '<p><a class="btn btn-brand disabled btn-flat waves-attach" href="#"><span class="icon">check</span>&nbsp;已签到</a></p>';
    window.onload = function () {
        var myShakeEvent = new Shake({
            threshold: 15
        });

        myShakeEvent.start();
        CountDown();

        window.addEventListener('shake', shakeEventDidOccur, false);

        function shakeEventDidOccur() {
            if ("vibrate" in navigator) {
                navigator.vibrate(500);
            }

            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                data: {
                    recaptcha: grecaptcha.getResponse()
                },<?php }?>
                success: (data) => {
                    if (data.ret) {

                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.traffic;
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
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
    };


    $(document).ready(function () {
        $("#checkin").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",<?php if ($_smarty_tpl->tpl_vars['recaptcha_sitekey']->value != null) {?>
                data: {
                    recaptcha: grecaptcha.getResponse()
                },<?php }?>
                success: (data) => {
                    if (data.ret) {
                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.traffic;
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
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
            })
        })
    })


    <?php } else { ?>


    window.onload = function () {
        var myShakeEvent = new Shake({
            threshold: 15
        });

        myShakeEvent.start();

        window.addEventListener('shake', shakeEventDidOccur, false);

        function shakeEventDidOccur() {
            if ("vibrate" in navigator) {
                navigator.vibrate(500);
            }

            c.show();
        }
    };


    var handlerPopup = function (captchaObj) {
        c = captchaObj;
        captchaObj.onSuccess(function () {
            var validate = captchaObj.getValidate();
            $.ajax({
                url: "/user/checkin", // 进行二次验证
                type: "post",
                dataType: "json",
                data: {
                    // 二次验证所需的三个值
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
                },
                success: (data) => {
                    if (data.ret) {
                        $$.getElementById('checkin-msg').innerHTML = data.msg;
                        $$.getElementById('checkin-btn').innerHTML = checkedmsgGE;
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        $$.getElementById('remain').innerHTML = data.traffic;
                        $('.bar.remain.color').css('width', (data.unflowtraffic - (<?php echo $_smarty_tpl->tpl_vars['user']->value->u;?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->d;?>
)) / data.unflowtraffic * 100 + '%');
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
        });
        // 弹出式需要绑定触发验证码弹出按钮
        //captchaObj.bindOn("#checkin")
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#popup-captcha");
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };

    initGeetest({
        gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
        challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
        product: "popup", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
        offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
    }, handlerPopup);



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
