<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 23:12:21
  from '/www/wwwroot/ts/resources/views/material/table/js_1_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9875d5df8790_41000806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5238bca5460606a69160387286391309523af5d' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/table/js_1_2.tpl',
      1 => 1585328571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9875d5df8790_41000806 (Smarty_Internal_Template $_smarty_tpl) {
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
