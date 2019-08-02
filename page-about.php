<?php
/**
 * 关于页
 *
 * @package custom
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
    <main id="site-main" class="container">
        <div class="row">
            <div id="content" class="col-mb-9">
                <article class="post">
<!--                    <header class="post-header">-->
<!--                        <h1 class="post-title">--><?php //$this->title() ?><!--</h1>-->
<!--                        <div class="post-meta">-->
<!--                            --><?php //$this->category(',', true, NULL); ?>
<!--                            <i class="separator">•</i>-->
<!--                            <time datetime="--><?php //$this->date(); ?><!--">--><?php //$this->date(); ?><!--</time>-->
<!--                            <i class="separator">•</i>-->
<!--                            <a href="https://mrju.cn/20190418.html#comments">22 条评论</a>-->
<!--                        </div>-->
<!--                    </header>-->
                    <div class="post-content clearfix markdown-body">
                        <?php $this->content(); ?>
                    </div>
                    <footer class="post-footer">
                        <div class="post-tags"><?php $this->tags('</div><div class="post-tags">', true, NULL); ?></div>
                    </footer>
                </article>
            </div>
            <div id="sidebar" class="col-mb-3">
                <?php $this->need('sidebar.php'); ?>
            </div>
        </div>
    </main>
<?php $this->need('footer.php'); ?>