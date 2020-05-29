{include file='user/main.tpl'}

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑仓库物料 #{$node->id}</h1>
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
                                           value="{$node->m_id}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">物料名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="{$node->name}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="size">规格</label>
                                    <input class="form-control maxwidth-edit" id="size" name="size" type="text"
                                           value="{$node->size}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ex_1">例外组1</label>
                                    <input class="form-control maxwidth-edit" id="ex_1" name="ex_1" type="text"
                                           value="{$node->ex_1}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ex_2">例外组2</label>
                                    <input class="form-control maxwidth-edit" id="ex_2" name="ex_2" type="text"
                                           value="{$node->ex_2}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ex_3">例外组3</label>
                                    <input class="form-control maxwidth-edit" id="ex_3" name="ex_3" type="text"
                                           value="{$node->ex_3}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ex_4">例外组4</label>
                                    <input class="form-control maxwidth-edit" id="ex_4" name="ex_4" type="text"
                                           value="{$node->ex_4}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="ex_5">例外组5</label>
                                    <input class="form-control maxwidth-edit" id="ex_5" name="ex_5" type="text"
                                           value="{$node->ex_5}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">备注</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text"
                                           value="{$node->info}">
                                </div>

                                <div class="form-group form-group-label">
                                    <div class="checkbox switch">
                                        <label for="status">
                                            <input {if $node->status}checked{/if} class="access-hide" id="status"
                                                   name="status" type="checkbox"><span class="switch-toggle"></span>是否上架
                                        </label>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group form-group-label" {if !$user->is_su && !$user->is_whadmin}hidden="hidden"{/if}>
                                    <label class="floating-label" for="ori_price">基准单价</label>
                                    <input class="form-control maxwidth-edit" id="ori_price" name="ori_price" type="text"
                                           value="{$node->ori_price}">
                                </div>

                                <div class="form-group form-group-label" {if !$user->is_su && !$user->is_whadmin}hidden="hidden"{/if}>
                                    <label class="floating-label" for="float_price">浮动单价</label>
                                    <input class="form-control maxwidth-edit" id="float_price" name="float_price" type="text"
                                           value="{$node->float_price}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="q_unit">数量单位</label>
                                    <input class="form-control maxwidth-edit" id="q_unit" name="q_unit" type="text"
                                           value="{$node->q_unit}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="pre_in">预入库量</label>
                                    <input class="form-control maxwidth-edit" id="pre_in" name="pre_in" type="text"
                                           value="{$node->pre_in}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="all_stock">总量</label>
                                    <input class="form-control maxwidth-edit" id="all_stock" name="all_stock" type="text"
                                           value="{$node->all_stock}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="used_stock">已分配</label>
                                    <input class="form-control maxwidth-edit" id="used_stock" name="used_stock" type="text"
                                           value="{$node->used_stock}">
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="stock">余量</label>
                                    <input class="form-control maxwidth-edit" id="stock" name="stock" type="text"
                                           value="{$node->stock}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="critical_stock">物料不足阈值</label>
                                    <input class="form-control maxwidth-edit" id="critical_stock" name="critical_stock" type="text"
                                           value="{$node->critical_stock}">
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
            name: {required: true},
        },


        submitHandler: () => {

            if ($$.getElementById('status').checked) {
                var status = 1;
            } else {
                var status = 0;
            }
{/literal}

            $.ajax({

                type: "PUT",
                url: "/admin/depository/{$node->id}",
                dataType: "json",
{literal}
                data: {
                    name: $$getValue('name'),
                    info: $$getValue('info'),
                    size: $$getValue('size'),
                    pre_in: $$getValue('pre_in'),
                    e1: $$getValue('ex_1'),
                    e2: $$getValue('ex_2'),
                    e3: $$getValue('ex_3'),
                    e4: $$getValue('ex_4'),
                    e5: $$getValue('ex_5'),
                    ori_price: $$getValue('ori_price'),
                    float_price: $$getValue('float_price'),
                    m_id: $$getValue('m_id'),
                    q_unit: $$getValue('q_unit'),
                    all_stock: $$getValue('all_stock'),
                    status
{/literal},
                    used_stock: $$getValue('used_stock'),
                    stock: $$getValue('stock'),
                    critical_stock: $$getValue('critical_stock')
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
{/literal}
</script>

