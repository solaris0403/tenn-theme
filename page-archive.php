<?php
/**
 * 归档页
 *
 * @package custom
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('header.php'); ?>
    <main id="site-main" class="container">
        <div class="row">
            <div id="content" class="col-mb-9">
                <div id="archives-tags">
                    <h3>标签</h3>
                    <?php $this->widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
                    <?php if ($tags->have()): ?>
                        <?php while ($tags->next()): ?>
                            <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div id="archives">
                    <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                    $year = 0;
                    $mon = 0;
                    $i = 0;
                    $j = 0;
                    $output = '';
                    while ($archives->next()):
                        $year_tmp = date('Y', $archives->created);
                        $mon_tmp = date('m', $archives->created);
                        $y = $year;
                        $m = $mon;
                        if (($mon != $mon_tmp || $year != $year_tmp) && ($mon > 0 || $year > 0)) $output .= '</section>';
                        if ($year != $year_tmp || $mon != $mon_tmp) {
                            $year = $year_tmp;
                            $mon = $mon_tmp;
                            $output .= '<section><h3 class="archives-title">' . $year . '-' . $mon . '</h3>'; //输出年月
                        }
                        $output .= '<a href="' . $archives->permalink . '"><span class="time">' . date('m-d', $archives->created) . '</span>' . $archives->title . '<i>' . $archives->commentsNum . '</i></a>'; //输出文章日期和标题
                    endwhile;
                    $output .= '</section>';
                    $archives->permalink;
                    echo $output;
                    ?>
                </div>
            </div>


            <div id="sidebar" class="col-mb-3">
                <?php $this->need('sidebar.php'); ?>
            </div>
        </div>
    </main>
<?php $this->need('footer.php'); ?>