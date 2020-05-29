<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 11:06:46
  from '/www/wwwroot/sspanel/resources/views/material/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4b54c69af7f0_06889839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4833ee11c909cfb9619055ab671caa424de39f2' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/header.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mylivechat.tpl' => 1,
  ),
),false)) {
function content_5e4b54c69af7f0_06889839 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
    <meta name="theme-color" content="#4285f4">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
    <!-- css -->
    <link href="/theme/material/css/base.min.css" rel="stylesheet">
    <link href="/theme/material/css/project.min.css" rel="stylesheet">
    <link href="/theme/material/css/auth.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
    <style>
        .divcss5 {
            position: fixed;
            bottom: 0;
        }
    </style>
    <!-- favicon -->
    <!-- js -->
    <?php echo '<script'; ?>
 src="/assets/js/fuck.js"><?php echo '</script'; ?>
>
    <!-- ... -->
</head>

<body class="page-brand">


<?php if ($_smarty_tpl->tpl_vars['config']->value["enable_mylivechat"] == 'true') {
$_smarty_tpl->_subTemplateRender('file:mylivechat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
