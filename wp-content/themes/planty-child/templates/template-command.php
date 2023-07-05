<?php

/**
 * Template Name: Commander
 */
?>

<main id="primary" class="command-page<">

	<?php get_header(); ?>
	<div id="page" class="command-page">
		<section class="section-command-choice">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

			<?php endwhile;
			endif; ?>
		</section>
	</div>
	<?php get_footer(); ?>

</main><!-- #main -->