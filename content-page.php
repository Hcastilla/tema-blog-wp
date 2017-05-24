<div class="row">
    <div class="col m8 offset-m2  s12">
        <article class="content-post">
            <?php the_content();?>
        </article>
    </div>
</div>

<div class="row">
    <div class="col s12 m8 offset-m2">
        <div class="or-spacer">  
            <div class="mask"></div>  
        </div>
    </div>
</div>

<div class="row">
    <div class="col m8 offset-m2  s12 ">
        <div class="author">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 'full'); ?>
            <div class="information">
                <h5><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h5>
                <p><?php the_author_meta('description'); ?></p>
            </div>
           
        </div>
    </div>
</div>