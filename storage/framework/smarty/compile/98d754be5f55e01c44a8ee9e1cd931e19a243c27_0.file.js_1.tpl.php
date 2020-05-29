<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 19:26:52
  from '/www/wwwroot/zzz.zzz/resources/views/material/table_2/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7de2fcda92b0_19861272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d754be5f55e01c44a8ee9e1cd931e19a243c27' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/table_2/js_1.tpl',
      1 => 1585308406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7de2fcda92b0_19861272 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_2.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_2.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
