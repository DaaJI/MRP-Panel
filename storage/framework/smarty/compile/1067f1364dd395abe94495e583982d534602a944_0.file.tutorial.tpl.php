<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 11:08:53
  from '/www/wwwroot/sspanel/resources/views/material/user/tutorial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5c78c5ab18a0_36407819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1067f1364dd395abe94495e583982d534602a944' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/tutorial.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/markdown/ssr-win.md' => 1,
    'file:user/markdown/sstap.md' => 1,
    'file:user/markdown/ssr-mac.md' => 1,
    'file:user/markdown/electron-ssr.md' => 1,
    'file:user/markdown/ssr-android.md' => 1,
    'file:user/markdown/quantumult.md' => 1,
    'file:user/markdown/shadowrocket.md' => 1,
    'file:user/markdown/potatso-lite.md' => 1,
    'file:user/markdown/router.md' => 1,
    'file:user/markdown/ssd-windows.md' => 1,
    'file:user/markdown/ssx.md' => 1,
    'file:user/markdown/ss-qt5.md' => 1,
    'file:user/markdown/ssd-android.md' => 1,
    'file:user/markdown/router-ss.md' => 1,
    'file:user/markdown/v2rayn.md' => 1,
    'file:user/markdown/v2rayng.md' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5e5c78c5ab18a0_36407819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sukka/markdown.css">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"><?php echo '</script'; ?>
>
<style>
.tile-sub div {
    padding: 16px;
}
</style>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">使用教程</h1>
        </div>
    </div>

    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-main">

                            <div class="card-inner">
                                <nav class="tab-nav margin-top-no">
                                    <ul class="nav nav-list">
                                        <li class="active">
                                            <a class="" data-toggle="tab" href="#tutorial_ssr"><i class="icon icon-lg">airplanemode_active</i>&nbsp;SSR</a>
                                        </li>
                                        <li>
                                            <a class="" data-toggle="tab" href="#tutorial_ss"><i class="icon icon-lg">flight_takeoff</i>&nbsp;SS/SSD</a>
                                        </li>
                                        <li>
                                            <a class="" data-toggle="tab" href="#tutorial_v2ray"><i class="icon icon-lg">flight_land</i>&nbsp;V2RAY</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="tab-pane fade active in page-course" id="tutorial_ssr">

                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssrwin">
                                            <div class="tile-inner">
                                                <div class="text-overflow">ShadowsocksR / ShadowsocksRR Windows</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssrwin">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssrwin-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssrwin-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ssr-win.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssr-sstap">
                                            <div class="tile-inner">
                                                <div class="text-overflow">SSTap</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssr-sstap">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssr-sstap-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssr-sstap-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/sstap.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssrmac">
                                            <div class="tile-inner">
                                                <div class="text-overflow">ShadowsocksX-NG-R8 macOS</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssrmac">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssrmac-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssrmac-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ssr-mac.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-electron-ssr">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Electron SSR Linux</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-electron-ssr">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-electron-ssr-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-electron-ssr-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/electron-ssr.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssr-android">
                                            <div class="tile-inner">
                                                <div class="text-overflow">SSR / SSRR Android</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssr-android">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssr-android-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssr-android-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ssr-android.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssr-quantumult">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Quantumult iOS</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssr-quantumult">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssr-quantumult-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssr-quantumult-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/quantumult.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssr-shadowrocket">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Shadowrocket iOS</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssr-shadowrocket">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssr-shadowrocket-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssr-shadowrocket-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/shadowrocket.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssr-potatso-lite">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Potatso Lite iOS</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssr-potatso-lite">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssr-potatso-lite-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssr-potatso-lite-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/potatso-lite.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssr-router">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Merlin & Padavan</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssr-router">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssr-router-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssr-router-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/router.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade page-course" id="tutorial_ss">

                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssdwin">
                                            <div class="tile-inner">
                                                <div class="text-overflow">ShadowsocksD Windows</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssdwin">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssdwin-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssdwin-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ssd-windows.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssxng">
                                            <div class="tile-inner">
                                                <div class="text-overflow">ShadowsocksX-NG macOS</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssxng">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssxng-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssxng-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ssx.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssqt5">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Shadowsocks Qt5 Linux</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssqt5">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssqt5-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssqt5-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ss-qt5.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-ssd-android">
                                            <div class="tile-inner">
                                                <div class="text-overflow">ShadowsocksD Android</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-ssd-android">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-ssd-android-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-ssd-android-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/ssd-android.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-router-ss">
                                            <div class="tile-inner">
                                                <div class="text-overflow">Merlin & Padavan</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-router-ss">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-router-ss-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-router-ss-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/router-ss.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade page-course" id="tutorial_v2ray">

                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-v2rayn">
                                            <div class="tile-inner">
                                                <div class="text-overflow">V2RayN Windows</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-v2rayn">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-v2rayn-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-v2rayn-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/v2rayn.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile tile-collapse">
                                        <div data-toggle="tile" data-target="#tutorial-heading-v2rayng">
                                            <div class="tile-inner">
                                                <div class="text-overflow">V2RayNG Android</div>
                                            </div>
                                        </div>
                                        <div class="collapsible-region collapse" id="tutorial-heading-v2rayng">
                                            <div class="tile-sub markdown-body">
                                                <div id="tutorial-v2rayng-content"></div>
                                                <?php echo '<script'; ?>
>
                                                    document.getElementById('tutorial-v2rayng-content').innerHTML = marked(`<?php $_smarty_tpl->_subTemplateRender('file:user/markdown/v2rayng.md', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>`);
                                                <?php echo '</script'; ?>
>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>


            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
