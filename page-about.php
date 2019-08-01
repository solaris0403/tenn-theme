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
                关于页
            </div>
            <div id="sidebar" class="col-mb-3">
                <?php $this->need('sidebar.php'); ?>
            </div>
        </div>
    </main>
<?php $this->need('footer.php'); ?>