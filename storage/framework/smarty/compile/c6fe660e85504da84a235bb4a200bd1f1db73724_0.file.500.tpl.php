<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 17:44:58
  from '/www/wwwroot/sspanel/resources/views/material/500.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cd59a1e9146_35302058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6fe660e85504da84a235bb4a200bd1f1db73724' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/500.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cd59a1e9146_35302058 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
<head>
    <title>该网页无法正常运作 - <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
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
                <h1>500 错误</h1>
                <p>服务娘崩溃了呢... TwT</p>
                <p>这件事儿不应该发生的...如果反复出现可以提交一下工单联系站主.</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="./#">返回首页</a></li>
            </ul>
        </nav>
    </header>
    <footer id="footer">
        <p class="copyright">&copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
 </p>
    </footer>
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
