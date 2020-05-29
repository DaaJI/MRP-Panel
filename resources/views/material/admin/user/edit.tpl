{include file='user/main.tpl'}


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">用户编辑 #{$edit_user->id}</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="email">邮箱</label>
                                <input class="form-control maxwidth-edit" id="email" type="email"
                                       value="{$edit_user->email}">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="remark">备注(仅对管理员可见)</label>
                                <input class="form-control maxwidth-edit" id="remark" type="text"
                                       value="{$edit_user->remark}">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="pass">密码(不修改请留空)</label>
                                <input class="form-control maxwidth-edit" id="pass" type="password"
                                       autocomplete="new-password">
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="enable">
                                        <input {if $edit_user->enable==1}checked{/if} class="access-hide" id="enable"
                                               type="checkbox"><span class="switch-toggle"></span>用户启用
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_su">
                                        <input {if $edit_user->is_su==1}checked{/if} class="access-hide"
                                               id="is_su" type="checkbox"><span class="switch-toggle"></span>是否管理员
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_whadmin">
                                        <input {if $edit_user->is_whadmin==1}checked{/if} class="access-hide"
                                               id="is_whadmin" type="checkbox"><span class="switch-toggle"></span>是否采购部
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_depo">
                                        <input {if $edit_user->is_depo==1}checked{/if} class="access-hide"
                                               id="is_depo" type="checkbox"><span class="switch-toggle"></span>是否仓储部
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_tech">
                                        <input {if $edit_user->is_tech==1}checked{/if} class="access-hide"
                                               id="is_tech" type="checkbox"><span class="switch-toggle"></span>是否技术部
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_sales">
                                        <input {if $edit_user->is_sales==1}checked{/if} class="access-hide"
                                               id="is_sales" type="checkbox"><span class="switch-toggle"></span>是否销售部
                                    </label>
                                </div>
                            </div>

<!--
                            <div class="form-group form-group-label">
                                <label for="is_multi_user">
                                    <label class="floating-label" for="sort">预留选项</label>
                                    <select id="is_multi_user" class="form-control maxwidth-edit" name="is_multi_user">
                                        <option value="0" {if $edit_user->is_multi_user==0}selected{/if}>0
                                        </option>
                                        <option value="1" {if $edit_user->is_multi_user==1}selected{/if}>1
                                        </option>
                                        <option value="2" {if $edit_user->is_multi_user==2}selected{/if}>2
                                        </option>
                                    </select>
                                </label>
                            </div>
-->

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

                {include file='dialog.tpl'}
        </div>


    </div>
</main>


{include file='admin/footer.tpl'}


<script>
    //document.getElementById("class_expire").value="{$edit_user->class_expire}";

    window.addEventListener('load', () => {
        function submit() {
            if (document.getElementById('is_su').checked) {
                var is_su = 1;
            } else {
                var is_su = 0;
            }

            if (document.getElementById('enable').checked) {
                var enable = 1;
            } else {
                var enable = 0;
            }

            if (document.getElementById('is_whadmin').checked) {
                var is_whadmin = 1;
            } else {
                var is_whadmin = 0;
            }

            if (document.getElementById('is_tech').checked) {
                var is_tech = 1;
            } else {
                var is_tech = 0;
            }

            if (document.getElementById('is_depo').checked) {
                var is_depo = 1;
            } else {
                var is_depo = 0;
            }

            if (document.getElementById('is_sales').checked) {
                var is_sales = 1;
            } else {
                var is_sales = 0;
            }

            $.ajax({
                type: "PUT",
                url: "/admin/user/{$edit_user->id}",
                dataType: "json",
                data: {
                    email: $$getValue('email'),
                    pass: $$getValue('pass'),
                    //is_multi_user: $$getValue('is_multi_user'),
                    remark: $$getValue('remark'),

                    enable,
                    is_su,
                    is_whadmin,
                    is_tech,
                    is_depo,
                    is_sales

                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", {$config['jump_delay']});
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }

        $("html").keydown(event => {
            if (event.keyCode == 13) login();
        });

        $$.getElementById('submit').addEventListener('click', submit);

    })
</script>
