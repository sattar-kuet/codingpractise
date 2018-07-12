<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body>

  <header>
    <div class="container-fluid ">
      <div class="row w-100">
       <div class="col-sm-12">

        <nav class="navbar navbar-expand-lg navbar-light">
         <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
          <img id="logo_img" src="<?php echo $image[0]; ?>" /></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
          wp_nav_menu([
           'theme_location'  => 'top',
           'container'       => 'div',
           'container_id'    => 'navbarSupportedContent',
           'container_class' => 'collapse navbar-collapse',
           'menu_id'         => false,
           'menu_class'      => 'navbar-nav mr-auto',
           'depth'           => 2,
           'walker'          => new bs4navwalker()
         ]);
         ?>

           <?php  get_search_form(); ?>
       </nav>


     </div>
   </div>

   <div class="col-sm-12">
    <button type="button" id="leftSidebarCollapse" class="navbar-btn d-sm-block d-md-none">
     <span></span>
     <span></span>
     <span></span>
   </button>
 </div> 

</div>

</header>

<div class="wrapper">
