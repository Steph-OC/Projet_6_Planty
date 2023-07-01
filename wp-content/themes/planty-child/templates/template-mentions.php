<?php

/**
 * Template Name: Mentions légales
 */
?>
<main id="primary" class="site-main">

	<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

	<?php endwhile;
	endif; ?>

	<?php get_footer(); ?>

</main><!-- #main -->