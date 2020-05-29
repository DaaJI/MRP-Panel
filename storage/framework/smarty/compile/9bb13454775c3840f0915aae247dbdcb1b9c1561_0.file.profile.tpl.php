<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 23:09:21
  from '/www/wwwroot/sspanel/resources/views/material/user/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e61162192fbf2_68591922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb13454775c3840f0915aae247dbdcb1b9c1561' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/profile.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5e61162192fbf2_68591922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">我的账户</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_kill'] == "true") {?>
                                        <div class="cardbtn-edit">
                                            <div class="card-heading">我的帐号</div>
                                            <div class="account-flex">
                                                <span>注销账号</span>
                                                <a class="btn btn-flat" href="kill">
                                                    <span class="icon">not_interested</span>&nbsp;
                                                </a>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <dl class="dl-horizontal">
                                        <dt>用户名</dt>
                                        <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</dd>
                                        <dt>邮箱</dt>
                                        <dd><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">最近五分钟使用IP</p>
                                    <p>请确认都为自己的IP，如有异常请及时修改连接密码。</p>
                                </div>
                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <table class="table table-fixed">
                                            <tr>

                                                <th>IP</th>
                                                <th>归属地</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userip']->value, 'location', false, 'single');
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

                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">最近十次登录IP</p>
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
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">返利记录</p>
                                </div>

                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <?php echo $_smarty_tpl->tpl_vars['paybacks']->value->render();?>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>###</th>
                                                <th>返利用户</th>
                                                <th>返利金额</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paybacks']->value, 'payback');
$_smarty_tpl->tpl_vars['payback']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payback']->value) {
$_smarty_tpl->tpl_vars['payback']->do_else = false;
?>
                                                <tr>
                                                    <td><b><?php echo $_smarty_tpl->tpl_vars['payback']->value->id;?>
</b></td>
                                                    <?php if ($_smarty_tpl->tpl_vars['payback']->value->user() != null) {?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['payback']->value->user()->user_name;?>

                                                        </td>
                                                    <?php } else { ?>
                                                        <td>已注销
                                                        </td>
                                                    <?php }?>
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['payback']->value->ref_get;?>
 元</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                        <?php echo $_smarty_tpl->tpl_vars['paybacks']->value->render();?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
