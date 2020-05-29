<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-24 18:24:51
  from '/www/wwwroot/xykt_1.0/resources/views/material/user/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eca4b73a5bc26_32134799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ba2a64bf3db6d5520ea2438a059574e77cfb2b' => 
    array (
      0 => '/www/wwwroot/xykt_1.0/resources/views/material/user/footer.tpl',
      1 => 1585559279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_5eca4b73a5bc26_32134799 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="ui-footer">
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

<!-- js -->
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
<?php }
echo '<script'; ?>
 src="/theme/material/js/jquery-validation@1.17.0"><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
 src="/theme/material/js/clipboard.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>console.table([['数据库查询', '执行时间'], ['<?php echo count($_smarty_tpl->tpl_vars['queryLog']->value);?>
 次', '<?php echo $_smarty_tpl->tpl_vars['optTime']->value;?>
 ms']])<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
