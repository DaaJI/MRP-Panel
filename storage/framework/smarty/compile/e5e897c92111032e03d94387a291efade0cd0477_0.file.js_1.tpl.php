<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 10:35:51
  from '/www/wwwroot/zzz.zzz/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7eb807612413_24427792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e897c92111032e03d94387a291efade0cd0477' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/table/js_1.tpl',
      1 => 1585362948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7eb807612413_24427792 (Smarty_Internal_Template $_smarty_tpl) {
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
