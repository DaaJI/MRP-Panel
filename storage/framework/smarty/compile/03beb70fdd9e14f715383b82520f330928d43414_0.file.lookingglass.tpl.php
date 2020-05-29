<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-22 12:10:31
  from '/www/wwwroot/sspanel/resources/views/material/user/lookingglass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e50a9b7195947_04777329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03beb70fdd9e14f715383b82520f330928d43414' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/lookingglass.tpl',
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
function content_5e50a9b7195947_04777329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">延迟检测</h1>
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
                                    <!--    <p class="card-heading">注意!</p>    -->
                                    <p>此处只展示最近<?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
小时的记录。<b>测试节点来自 <a href="http://speedtest.net">Speedtest</a>，数据仅供参考~</b>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div class="card-doubleinner">
                                        <p class="card-heading">三网延迟检测</p>
                                    </div>

                                    <div class="card-table">
                                        <div class="table-responsive table-user">
                                            <table class="table">
                                                <tr>
                                                    <th>节点</th>
                                                    <th>电信延迟</th>
                                                    <!--    <th>电信下载速度</th>
                                                        <th>电信上传速度</th>   -->
                                                    <th>联通延迟</th>
                                                    <!--    <th>联通下载速度</th>
                                                        <th>联通上传速度</th>  -->
                                                    <th>移动延迟</th>
                                                    <!--    <th>移动下载速度</th>
                                                        <th>移动上传速度</th>  -->
                                                </tr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtest']->value, 'single');
$_smarty_tpl->tpl_vars['single']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single']->value) {
$_smarty_tpl->tpl_vars['single']->do_else = false;
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['single']->value->node()->name;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['single']->value->telecomping;?>
</td>
                                                        <!--    <td><?php echo $_smarty_tpl->tpl_vars['single']->value->telecomeupload;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['single']->value->telecomedownload;?>
</td>  -->
                                                        <td><?php echo $_smarty_tpl->tpl_vars['single']->value->unicomping;?>
</td>
                                                        <!--    <td><?php echo $_smarty_tpl->tpl_vars['single']->value->unicomupload;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['single']->value->unicomdownload;?>
</td>   -->
                                                        <td><?php echo $_smarty_tpl->tpl_vars['single']->value->cmccping;?>
</td>
                                                        <!--    <td><?php echo $_smarty_tpl->tpl_vars['single']->value->cmccupload;?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['single']->value->cmccdownload;?>
</td>     -->
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </table>
                                        </div>
                                    </div>
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
