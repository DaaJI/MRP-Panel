<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 23:46:39
  from '/www/wwwroot/zzz.zzz/resources/views/material/table_2/js_1_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7e1fdfd73ad9_21781867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd59ab4cea2fb747970b781c039bbb1fd1d0536' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/table_2/js_1_2.tpl',
      1 => 1585323907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7e1fdfd73ad9_21781867 (Smarty_Internal_Template $_smarty_tpl) {
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
