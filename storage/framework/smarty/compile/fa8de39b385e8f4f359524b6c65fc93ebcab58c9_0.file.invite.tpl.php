<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-20 20:56:07
  from '/www/wwwroot/sspanel/resources/views/material/admin/invite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e74bd67a45d56_98488530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8de39b385e8f4f359524b6c65fc93ebcab58c9' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/admin/invite.tpl',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_5e74bd67a45d56_98488530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">邀请</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">

            <div class="card">
                <div class="card-main">
                    <div class="card-inner">
                        <p>公共邀请码功能已废弃，如需开放注册请在 .config.php 中将 register_mode 项目设置为 open </p>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-main">
                    <div class="card-inner">

                        <div class="form-group form-group-label">
                            <label class="floating-label" for="uid">需要增加邀请链接数量的用户</label>
                            <input class="form-control maxwidth-edit" id="uid" type="text">
                            <p class="form-control-guide"><i class="material-icons">info</i>填写用户的ID，或者用户的完整邮箱</p>
                        </div>

                        <div class="form-group form-group-label">
                            <label class="floating-label" for="prefix">邀请链接数量</label>
                            <input class="form-control maxwidth-edit" id="num" type="number">
                        </div>


                    </div>

                    <div class="card-action">
                        <div class="card-action-btn pull-left">
                            <a class="btn btn-flat waves-attach" id="invite"><span class="icon">check</span>&nbsp;增加</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card margin-bottom-no">
                <div class="card-main">
                    <div class="card-inner">
                        <p class="card-heading">返利记录</p>
                        <p>显示表项: <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </p>
                        <div class="card-table">
                            <div class="table-responsive">
                                <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </div>


</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    $$.getElementById('invite').addEventListener('click', () => {
        $.ajax({
            type: "POST",
            url: "/admin/invite",
            dataType: "json",
            data: {
                prefix: $$getValue('invite'),
                uid: $$getValue('uid'),
                num: $$getValue('num'),
            },
            success: data => {
                if (data.ret) {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                    window.setTimeout("location.href='/admin/invite'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
 );
                } else {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = data.msg;
                }
                // window.location.reload();
            },
            error: jqXHR => {
                alert(`发生错误：${
                        jqXHR.status
                        }`);
            }
        })
    })

    window.addEventListener('load', () => {
        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    });
<?php echo '</script'; ?>
>
<?php }
}
