<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="single">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
        <a name="comments"></a>
        <a name="respond"></a>
		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>
</div>


<?php get_footer(); ?>