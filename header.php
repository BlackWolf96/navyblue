<?php
    /**
     * @package WordPress
     * @subpackage NavyBlue
     * @version 1.0
     * 
     */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); wp_title('-', true, 'left');?></title>
</head>
<body >
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-navy-transparent p-4 fixed-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavyBlueMenu" aria-controls="NavyBlueMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="NavyBlueMenu">
            <?php
                $defaults = array(
                    'name' => 'NavyBlue',
                    'menu_id' => 'NB-Menu',
                    'container' => 'div',
                    'container_class' => 'navbar-nav mr-auto',
                    'container_id' => 'NB-Menu',
                    'menu_class' => 'navbar-nav ml-auto',
                    'link_class' => 'nav-link text-light text-uppercase'
                );
                wp_nav_menu($defaults);
            ?> 
        </div>
        <form class="d-flex" action="<?php home_url('/'); ?>" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
            <button class="btn btn-light " type="submit">Search</button>
        </form>
    </nav>
</header>
<div class="carousel slide carousel-fade" id="carouselNavyBlue" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselNavyBlue" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></buttom>
        <button type="button" data-bs-target="#carouselNavyBlue" data-bs-slide-to="1" aria-label="Slide 2"></buttom>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active"> 
            <img style="width:100%;" src="<?php echo get_template_directory_uri().'/images/x_slider.png';?>" alt="Complete here" /> 
        </div>
        <div class="carousel-item">
            <img style="width:100%;"src="<?php echo get_template_directory_uri().'/images/x_slider.png';?>" alt="Complete here" />
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">