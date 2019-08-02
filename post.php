<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
<div id="site-content">
    <article class="post">
        <header class="post-header">
            <h1 class="post-title"><?php $this->title() ?></h1>
            <div class="post-meta">
                <?php $this->category(',', true, NULL); ?>
                <i class="separator">•</i>
                <time datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
                <i class="separator">•</i>
                <a href="https://mrju.cn/20190418.html#comments">22 条评论</a>
            </div>
        </header>
        <div class="post-content clearfix markdown-body">
            <?php $this->content(); ?>
        </div>
        <footer class="post-footer">
            <div class="post-tags"><?php $this->tags('</div><div class="post-tags">', true, NULL); ?></div>
        </footer>
    </article>
<!--    <nav class="navigation post-navigation" role="navigation">-->
<!--        <div class="nav-links">-->
<!--            <div class="nav-previous">--><?php //$this->theNext('%s »', ''); ?><!--</div>-->
<!--            <div class="nav-next">--><?php //$this->thePrev('« %s', ''); ?><!--</div>-->
<!--        </div>-->
<!--    </nav>-->
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
