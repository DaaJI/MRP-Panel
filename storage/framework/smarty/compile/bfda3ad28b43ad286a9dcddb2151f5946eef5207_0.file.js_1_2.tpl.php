<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-25 00:03:45
  from '/www/wwwroot/xykt_1.0/resources/views/material/table/js_1_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eca9ae1eb8b06_21174665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfda3ad28b43ad286a9dcddb2151f5946eef5207' => 
    array (
      0 => '/www/wwwroot/xykt_1.0/resources/views/material/table/js_1_2.tpl',
      1 => 1585328571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eca9ae1eb8b06_21174665 (Smarty_Internal_Template $_smarty_tpl) {
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
