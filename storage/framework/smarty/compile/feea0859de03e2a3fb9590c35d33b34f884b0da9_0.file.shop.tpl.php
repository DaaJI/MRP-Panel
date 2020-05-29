<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 12:24:39
  from '/www/wwwroot/sspanel/resources/views/material/user/shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b6707522297_19553342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feea0859de03e2a3fb9590c35d33b34f884b0da9' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/shop.tpl',
      1 => 1567409435,
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
function content_5e4b6707522297_19553342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">商品列表</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>商品不可叠加，新购商品会覆盖旧商品的效果。</p>
                            <p>购买新套餐时，如果未关闭旧套餐自动续费，则旧套餐的自动续费依然生效。</p>
                            <p><i class="icon icon-lg">attach_money</i>当前余额：<font color="#399AF2" size="5"><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
</font> 元</p>
                        </div>
                    </div>
                </div>

                <div class="ui-switch">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner ui-switch">
                                <div class="switch-btn" id="switch-cards">
                                    <a href="#" onclick="return false">
                                        <i class="mdui-icon material-icons">apps</i>
                                    </a>
                                </div>
                                <div class="switch-btn" id="switch-table">
                                    <a href="#" onclick="return false">
                                        <i class="mdui-icon material-icons">dehaze</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop-flex">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
                        <div class="card">
                            <div class="card-main">
                                <div class="shop-name"><?php echo $_smarty_tpl->tpl_vars['shop']->value->name;?>
</div>
                                <div class="shop-price"><?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
</div>
                                <div class="shop-tat">
                                    <span><?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
</span> / <span><?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
</span>
                                </div>
                                <div class="shop-cube">
                                    <div>
                                        <div class="cube-detail">
                                            <span>Lv.</span><?php echo $_smarty_tpl->tpl_vars['shop']->value->user_class();?>

                                        </div>
                                        <div class="cube-title">
                                            VIP
                                        </div>
                                    </div>
                                    <div>
                                        <div class="cube-detail">
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->connector();
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '0') {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->connector();?>

                                                <span> 个</span>
                                            <?php }?>
                                        </div>
                                        <div class="cube-title">
                                            客户端数量
                                        </div>
                                    </div>
                                    <div>
                                        <div class="cube-detail">
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == '0') {?>无限制<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();?>

                                                <span> Mbps</span>
                                            <?php }?>
                                        </div>
                                        <div class="cube-title">
                                            端口速率
                                        </div>
                                    </div>

                                </div>
                                <div class="shop-content">
                                    <div class="shop-content-left">账号有效期:</div>
                                    <div class="shop-content-right"><?php echo $_smarty_tpl->tpl_vars['shop']->value->expire();?>
<span>天</span></div>
                                    <div class="shop-content-left">重置周期:</div>
                                    <div class="shop-content-right"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->reset();
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == '0') {?>N / A<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->reset_exp();?>

                                            <span>天</span>
                                        <?php }?></div>
                                    <div class="shop-content-left">重置频率:</div>
                                    <div class="shop-content-right"><?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->reset();
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == '0') {?>N / A<?php } else {
echo $_smarty_tpl->tpl_vars['shop']->value->reset_value();?>

                                            <span>G</span>
                                            / <?php echo $_smarty_tpl->tpl_vars['shop']->value->reset();?>

                                            <span>天</span>
                                        <?php }?></div>
                                </div>
                                <div class="shop-content-extra">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value->content_extra(), 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                        <div><span class="icon"><?php echo $_smarty_tpl->tpl_vars['service']->value[0];?>
</span> <?php echo $_smarty_tpl->tpl_vars['service']->value[1];?>
</div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <a class="btn btn-brand-accent shop-btn" href="javascript:void(0);"
                                   onClick="buy('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
)">购买</a>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div class="flex-fix3"></div>
                    <div class="flex-fix4"></div>
                </div>

                <div class="shop-table">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
                        <div class="shop-gridarea">
                            <div class="card">
                                <div>
                                    <div class="shop-name"><span><?php echo $_smarty_tpl->tpl_vars['shop']->value->name;?>
</span></div>
                                    <div class="card-tag tag-gold">VIP <?php echo $_smarty_tpl->tpl_vars['shop']->value->user_class();?>
</div>
                                    <div class="card-tag tag-orange">¥ <?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
