<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-03 13:55:35
  from '/www/wwwroot/preview.1/resources/views/material/table/checkbox_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e86cfd73204c6_70020429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43faab17f73cb2e54086bbc5130e7788d1d0e0f2' => 
    array (
      0 => '/www/wwwroot/preview.1/resources/views/material/table/checkbox_2.tpl',
      1 => 1585893332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e86cfd73204c6_70020429 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_2_config']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <div class="checkbox checkbox-adv checkbox-inline">
        <label for="checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
            <input href="javascript:void(0);" onClick="modify_table_visible('checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')"
                   <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['table_2_config']->value['default_show_column']) || count($_smarty_tpl->tpl_vars['table_2_config']->value['default_show_column']) == 0) {?>checked=""<?php }?>
                   class="access-hide" id="checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="checkbox_2_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

            <span class="checkbox-circle"></span><span class="checkbox-circle-check"></span><span
                    class="checkbox-circle-icon icon">done</span>
        </label>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
