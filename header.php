<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8" />
        <meta -equiv="X-UA-Compatible" content="chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
	<meta http-equiv="Content-Security-Policy" content="block-all-mixed-content" />
        <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <meta name="keywords" 
            content="php,linux,javascript,android,gracecode,vim,tracker,blog,feelinglucky,明城,博客,生活,编程,代码,程序员" />
        <meta name="description" 
            content="" />
        <meta name="viewport"
            content="width=device-width,initial-scale=1,maximum-scale=1" />
    
        <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/wu@64x64.png');?>" type="image/png" />
        <link rel="icon" href="<?php $this->options->themeUrl('images/wu@64x64.png');?>" type="image/x-icon"/>

        <link href="<?php $this->options->themeUrl('styles/reset.css'); ?>"
            rel="stylesheet" type="text/css" />
        <link href="<?php $this->options->themeUrl('styles/typo.min.css'); ?>"
            rel="stylesheet" type="text/css" />
        <link href="<?php $this->options->themeUrl('styles/font-awesome.min.css'); ?>"
            rel="stylesheet" type="text/css" />

	<?php /*
        <link href="//cdn.staticfile.org/meyer-reset/2.0/reset.css"
            rel="stylesheet" type="text/css" />
        <link href="//cdn.staticfile.org/typo.css/1.1/typo.min.css"
            rel="stylesheet" type="text/css" />
        <link href="//cdn.staticfile.org/font-awesome/3.2.1/css/font-awesome.min.css"
            rel="stylesheet" type="text/css" />
	*/ ?>

	<style>body{display:none\0;*display:none;}/* I don't care IE9(and below) users. :-6 */<?php
	$css_file = dirname(__FILE__) . "/styles-min.css";
	if (file_exists($css_file)) {
	    echo file_get_contents($css_file);
	}
	?></style>
        <?php /*
        <link rel="stylesheet" href="<?php $this->options->themeUrl('styles-min.css'); ?>">
        <link href="//fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet/less" type="text/css" href="<?php $this->options->themeUrl('styles.less'); ?>" />
        <script src="//cdn.staticfile.org/less.js/1.6.1/less.min.js"></script>
        <link href="//rss.gracecode.com" rel="alternate" title="RSS" type="application/rss+xml" />
        <link href="//www.gracecode.com/rss.xml" rel="alternate" title="RSS" type="application/rss+xml" />
	*/ ?>
        <meta name="author" content="明城" />
        <meta name="application-name" content="無標題文檔" />
        <meta name="verify-v1" content="4BJs16VTJDDsu9Ngl8AOdXkxG0MgCB92r/CgcHOROpA=" />
        <?php // $this->header(); ?>
    </head>
    <body class="bg">
        <header>
        <h1 id="logo"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title();?></a></h1>
        </header>


