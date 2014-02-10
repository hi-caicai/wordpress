<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?php if(is_mobile()): ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title">
		<a class="title" href="<?php the_permalink(); ?>" rel="bookmark">
			<b><?php the_title(); ?></b>
			<?php if ( 'post' == get_post_type() ) : ?>
				<time><?php the_time('Y/n/j'); ?></time>
			<?php endif; ?>
		</a>
		<span class="cat-pic"><span>
	</h1>
	<div class="entry-content">
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<?php the_excerpt(); ?>
	<?php else : ?>
		<?php the_content( __( '', 'twentytwelve' ) ); ?>
	<?php endif; ?>
	</div><!-- .entry-content -->
	<?php if(!is_single()): ?>
	<footer class="entry-meta">
		<a href="<?php the_permalink(); ?>" rel="bookmark">+ 阅读全文</a>
	</footer><!-- #entry-meta -->
	<?php endif; ?>
	<div class="clear"></div>
</article><!-- #post -->

<?php else: ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="level level-1 clearfix">
			<div class="level level-2">
				<div class="level level-3">
					<a class="title" href="<?php the_permalink(); ?>" rel="bookmark">
						<b><?php the_title(); ?></b>
						<time><?php the_time('Y/n/j'); ?></time>
						<span class="cat-pic"><span>
					</a>
				</div>
				<span class="category-link"><?php the_category(', ') ?></span>
			</div>
			<span class="comments-link"><a href="<?php the_permalink(); ?>#comments" class="ds-thread-count" data-thread-key="<?php the_ID(); ?>">木有评论</a></span>
		</div>
	</header>
	<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<div class="edit">', '</div>' ); ?>
	<div class="clear"></div>
	<div class="entry-content">
		<?php the_content( __( '', 'twentytwelve' ) ); ?>
	</div><!-- .entry-content -->
	<?php if(is_single()): ?>
		<!-- Baidu Button BEGIN -->
		<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
		<a class="bds_tsina"></a>
		<a class="bds_qzone"></a>
		<a class="bds_douban"></a>
		<a class="bds_tqq"></a>
		<a class="bds_huaban"></a>
		<span class="bds_more"></span>
		<a class="shareCount"></a>
		</div>
		<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=2237305" ></script>
		<script type="text/javascript" id="bdshell_js"></script>
		<script type="text/javascript">
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
		</script>
		<!-- Baidu Button END -->
	<div class="clear"></div>
	<?php else: ?>
	<footer class="entry-meta">
		<a href="<?php the_permalink(); ?>" rel="bookmark">+ 阅读全文</a>
	</footer><!-- #entry-meta -->
	<?php endif; ?>

	<?php if(is_single()): ?>
	<div class="google_ins">
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-8712474033245863";
		/* sidebar */
		google_ad_slot = "6345202234";
		google_ad_width = 160;
		google_ad_height = 600;
		//-->
		</script>
		<script type="text/javascript"
		src="//pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</div>
	<?php endif; ?>

</article><!-- #post -->

<?php endif; ?>