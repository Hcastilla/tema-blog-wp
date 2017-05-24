<?php get_header(); ?>

	<section class="raised-box z-depth-3">


		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content-page', get_post_format() );

			endwhile; endif; 
		?>

	</section>

<?php get_footer(); ?>