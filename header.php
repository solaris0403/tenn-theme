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
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/uikit.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/github-markdown.css'); ?>">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
    <link href="https://cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <?php $this->header(); ?>
</head>
<body>
<div id="wrapper">
    <header id="site-header" uk-sticky>
        <nav id="site-nav" class="uk-navbar">
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li <?php if ($this->is('index')): ?> class="uk-active" <?php endif; ?> ><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <li <?php if ($this->is('page', $pages->slug)): ?> class="uk-active" <?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </nav>
    </header>
    <main id="site-main">
        <div id="site-body" class="uk-grid uk-child-width-expand uk-text-center">
    
