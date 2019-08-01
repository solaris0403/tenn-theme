<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
    <main id="site-main" class="container">
        <div class="row">
            <div id="content" class="col-mb-9">
                <article class="post">
                    <header class="post-header">
                        <h1 class="post-title"><?php $this->title() ?></h1>
                        <div class="post-meta">
                            <time datetime="2019-04-18T19:09:00+08:00"><?php $this->date(); ?></time>
                            <span class="separator">•</span> <a href="https://mrju.cn/20190418.html#comments">22 条评论</a>
                            <span class="separator">•</span> 922 次阅读
                        </div>
                    </header>
                    <div class="post-content clearfix">
                        <?php $this->content(); ?>
                    </div>
                    <footer class="post-footer">
                        <div class="post-tags"><a href="https://mrju.cn/tag/speech/">言语</a></div>
                        <?php $this->tags(', ', true, ''); ?>
                    </footer>
                </article>
            </div>
            <div id="sidebar" class="col-mb-3">
                <?php $this->need('sidebar.php'); ?>
            </div>
        </div>
    </main>
<?php $this->need('footer.php'); ?>