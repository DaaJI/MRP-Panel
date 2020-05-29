<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-24 18:31:57
  from '/www/wwwroot/xykt_1.0/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eca4d1d232b57_13492336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d8060e8d282a91728ecb1fec39684c20acfcdff' => 
    array (
      0 => '/www/wwwroot/xykt_1.0/resources/views/material/table/js_1.tpl',
      1 => 1585362948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eca4d1d232b57_13492336 (Smarty_Internal_Template $_smarty_tpl) {
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
