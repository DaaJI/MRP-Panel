<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 14:16:00
  from '/www/wwwroot/sspanel/resources/views/material/user/code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5f47a08eeb96_72120877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c100d02ad78112b7a930f4d16b3332330a9400a2' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/code.tpl',
      1 => 1583302555,
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
function content_5e5f47a08eeb96_72120877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">充值</h1>


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
                                    <p class="card-heading">注意!</p>
                                    <p>充值请找给你分享本站链接的那位老板，或者提交工单联系管理员，充值完成后需刷新网页以查看余额，通常一分钟内到账。</p>
                                    <p>因余额不足而未能完成的自动续费，在余额足够时会自动划扣续费。</p>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_admin_contact"] == 'true') {?>
                                        <p class="card-heading">如果没有到账请立刻联系管理员：</p>
                                        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact1"] != null) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact1"];?>
</li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact2"] != null) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact2"];?>
</li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact3"] != null) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact3"];?>
</li>
                                        <?php }?>
                                    <?php }?>
                                    <br/>
                                    <p><i class="icon icon-lg">attach_money</i>当前余额：<font color="#399AF2" size="5"><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
</font> 元</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php if ($_smarty_tpl->tpl_vars['pmw']->value != '') {?>
                    <div class="col-lg-12 col-md-12">
                        <div class="card margin-bottom-no">
                            <div class="card-main">
                                <div class="card-inner">
                                    <?php echo $_smarty_tpl->tpl_vars['pmw']->value;?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['bitpay']->value != '') {?>
                    <div class="col-lg-12 col-md-12">
                        <div class="card margin-bottom-no">
                            <div class="card-main">
                                <div class="card-inner">
                                    <?php echo $_smarty_tpl->tpl_vars['bitpay']->value;?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <div class="cardbtn-edit">
                                        <div class="card-heading">充值码</div>
                                        <button class="btn btn-flat" id="code-update">
                                            <span class="icon">favorite_border</span>
                                        </button>
                                    </div>
                                    <div class="form-group form-group-label">
                                        <label class="floating-label" for="code">充值码</label>
                                        <input class="form-control maxwidth-edit" id="code" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <?php echo $_smarty_tpl->tpl_vars['codes']->value->render();?>

                                        <table class="table table-hover">
                                            <tr>
                                                <!--<th>ID</th> -->
                                                <th>代码</th>
                                                <th>类型</th>
                                                <th>操作</th>
                                                <th>使用时间</th>

                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['codes']->value, 'code');
$_smarty_tpl->tpl_vars['code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['code']->value->type != -2) {?>
                                                    <tr>
                                                        <!--	<td>#<?php echo $_smarty_tpl->tpl_vars['code']->value->id;?>
</td>  -->
                                                        <td><?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
</td>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type == -1) {?>
                                                            <td>金额充值</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type == 10001) {?>
                                                            <td>流量充值</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type == 10002) {?>
                                                            <td>用户续期</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type >= 1 && $_smarty_tpl->tpl_vars['code']->value->type <= 10000) {?>
                                                            <td>等级续期 - 等级<?php echo $_smarty_tpl->tpl_vars['code']->value->type;?>
</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type == -1) {?>
                                                            <td>充值 <?php echo $_smarty_tpl->tpl_vars['code']->value->number;?>
 元</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type == 10001) {?>
                                                            <td>充值 <?php echo $_smarty_tpl->tpl_vars['code']->value->number;?>
 GB 流量</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type == 10002) {?>
                                                            <td>延长账户有效期 <?php echo $_smarty_tpl->tpl_vars['code']->value->number;?>
 天</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['code']->value->type >= 1 && $_smarty_tpl->tpl_vars['code']->value->type <= 10000) {?>
                                                            <td>延长等级有效期 <?php echo $_smarty_tpl->tpl_vars['code']->value->number;?>
 天</td>
                                                        <?php }?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['code']->value->usedatetime;?>
</td>
                                                    </tr>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                        <?php echo $_smarty_tpl->tpl_vars['codes']->value->render();?>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" class="modal modal-va-middle fade" id="readytopay" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">正在连接支付网关</h2>
                            </div>
                            <div class="modal-inner">
                                <p id="title">感谢您对我们的支持，请耐心等待</p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </section>
    </div>
</main>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#code-update").click(function () {
            $.ajax({
                type: "POST",
                url: "code",
                dataType: "json",
                data: {
                    code: $$getValue('code')
                },
                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    }
                },
                error: (jqXHR) => {
                    $("#result").modal();

                    $$.getElementById('msg').innerHTML = `发生错误：${jqXHR.status}`;

                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
