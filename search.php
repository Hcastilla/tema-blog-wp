<?php get_header(); ?>


<section class="raised-box z-depth-3">
    <div id="all-post">
        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'content', get_post_format() );

                endwhile;
            else:
                ?>
                    <article class="row">
                        <div class="col m8 offset-m2 s12 center">
                            <h1>Pagina no encontrada</h1>
                        </div>
                    </article>
                <?php
                
            endif;

        ?>
    </div>
   
</section>


<?php get_footer(); ?>