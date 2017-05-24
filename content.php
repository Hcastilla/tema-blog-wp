
<?php $background = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>

<section class="row">	
	
	<article class="col m6 offset-m3">
		
		<img src="<?php echo $background; ?>" alt="" width="100%" class="z-depth-2">
		
		<h3 class="center">
			<a href="<?php the_permalink(); ?>" class="black-text">
				<?php the_title(); ?>
			</a>
		</h3>

		<span class="center">
				<?php the_excerpt(); ?>
		</span>

		<div class="center">
			<a href="<?php the_permalink(); ?>" class="readmore center red z-depth-1">Leer mas</a>	
		</div>

	</article>

</section>

<div class="row ">
	<div class="col s12  m8 offset-m2">
		<div class="or-spacer">  
			<div class="mask"></div>  
		</div>
		
	</div>
</div>