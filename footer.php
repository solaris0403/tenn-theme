<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer id="site-footer">
    <div class="site-info clearfix text-center">
        Copyright © 2016-2019 <a href="https://blog.itenn.cc/">天很蓝的博客</a>.
    </div>
</footer>
<!--<script src="--><?php //$this->options->themeUrl('/js/script.js'); ?><!--"></script>-->
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
<script>
    //pjax+NProgress
    $(document).pjax('a[target!=_blank]', '#wrapper', {fragment: '#wrapper', timeout: 8000});
    NProgress.configure({showSpinner: false});
    NProgress.configure({parent: '#wrapper'});
    NProgress.configure({ easing: 'ease', speed: 500 });
    $(document).on('pjax:start', function () {
        NProgress.start();
    });
    $(document).on('pjax:end', function () {
        NProgress.done();
    });

    //代码高亮
    hljs.initHighlightingOnLoad();
</script>
</div>
</body>
</html>
