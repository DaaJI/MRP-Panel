{include file='user/main.tpl'}

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑合同详情 #{$node->id}</h1>
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
                                    <label class="floating-label" for="id">清单ID</label>
                                    <input class="form-control maxwidth-edit" id="id" name="id" type="text"
                                           value="{$node->id}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="name">清单名称</label>
                                    <input class="form-control maxwidth-edit" id="name" name="name" type="text"
                                           value="{$node->name}" readonly>
                                </div>

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="info">备注</label>
                                    <input class="form-control maxwidth-edit" id="info" name="info" type="text"
                                           value="{$node->info}">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card" {if !$user->is_su}hidden="hidden"{/if}>
                        <div class="card-main">
                            <div class="card-inner">

                                <div class="form-group form-group-label">
                                    <label class="floating-label" for="num">数量</label>
                                    <input class="form-control maxwidth-edit" id="num" name="num" type="text"
                                           value="{$node->num}">
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
            num: {required: true}
        },

        submitHandler: () => {
{/literal}

            $.ajax({
                type: "PUT",
                url: "/admin/order/{$node->id}",
                dataType: "json",
                data: {
                    info: $$getValue('info'),
                    num: $$getValue('num')
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
