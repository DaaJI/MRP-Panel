<footer class="ui-footer">
    <div class="container">
        &copy;{date("Y")} {$config["appName"]}</a>
        {if $config["enable_analytics_code"] == 'true'}{include file='analytics.tpl'}{/if}
    </div>
</footer>

<!-- js -->
{if $config["sspanelAnalysis"] == 'true'}
    <!-- Google Analytics -->
    <script>
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
    </script>
    <script async src="/theme/material/js/analytics.js"></script>
    <!-- End Google Analytics -->
{/if}
<script src="/theme/material/js/jquery-validation@1.17.0"></script>
<script src="/theme/material/js/datatables.net@1.10.19"></script>
<script src="/theme/material/js/dataTables.material.min.js"></script>
<script src="/theme/material/js/base.min.js"></script>
<script src="/theme/material/js/project.min.js"></script>

</body>
</html>
