<?php

/*
Template Name: Classes
*/
get_header(); ?>

<main>
	<div class="row" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post();

		get_template_part( 'parts/loop', 'page-classes' );

		endwhile; endif;

		?>

	</div> <!-- end #mainrow -->
</main> <!-- end main -->

<?php get_footer(); ?>
