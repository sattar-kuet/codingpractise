<?php get_header(); ?>

<?php //get_sidebar(); ?>
<div id="content" class="home-container">

  <div class="container" id="main-desc">
  <?php 
  the_post();
  the_content();
  ?>
</div>

<div class="container">

  <?php $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
  ) );

  ?>

  <?php foreach($categories as $category): 
    $image_url = get_option('z_taxonomy_image'.$category->term_id);

    $category_link = get_category_link( $category->cat_ID );
    ?>

    <div class="row align-items-center">
      <div class="col-6 mx-auto col-md-6 order-md-2">
        <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category->name; ?>">

          <img class="img-fluid mb-3 mb-md-0" src="<?php echo $image_url; ?>" alt="" width="1024" height="860">
        </a>
      </div>
      <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
        <h1 class="mb-3 bd-text-green-dark">
          <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category->name; ?>">
            <?php echo $category->name; ?> 
          </a>
        </h1>

        <p> <?php echo $category->category_description; ?></p>

        <div class="d-flex flex-column flex-md-row lead mb-3">
          <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-lg btn-outline-primary" >View Detail</a>
        </div>

      </div>
    </div>
    <hr>
  <?php endforeach;?>





</div>
</div>
<?php get_footer(); ?>



