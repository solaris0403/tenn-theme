<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="site-sidebar" class="uk-width-1-4 uk-text-center">
    <?php if ($this->is('index')): ?>
        <div class="widget">
            <h4 class="widget-title">
                <span>搜索</span>
            </h4>
            <form id="site-search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>"/>
            </form>
        </div>
    <?php endif; ?>

    <div class="widget">
        <h4 class="widget-title">
            <span>最新文章</span>
            <?php $this->widget('Widget_Contents_Post_Recent') ?>
        </h4>
        <ul class="entries-widget">
            <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li>
            <div class="widget-entry-text">
                <a class="widget-entry-title" href="{permalink}"
                   title="{title}">{title}</a>
                <div class="widget-entry-meta"><i>{commentsNum} 评论</i></div>
            </div>
        </li>'); ?>
        </ul>
    </div>


    <!--最新回复-->
    <div class="widget">
        <h4 class="widget-title">
            <span>最新回复</span>
        </h4>
        <ul class="entries-widget">
            <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while ($comments->next()): ?>
                <li>
                    <div class="widget-entry-text">
                        <a class="widget-entry-title"
                           href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <!--文章分类-->
    <div class="widget">
        <h4 class="widget-title">
            <span>文章分类</span>
        </h4>
        <ul class="entries-widget">
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
            <?php while ($categories->next()): ?>
                <li>
                    <div class="widget-entry-text">
                        <a class="widget-entry-title"
                           href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a>
                        <div class="widget-entry-meta"><i><?php $categories->count(); ?></i></div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <!--按月归档-->
    <div class="widget">
        <h4 class="widget-title">
            <span>按月归档</span>
        </h4>
        <ul class="entries-widget">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li>
            <div class="widget-entry-text">
                <a class="widget-entry-title" href="{permalink}">{date}</a>
            </div>
        </li>'); ?>

        </ul>
    </div>

    <!--标签云-->
    <div class="widget">
        <h4 class="widget-title">
            <span>标签云</span>
        </h4>
        <?php $this->widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
        <?php if ($tags->have()): ?>
            <?php while ($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!--<div class="widget">-->
    <!--    <h4 class="widget-title">-->
    <!--        <span>热门文章</span>-->
    <!--    </h4>-->
    <!--    <ul class="entries-widget">-->
    <!--        <li>-->
    <!--            <div class="widget-entry-text">-->
    <!--                <a class="widget-entry-title" href="https://mrju.cn/sony-xz1.html"-->
    <!--                   title="新入手一款新机机">新入手一款新机机</a>-->
    <!--                <div class="widget-entry-meta"><i>76 评论</i></div>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <div class="widget-entry-text">-->
    <!--                <a class="widget-entry-title" href="https://mrju.cn/sony-xz1.html" title="新入手一款新机机">欢迎使用-->
    <!--                    Typecho</a>-->
    <!--                <div class="widget-entry-meta"><i>56 评论</i></div>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <div class="widget-entry-text">-->
    <!--                <a class="widget-entry-title" href="https://mrju.cn/sony-xz1.html"-->
    <!--                   title="新入手一款新机机">给博客搬了个新家</a>-->
    <!--                <div class="widget-entry-meta"><i>16 评论</i></div>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <div class="widget-entry-text">-->
    <!--                <a class="widget-entry-title" href="https://mrju.cn/sony-xz1.html"-->
    <!--                   title="新入手一款新机机">又换回老主题了</a>-->
    <!--                <div class="widget-entry-meta"><i>6 评论</i></div>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <div class="widget-entry-text">-->
    <!--                <a class="widget-entry-title" href="https://mrju.cn/sony-xz1.html" title="新入手一款新机机">公司月会-->
    <!--                </a>-->
    <!--                <div class="widget-entry-meta"><i>0 评论</i></div>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--    </ul>-->
    <!--</div>-->
</div>