<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-25 21:38:33
  from '/www/wwwroot/zzz.zzz/resources/views/material/admin/code/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7b5ed908cb05_34044514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e94a056f5fd384c620a85e18d4666884d6101f' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/admin/code/index.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_5e7b5ed908cb05_34044514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">充值码<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_donate'] == 'true') {?>与捐赠<?php }?>管理</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中金额流转记录。</p>
                            <p>显示表项:
                                <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>


                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light"
                           href="/admin/code/create">+</a>

                    </div>
                </div>


                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light"
                           data-toggle="dropdown"><span class="fbtn-ori icon">add</span><span class="fbtn-sub icon">close</span></a>
                        <div class="fbtn-dropup">
                            <a class="fbtn fbtn-brand waves-attach waves-circle waves-light"
                               href="/admin/code/create"><span class="fbtn-text fbtn-text-left">充值码</span><span
                                        class="icon">code</span></a> <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_donate'] == 'true') {?>
                                <a class="fbtn fbtn-green waves-attach waves-circle waves-light"
                                   href="/admin/donate/create"><span class="fbtn-text fbtn-text-left">捐赠和支出</span><span
                                            class="icon">attach_money</span></a>
                            <?php }?>
                        </div>
                    </div>
                </div>


        </div>


    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    $(document).ready(function () {
        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    });
<?php echo '</script'; ?>
>
<?php }
}
