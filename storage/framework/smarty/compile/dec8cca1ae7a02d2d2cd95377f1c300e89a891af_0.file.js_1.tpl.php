<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 11:33:12
  from '/www/wwwroot/sspanel/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b5af8a5c2d8_55425462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec8cca1ae7a02d2d2cd95377f1c300e89a891af' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/table/js_1.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4b5af8a5c2d8_55425462 (Smarty_Internal_Template $_smarty_tpl) {
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
