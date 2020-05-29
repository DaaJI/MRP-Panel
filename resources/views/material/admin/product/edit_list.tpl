{include file='user/main.tpl'}

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">清单增减物料 #{$node->name}</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>从系统中所有的仓库物料中选择，如果需要添加新的物料，请先到仓库库存页面创建。</p>
                        <div class="card-table">
                            <div class="table-responsive">
                                {include file='table/table.tpl'}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>清单中已有物料。</p>
                            <p>显示表项:
                                {include file='table/checkbox_2.tpl'}
                            </p>
                        <div class="card-table">
                            <div class="table-responsive">
                                {include file='table/table_2.tpl'}
                            </div>

                        </div>

                        </div>
                    </div>
                </div>
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <p>从已有清单中导入物料，当前仅支持导入到空的清单。</p>
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ref">源清单</label>
                                    <select id="ref" class="form-control maxwidth-edit" name="ref">
                                        <option value="">无</option>
                                        {foreach $ref_from as $ref}
                                            <option value="{$ref->id}">{$ref->name} #{$ref->id}</option>
                                        {/foreach}
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">导入
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand waves-attach waves-circle waves-light"
                           href="/admin/product"><</a>

                    </div>
                </div>


                <div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要删除？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>请您确认。</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                                            data-dismiss="modal" type="button">取消
                                    </button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal"
                                            id="delete_input" type="button">确定
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {include file='dialog.tpl'}


        </div>


    </div>
</main>

{include file='admin/footer.tpl'}

<script>

    function delete_modal_show(id) {
        deleteid = id;
        $("#delete_modal").modal();
    }

    window.addEventListener('load', () => {
        {include file='table/js_2.tpl'}

    })

    {include file='table/js_1_2.tpl'}

    window.addEventListener('load', () => {
        {include file='table/js_2_2.tpl'}

        function delete_id() {
            $.ajax({
                type: "DELETE",
                url: "/admin/product/inlist",
                dataType: "json",
                data: {
                    id: deleteid
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        {include file='table/js_delete_2.tpl'}
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}data.msg{rdelim} 发生错误了。`;
                }
            });
        }

        $$.getElementById('delete_input').addEventListener('click', delete_id);

    })


    {literal}
    $('#main_form').validate({
        rules: {
            ref: {required: true},
        },
        {/literal}
        submitHandler: () => {

            $.ajax({
                type: "POST",
                url: "/admin/product/{$node->id}/add_from",
                dataType: "json",
                data: {
                    ref: $$getValue('ref'),
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/admin/product/{$node->id}/edit_list'", {$config['jump_delay']});
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${ldelim}data.msg{rdelim} 发生错误了。`;
                }
            });
        }
    });


</script>
