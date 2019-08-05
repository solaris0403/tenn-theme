<?php
/**
 * @package Tenn
 * @author tony
 * @version 1.0.0
 * @link https://www.itenn.cc
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
<div id="site-content">
    <ul>
        <?php if ($this->have()): ?>
            <?php while ($this->next()): ?>
                <li>
                    <div class="entry clearfix">
                        <div class="entry-media left">
                            <a href="<?php $this->permalink() ?>">
                                <!--判断say字段的字段值是否存在-->
                                <?php if ($this->fields->cover): ?>
                                    <img class="entry-img" src="<?php $this->fields->cover(); ?>"
                                         alt="<?php $this->fields->cover(); ?>">
                                <?php else: ?>
                                    <img class="entry-img"
                                         src="http://n.sinaimg.cn/photo/transform/700/w1000h500/20190726/bdc9-iakuryw4236269.jpg"
                                         alt="的">
                                <?php endif; ?>
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
    <?php $this->pageNav('←', '→', 1, '...',
        array('wrapTag' => 'ul', 'wrapClass' => 'uk-pagination uk-flex-center uk-margin', 'itemTag' => 'li', 'textTag' => 'span',
            'currentClass' => 'uk-active', 'prevClass' => 'uk-pagination-previous', 'nextClass' => 'uk-pagination-next',)); ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

