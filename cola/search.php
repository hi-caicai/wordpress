<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="list">

	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php par_pagenavi(4); ?>
	<?php else : ?>
		<article id="post-0" class="post no-results not-found clearfix">
			<h1>Oh no!</h1>
			<p>嗯……没找到，你要的这都什么东西啊，我这可没有。 →_→</p>
		</article><!-- #post-0 -->
	<?php endif; ?>
</div><!-- .list -->

<?php get_footer(); ?>