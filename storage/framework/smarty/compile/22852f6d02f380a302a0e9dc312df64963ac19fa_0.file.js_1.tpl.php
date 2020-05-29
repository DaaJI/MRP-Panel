<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 23:06:43
  from '/www/wwwroot/ts/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e987483518ab3_18882415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22852f6d02f380a302a0e9dc312df64963ac19fa' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/table/js_1.tpl',
      1 => 1585362948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e987483518ab3_18882415 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_1.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_1.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