</div>
                                    <div class="card-tag tag-cyan"><?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
 G</div>
                                    <div class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
 天</div>
                                </div>
                                <div>
                                    <i class="material-icons">expand_more</i>
                                </div>
                            </div>
                            <a class="btn btn-brand-accent shop-btn" href="javascript:void(0);"
                               onClick="buy('<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
)">购买</a>

                            <div class="shop-drop dropdown-area">
                                <div class="card-tag tag-black">账号有效期</div>
                                <div class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value->expire();?>
 天</div>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->reset();
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == '0') {?>
                                    <div class="card-tag tag-black">重置周期</div>
                                    <div class="card-tag tag-blue">N/A</div>
                                <?php } else { ?>
                                    <div class="card-tag tag-black">重置周期</div>
                                    <div class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value->reset_exp();?>
 天</div>
                                    <div class="card-tag tag-black">重置频率</div>
                                    <div class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value->reset_value();?>
G/<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset();?>
天</div>
                                <?php }?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == '0') {?>
                                    <div class="card-tag tag-black">端口速率</div>
                                    <div class="card-tag tag-blue">无限制</div>
                                <?php } else { ?>
                                    <div class="card-tag tag-black">端口限速</div>
                                    <div class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();?>
 Mbps</div>
                                <?php }?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['shop']->value->connector();
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == '0') {?>
                                    <div class="card-tag tag-black">客户端数量</div>
                                    <div class="card-tag tag-blue">无限制</div>
                                <?php } else { ?>
                                    <div class="card-tag tag-black">客户端限制</div>
                                    <div class="card-tag tag-blue"><?php echo $_smarty_tpl->tpl_vars['shop']->value->connector();?>
 个</div>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>


                <div aria-hidden="true" class="modal modal-va-middle fade" id="coupon_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">您有优惠码吗？</h2>
                            </div>
                            <div class="modal-inner">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="coupon">有的话，请在这里输入。没有的话，直接确定吧</label>
                                    <input class="form-control maxwidth-edit" id="coupon" type="text">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand waves-attach" data-dismiss="modal"
                                            id="coupon_input" type="button">确定
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div aria-hidden="true" class="modal modal-va-middle fade" id="order_modal" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">订单确认</h2>
                            </div>
                            <div class="modal-inner">
                                <p id="name">商品名称：</p>
                                <p id="credit">优惠额度：</p>
                                <p id="total">总金额：</p>

                                <div class="checkbox switch">
                                    <label for="disableothers">
                                        <input checked class="access-hide" id="disableothers" type="checkbox">
                                        <span class="switch-toggle"></span>关闭旧套餐自动续费
                                    </label>
                                </div>
                                <br/>
                                <div class="checkbox switch" id="autor">
                                    <label for="autorenew">
                                        <input checked class="access-hide" id="autorenew" type="checkbox">
                                        <span class="switch-toggle"></span>到期时自动续费
                                    </label>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand waves-attach" data-dismiss="modal"
                                            id="order_input" type="button">确定
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


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    function buy(id, auto) {
        if (auto == 0) {
            document.getElementById('autor').style.display = "none";
        } else {
            document.getElementById('autor').style.display = "";
        }
        shop = id;
        $("#coupon_modal").modal();
    }

    ;(function () {

        //UI切换
        let elShopCard = $$.querySelector(".shop-flex");
        let elShopTable = $$.querySelector(".shop-table");

        let switchToCard = new UIswitch('switch-cards', elShopTable, elShopCard, 'flex', 'tempshop');
        switchToCard.listenSwitch();

        let switchToTable = new UIswitch('switch-table', elShopCard, elShopTable, 'flex', 'tempshop');
        switchToTable.listenSwitch();

        switchToCard.setDefault();
        switchToTable.setDefault();

        //手风琴
        let dropDownButton = document.querySelectorAll('.shop-table .card');
        let dropDownArea = document.querySelectorAll('.dropdown-area');
        let arrows = document.querySelectorAll('.shop-table .card i');

        for (let i = 0; i < dropDownButton.length; i++) {
            rotatrArrow(dropDownButton[i], arrows[i]);
            custDropdown(dropDownButton[i], dropDownArea[i]);
        }

    })();


    $("#coupon_input").click(function () {
        $.ajax({
            type: "POST",
            url: "coupon_check",
            dataType: "json",
            data: {
                coupon: $$getValue('coupon'),
                shop
            },
            success: (data) => {
                if (data.ret) {
                    $$.getElementById('name').innerHTML = `商品名称：${
                            data.name
                            }`;
                    $$.getElementById('credit').innerHTML = `优惠额度：${
                            data.credit
                            }`;
                    $$.getElementById('total').innerHTML = `总金额：${
                            data.total
                            }`;
                    $("#order_modal").modal();
                } else {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                }
            },
            error: (jqXHR) => {
                $("#result").modal();
                $$.getElementById('msg').innerHTML = `${
                        data.msg
                        } 发生了错误`;
            }
        })
    });

    $("#order_input").click(function () {

        if (document.getElementById('autorenew').checked) {
            var autorenew = 1;
        } else {
            var autorenew = 0;
        }

        if (document.getElementById('disableothers').checked) {
            var disableothers = 1;
        } else {
            var disableothers = 0;
        }

        $.ajax({
            type: "POST",
            url: "buy",
            dataType: "json",
            data: {
                coupon: $$getValue('coupon'),
                shop,
                autorenew,
                disableothers
            },
            success: (data) => {
                if (data.ret) {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/user/shop'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                } else {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                }
            },
            error: (jqXHR) => {
                $("#result").modal();
                $$.getElementById('msg').innerHTML = `${
                        data.msg
                        } 发生了错误`;
            }
        })
    });

<?php echo '</script'; ?>
><?php }
}
