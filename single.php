<?php get_header(); ?>


<section class="raised-box z-depth-3 scrollme">
    <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part( 'content-post', get_post_format() );

        endwhile; endif; 
    ?>
     </div>
</section>


<?php get_footer(); ?>