<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
<div id="site-content">
    <ul>
        <div id="posts-key">
            <h3><?php $this->archiveTitle(array(
                    'category' => _t('%s'),
                    'search' => _t('%s'),
                    'tag' => _t('%s'),
                    'author' => _t('%s')
                ), '', ''); ?></h3>
        </div>
        <?php if ($this->have()): ?>
            <?php while ($this->next()): ?>
                <li>
                    <div class="entry clearfix">
                        <div class="entry-media left">
                            <a href="<?php $this->permalink() ?>">
                                <img class="entry-img"
                                     src="http://n.sinaimg.cn/photo/transform/700/w1000h500/20190726/bdc9-iakuryw4236269.jpg"
                                     alt="的">
                            </a>
                        </div>
                        <div class="entry-content right">
                            <h2 class="entry-title">
                                <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                            </h2>
                            <div class="entry-summary">
                                <?php $this->excerpt(100, '...'); ?>
                            </div>
                            <div class="entry-meta">
                                <div class="entry-meta-cat">
                                    <?php $this->category(','); ?>
                                </div>
                                <span class="separator">•</span>
                                <div class="entry-meta-date">
                                    <?php $this->date(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        <?php else: ?>
            暂无文章
        <?php endif; ?>
    </ul>
    <div>
        <?php $this->pageNav('←', '→'); ?>
    </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
