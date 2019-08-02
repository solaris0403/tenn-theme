<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        <?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->_currentPage > 1) echo ' - 第 ' . $this->_currentPage . ' 页 '; ?>
    </title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/github-markdown.css'); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
    <link href="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>
<!--<a href="#"><i class="fa fa-step-backward" aria-hidden="true"></i></a>-->
<!--<a href="#"><i class="fa fa-play fa-1.5x" aria-hidden="true"></i></a>-->
<!--<a href="#"><i class="fa fa-pause" aria-hidden="true"></i> </a>-->
<!--<a href="#"><i class="fa fa-step-forward" aria-hidden="true"></i></a>-->
<!---->
<!---->
<div id="wrapper">
    <header id="site-header">
        <nav id="site-nav" class="site-menu text-center">
            <a <?php if ($this->is('index')): ?> class="current"<?php endif; ?>
                    href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()): ?>
                <a <?php if ($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>
                        href="<?php $pages->permalink(); ?>"
                        title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
        </nav>
    </header>

    
