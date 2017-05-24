<?php
if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) {
        ob_start( "ob_gzhandler" );
}
else {
        ob_start();
}
?>

 <?php 
    
        /* Variables para cuando es home o post */

        $title = '';
        $background = '';
        $description = '';
	$class = '';

        if(is_home() || is_search()){
            $title = get_bloginfo( 'name' );
            $description = get_bloginfo( 'description' );
            $background = get_background_image();
	    $class = 'big-title';
        }else{
            $title = get_the_title();
            $background = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
            
            if(empty($title)){
                $title = get_bloginfo( 'name' );
            }
            if(empty($background)){
                $background = get_background_image();
            }
        }
    ?>



<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="tecnologia, technology, programming, programacion, tutoriales, tutorials, <?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ', '; }}; ?>">
    <meta name="author" content="Srcode.co">
    <meta property="og:image" content="<?php echo $background; ?>"/>
    
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/bigote.png" />
    
    <title>
        <?php 
            if(is_home()){
                echo get_bloginfo( 'name' ) ." | ". get_bloginfo( 'description' );
            }else{
                echo "Srcode - ".get_the_title();
            }
        ?>
        <?php  ?> 
    </title>
    
    <?php wp_head(); ?>
</head>
<body class="grey lighten-1">

    <div class="navbar-fixed">
        <nav class="">
            <div class="nav-wrapper">
                <div class="left">
                    <div class="search">
                        <i class="material-icons">search</i>   
                    </div>
                </div>
                <div class="right">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'menu_principal'
                        ));
                    ?>
                </div>

            </div>

            <div class="search-box white z-depth-2">
                <i class="material-icons red-text close">
                    close
                </i>

                <form action="<?php home_url();?>" method="GET">
                    <input type="text"   name="s" id="search-box-input">
                </form>
            </div>
        </nav>
    </div>

 	<div class="full-image"></div>
    <header style="background-image:url(<?php echo $background;?>)" itemscope itemtype="http://schema.org/Article">
        <section class="content" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <h1  itemprop="bestRating" class="<?php echo $class;?>"><?php echo $title ?></h1>
            <h3><?php echo $description ?></h3>
            <?php echo get_the_excerpt();?>
        </section>
    </header>




