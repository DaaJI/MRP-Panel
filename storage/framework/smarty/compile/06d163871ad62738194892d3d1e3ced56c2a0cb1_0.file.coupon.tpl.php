<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-01 23:37:35
  from '/www/wwwroot/sspanel/resources/views/material/admin/coupon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5bd6bf659642_07067806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06d163871ad62738194892d3d1e3ced56c2a0cb1' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/admin/coupon.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_5e5bd6bf659642_07067806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">优惠码</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">


            <div class="card">
                <div class="card-main">
                    <div class="card-inner">
                        <div class="form-group form-group-label">
                            <label class="floating-label" for="prefix">优惠码</label>
                            <input class="form-control maxwidth-edit" id="prefix" type="text">
                            <p class="form-control-guide"><i class="material-icons">info</i>生成随机优惠码不填</p>
                        </div>

                        <div class="form-group form-group-label">
                            <label class="floating-label" for="credit">优惠码额度</label>
                            <input class="form-control maxwidth-edit" id="credit" type="text">
                            <p class="form-control-guide"><i class="material-icons">info</i>百分比，九折就填 10</p>
                        </div>

                        <div class="form-group form-group-label">
                            <label class="floating-label" for="expire">优惠码有效期(h)</label>
                            <input class="form-control maxwidth-edit" id="expire" type="number" value="1">
                        </div>

                        <div class="form-group form-group-label">
                            <label class="floating-label" for="shop">优惠码可用商品ID</label>
                            <input class="form-control maxwidth-edit" id="shop" type="text">
                            <p class="form-control-guide"><i class="material-icons">info</i>不填即为所有商品可用，多个的话用英文半角逗号分割</p>
                        </div>

                        <div class="form-group form-group-label">
                            <label class="floating-label" for="shop">优惠码每个用户可用次数</label>
                            <input class="form-control maxwidth-edit" id="count" type="number" value="1">
                        </div>

                        <div class="form-group form-group-label">
                            <div class="checkbox switch">
                                <label for="onetime">
                                    <input class="access-hide" id="onetime" type="checkbox"><span
                                            class="switch-toggle"></span>一次性的,只在用户当次购买时有效
                                </label>
                            </div>
                        </div>

                        <div class="form-group form-group-label">
                            <label for="generate-type">
                                <label class="floating-label" for="sort">选择生成方式</label>
                                <select id="generate-type" class="form-control maxwidth-edit">
                                    <option value="1">指定字符</option>
                                    <option value="2">随机字符</option>
                                    <option value="3">指定字符+随机字符</option>
                                </select>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-10 col-md-push-1">
                                    <button id="coupon" type="submit"
                                            class="btn btn-block btn-brand waves-attach waves-light">生成优惠码
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card margin-bottom-no">
                <div class="card-main">
                    <div class="card-inner">
                        <p class="card-heading">优惠码</p>
                        <p>显示表项:
                            <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </p>
                        <div class="card-table">
                            <div class="table-responsive">
                                <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </div>


</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>

    <?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    window.addEventListener('load', () => {
        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        $$.getElementById('coupon').addEventListener('click', () => {
            let couponCode = $$getValue('prefix');

            $.ajax({
                type: "POST",
                url: "/admin/coupon",
                dataType: "json",
                data: {
                    prefix: $$getValue('prefix'),
                    credit: $$getValue('credit'),
                    shop: $$getValue('shop'),
                    onetime: $$getValue('count'),
                    expire: $$getValue('expire'),
                    generate_type: $$getValue('generate-type'),
                },
                success: data => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    if (data.ret) {
                        window.setTimeout("location.href='/admin/coupon'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    }
                },
                error: jqXHR => {
                    alert(`发生错误：${
                            jqXHR.status
                            }`);
                }
            })
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
