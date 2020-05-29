{include file='user/main.tpl'}

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑订单详情 #{$node->id}</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">
                <form id="main_form">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="m_id">物料编号</label>
                                    <input class="form-control maxwidth-edit" id="m_id" name="m_id" type="text"
                                           value="{$node->m_id}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">物料名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="{$node->name}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="size">规格</label>
                                    <input class="form-control maxwidth-edit" id="size" name="size" type="text"
                                           value="{$node->size}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">备注</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text"
                                           value="{$node->info}">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="stock">数量</label>
                                    <input class="form-control maxwidth-edit" id="stock" name="stock" type="text"
                                           value="{$node->stock}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="q_unit">单位</label>
                                    <input class="form-control maxwidth-edit" id="q_unit" name="q_unit" type="text"
                                           value="{$node->q_unit}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ori_price">基准价格</label>
                                    <input class="form-control maxwidth-edit" id="ori_price" name="ori_price" type="text"
                                           value="{$node->ori_price}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="float_price">浮动价格</label>
                                    <input class="form-control maxwidth-edit" id="float_price" name="float_price" type="text"
                                           value="{$node->float_price}">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 col-md-push-1">
                                            <button id="submit" type="submit"
                                                    class="btn btn-block btn-brand waves-attach waves-light">修改
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {include file='dialog.tpl'}

        </div>


    </div>
</main>

{include file='admin/footer.tpl'}


{literal}
<script>

    $('#main_form').validate({
        rules: {
            name: {required: true}
        },

        submitHandler: () => {
{/literal}

            $.ajax({
                type: "PUT",
                url: "/admin/purchase/{$node->id}",
                dataType: "json",
                data: {
                    name: $$getValue('name'),
                    info: $$getValue('info'),
                    m_id: $$getValue('m_id'),
                    size: $$getValue('size'),
                    ori_price: $$getValue('ori_price'),
                    float_price: $$getValue('float_price'),
                    stock: $$getValue('stock')
                },

                success: (data) => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", {$config['jump_delay']});

                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
{literal}
                error: (jqXHR) => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${jqXHR.status}`;
                }
            });
        }
    });

</script>
{/literal}
