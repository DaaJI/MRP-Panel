<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 15:54:35
  from '/www/wwwroot/zzz.zzz/resources/views/material/405.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7c5fbbd20ab5_57650753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2358cf73abb33b63ba60448d9fcd9a9b67aed8e' => 
    array (
      0 => '/www/wwwroot/zzz.zzz/resources/views/material/405.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7c5fbbd20ab5_57650753 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
    <title>您的访问方式不正确 - <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 </title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="bookmark" href="/favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="shortcut icon" type="image/ico" href="images/ssr.ico">
    <link rel="stylesheet" href="/assets/css/main.css"/>

    <noscript>
        <link rel="stylesheet" href="/assets/css/noscript.css"/>
    </noscript>
</head>

<body>

<div id="wrapper">
    <header id="header">
        <div class="logo">
            <span class="icon fa-rocket"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>405 错误</h1>
                <p>您的访问方式不正确。</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="./#">返回首页</a></li>
            </ul>
        </nav>
    </header>
    <footer id="footer"><p class="copyright">&copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 </p></footer>
</div>
<div id="bg"></div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@1.11.3"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/gh/ajlkn/skel@3.0.1/dist/skel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/main.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
