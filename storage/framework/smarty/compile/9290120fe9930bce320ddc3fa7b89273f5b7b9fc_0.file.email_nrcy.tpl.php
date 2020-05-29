<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-25 18:10:12
  from '/www/wwwroot/zzz.zzz/resources/views/material/email_nrcy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7b2e049daf88_28544782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9290120fe9930bce320ddc3fa7b89273f5b7b9fc' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/email_nrcy.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b2e049daf88_28544782 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <img src="/images/email_nrcy.jpg" height="458" width="468">
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_admin_contact"] == 'true') {?>
        <p>如果发现“收信查询”中没有找到邮件，请联系管理员：</p>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact1"] != null) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact1"];?>
</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact2"] != null) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact2"];?>
</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value["admin_contact3"] != null) {?>
            <li><?php echo $_smarty_tpl->tpl_vars['config']->value["admin_contact3"];?>
</li>
        <?php }?>
    <?php }?>
</ul><?php }
}
