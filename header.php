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
            content="茶,茶生活,茶旅行,茶具,红茶,大红袍,武夷山,云南,China Tea Tour,Da Hong Pao,Tikuanyin" />
        <meta name="description" 
            content="茶行特力就是一个卖茶叶的，只是有点特别。" />
        <meta name="viewport"
            content="width=device-width,initial-scale=1,maximum-scale=1" />
    
        <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/li@64x64.png');?>" type="image/png" />
        <link rel="icon" href="<?php $this->options->themeUrl('images/li@64x64.png');?>" type="image/x-icon"/>

        <link href="<?php $this->options->themeUrl('styles/reset.css'); ?>"
            rel="stylesheet" type="text/css" />
        <link href="<?php $this->options->themeUrl('styles/typo.min.css'); ?>"
            rel="stylesheet" type="text/css" />
        <link href="<?php $this->options->themeUrl('styles/font-awesome.min.css'); ?>"
            rel="stylesheet" type="text/css" />

	<style>body{display:none\0;*display:none;}/* I don't care IE9(and below) users. :-6 */<?php
	$css_file = dirname(__FILE__) . "/styles-min.css";
	if (file_exists($css_file)) {
	    echo file_get_contents($css_file);
	}
	?></style>
        <meta name="author" content="teaHacker" />
        <meta name="application-name" content="茶行特力" />
        <meta name="baidu-site-verification" content="fljtvNeuDT" /> <!-- 网站拥有者验证 -->
        <?php // $this->header(); ?>
    </head>
    <body class="bg">
        <header>
        <h1 id="logo"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title();?></a></h1>
        </header>


