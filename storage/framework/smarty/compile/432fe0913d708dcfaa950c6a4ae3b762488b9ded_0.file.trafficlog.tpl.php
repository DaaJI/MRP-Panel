<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 10:50:51
  from '/www/wwwroot/sspanel/resources/views/material/user/trafficlog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4df40bc79360_99245797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '432fe0913d708dcfaa950c6a4ae3b762488b9ded' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/trafficlog.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5e4df40bc79360_99245797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">流量记录</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner margin-bottom-no">
                                    <p class="card-heading">注意!</p>
                                    <p>部分节点不支持流量记录.</p>
                                    <p>此处只展示最近 72 小时的记录，粒度为分钟。</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div id="log_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="/assets/js/canvasjs.min.js"><?php echo '</script'; ?>
>

                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        window.onload = function () {
                                            var log_chart = new CanvasJS.Chart("log_chart",
                                                    {
                                                        zoomEnabled: true,
                                                        title: {
                                                            text: "您的最近72小时流量消耗",
                                                            fontSize: 20

                                                        },
                                                        animationEnabled: true,
                                                        axisX: {
                                                            title: "时间",
                                                            labelFontSize: 14,
                                                            titleFontSize: 18
                                                        },
                                                        axisY: {
                                                            title: "流量/KB",
                                                            lineThickness: 2,
                                                            labelFontSize: 14,
                                                            titleFontSize: 18
                                                        },

                                                        data: [
                                                            {
                                                                type: "scatter",
                                                                
                                                                toolTipContent: "<span style='\"'color: {color};'\"'><strong>产生时间: </strong></span>{x} <br/><span style='\"'color: {color};'\"'><strong>流量: </strong></span>{y} KB <br/><span style='\"'color: {color};'\"'><strong>产生节点: </strong></span>{jd}",
                                                                

                                                                dataPoints: [


                                                                    <?php $_smarty_tpl->_assignInScope('i', 0);?>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'single_log');
$_smarty_tpl->tpl_vars['single_log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single_log']->value) {
$_smarty_tpl->tpl_vars['single_log']->do_else = false;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
                                                                    
                                                                    {
                                                                        
                                                                        x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_log']->value->log_time*1000;?>
),
                                                                        y:<?php echo $_smarty_tpl->tpl_vars['single_log']->value->totalUsedRaw();?>
,
                                                                        jd: "<?php echo $_smarty_tpl->tpl_vars['single_log']->value->node()->name;?>
"
                                                                        
                                                                    }
                                                                    
                                                                    <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                                                    <?php } else { ?>
                                                                    
                                                                    , {
                                                                        
                                                                        x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_log']->value->log_time*1000;?>
),
                                                                        y:<?php echo $_smarty_tpl->tpl_vars['single_log']->value->totalUsedRaw();?>
,
                                                                        jd: "<?php echo $_smarty_tpl->tpl_vars['single_log']->value->node()->name;?>
"
                                                                        
                                                                    }
                                                                    
                                                                    <?php }?>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                                ]
                                                            }

                                                        ]
                                                    });

                                            log_chart.render();
                                        }
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
