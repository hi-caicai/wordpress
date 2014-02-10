<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 9]>
<html class="html4">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no" />
<title><?php wp_title('-',true,'right'); ?></title>
<link rel="shortcut icon" href="/wp-content/themes/cola/images/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/cola/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/cola/css/font_icon.css" />
<?php if(is_mobile()): ?>
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/cola/css/style_mobile.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="/wp-content/themes/cola/js/functions_mobile.js"></script>
<?php else: ?>
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/cola/css/style_pc.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="/wp-content/themes/cola/js/jquery.blockUI.js"></script>
	<script src="/wp-content/themes/cola/js/functions.js"></script>
	<!--[if lt IE 9]>
	<script src="/wp-content/themes/cola/js/html5.js"></script>
	<![endif]-->
<?php endif; ?>
<?php wp_head(); ?>
</head>

<?php if(is_mobile()): ?>

<body>
<div id="preloader"></div>
<header id="masthead" class="header wrap clearfix">
    <h1 class="logo">
		<a href="/">Cola Chan</a>
	</h1>
	<a class="drop_menu" href="javascript:;"></a>
	<div class="search_bar">
		<a class="search_button" href="javascript:;"></a>
		<div class="search_form clearfix">
			<?php get_search_form(); ?>
		</div>
	</div>
</header>
<aside class="menu">
	<nav class="mainnav">
		<ul class="clearfix">
			<li class="category-life"><a href="/index.php/category/life">生活</a></li>
			<li class="category-translate"><a href="/index.php/category/translate">翻译</a></li>
			<li class="category-geek"><a href="/index.php/category/geek">极客</a></li>
			<li class="category-humor"><a href="/index.php/category/humor">幽默</a></li>
			<li class="category-food"><a href="/index.php/category/food">美食</a></li>
			<li class="category-photo"><a href="/index.php/category/photo">照片</a></li>
			<li class="category-media"><a href="/index.php/category/media">影音</a></li>
			<li class="category-book"><a href="/index.php/category/book">写作</a></li>
			<li class="category-dream"><a href="/index.php/category/dream">梦境</a></li>
		</ul>
	</nav>
	<nav class="pages">
		<a href="/index.php/categories">日志分类</a>
		<span>/</span>
		<a href="/index.php/movie">电影收藏</a>
		<span>/</span>
		<a href="/index.php/works">设计作品</a>
		<span>/</span>
		<a href="/index.php/about">关于我</a>
	</nav>
</aside>
<div class="container">

<?php else: ?>

<body <?php body_class(); ?>>
<header class="header wrap clearfix">
    <h1 class="logo">
		<a href="/">Cola Chan</a>
	</h1>
	<div class="info">
		<p>可乐橙的微信公众账号<br />每周日为你翻译一篇国外设计精选<br />点滴积累，人人都能成为设计师</p>
		<div class="follow clearfix">
			<a class="weibo" href="http://weibo.com/greenzorro" target="_blank" title="微博">微博</a>
			<a class="huaban" href="http://huaban.com/greenzorro/" target="_blank" title="花瓣">花瓣</a>
			<a class="douban" href="http://www.douban.com/people/greenzorro/" target="_blank" title="豆瓣">豆瓣</a>
		</div>
	</div>
</header>
<nav class="mainnav">
    <ul class="wrap clearfix">
        <li class="nav_home"><span><a href="/">首页</a><i></i></span></li>
        <li class="nav_archives"><span><a href="/index.php/categories">日志</a><i></i></span>
            <p>
                <span><a href="/index.php/category/life">生活</a><i></i></span>
				<span><a href="/index.php/category/translate">翻译</a><i></i></span>
				<span><a href="/index.php/category/geek">极客</a><i></i></span>
                <span><a href="/index.php/category/humor">幽默</a><i></i></span>
                <span><a href="/index.php/category/food">美食</a><i></i></span>
                <span><a href="/index.php/category/photo">照片</a><i></i></span>
                <span><a href="/index.php/category/media">影音</a><i></i></span>
                <span><a href="/index.php/category/book">写作</a><i></i></span>
                <span><a href="/index.php/category/dream">梦境</a><i></i></span>
            </p>
        </li>
        <li class="nav_movie"><span><a href="/index.php/movie">影评</a><i></i></span></li>
        <li class="nav_works"><span><a href="/index.php/works">作品</a><i></i></span></li>
        <li class="nav_about"><span><a href="/index.php/about">关于</a><i></i></span></li>
    </ul>
</nav>
<nav class="mainnav mainnav_fixed"></nav>
<div class="container wrap">

<?php endif; ?>