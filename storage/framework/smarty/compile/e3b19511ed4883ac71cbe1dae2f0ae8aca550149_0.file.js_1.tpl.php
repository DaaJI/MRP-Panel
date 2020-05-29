<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 19:18:23
  from '/www/wwwroot/preview.1/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8326ffbddb32_94651402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b19511ed4883ac71cbe1dae2f0ae8aca550149' => 
    array (
      0 => '/www/wwwroot/preview.1/resources/views/material/table/js_1.tpl',
      1 => 1585362948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8326ffbddb32_94651402 (Smarty_Internal_Template $_smarty_tpl) {
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
