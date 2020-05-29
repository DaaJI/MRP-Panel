<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 19:21:28
  from '/www/wwwroot/preview.1/resources/views/material/table/js_1_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8327b8652159_22914007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833419f30d97c2bcbc84fecdf60b13cff4f86d21' => 
    array (
      0 => '/www/wwwroot/preview.1/resources/views/material/table/js_1_2.tpl',
      1 => 1585328571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8327b8652159_22914007 (Smarty_Internal_Template $_smarty_tpl) {
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
