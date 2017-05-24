<div class="row" itemscope itemtype="http://schema.org/Article">
    <div class="col m8 offset-m2  s12"  itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" >
        <article class="content-post" itemprop="bestRating">
            <?php the_content();?>
        </article>
    </div>
</div>

<div class="row">
     <div class="col m8 offset-m2  s12 ">
        
        <div class="tags" itemscope itemtype="http://schema.org/Article">
            <div>
                <?php the_tags(); ?>
            </div>
            <div class="black-text" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <br>
               <span itemprop="datePublished" content="2017-05-01" itemprop="bestRating"><?php the_date();?></span> 
            </div>
        </div>

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
        <div class="author"  itemprop="author" itemscope itemtype="http://schema.org/Person">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 'full'); ?>
            <div class="information">
                <h5><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h5>
                <p><?php the_author_meta('description'); ?></p>
            </div>
           
        </div>
    </div>
</div>