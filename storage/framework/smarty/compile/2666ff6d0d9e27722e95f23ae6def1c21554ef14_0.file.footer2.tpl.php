<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 23:03:51
  from '/www/wwwroot/ts/resources/views/material/footer2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9873d73b1614_00788167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2666ff6d0d9e27722e95f23ae6def1c21554ef14' => 
    array (
      0 => '/www/wwwroot/ts/resources/views/material/footer2.tpl',
      1 => 1585560668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_5e9873d73b1614_00788167 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
I'm glad you use this theme, the development is no so easy, I hope you can keep the copyright, I will thank you so much.
It will not impact the appearance and can give developers a lot of support :)

很高兴您使用并喜欢该主题，开发不易 十分谢谢与希望您可以保留一下版权声明。它不会影响美观并可以给开发者很大的支持和动力。 :)
-->

<footer class="ui-footer">
    <div class="container">
        &copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</a>
<!-- | Powered by <a href="/staff">SSPANEL</a> -->
        <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_analytics_code"] == 'true') {
$_smarty_tpl->_subTemplateRender('file:analytics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    </div>
</footer>

<?php if ($_smarty_tpl->tpl_vars['config']->value["sspanelAnalysis"] == 'true') {?>
    <!-- Google Analytics -->
    <?php echo '<script'; ?>
>
        window.ga = window.ga || function () {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-111801619-3', 'auto');
        var hostDomain = window.location.host || document.location.host || document.domain;
        ga('set', 'dimension1', hostDomain);
        ga('send', 'pageview');

        (function () {
            function perfops() {
                var js = document.createElement('script');
                js.src = 'https://cdn.jsdelivr.net/npm/perfops-rom';
                document.body.appendChild(js);
            }

            if (document.readyState === 'complete') {
                perfops();
            } else {
                window.addEventListener('load', perfops);
            }
        })();
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 async src="/theme/material/js/analytics.js"><?php echo '</script'; ?>
>
    <!-- End Google Analytics -->
<?php }?>

<!-- js -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery@2.2.1"><?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars['geetest_html']->value)) {?>
    <?php echo '<script'; ?>
 src="//static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
