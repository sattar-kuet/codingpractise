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

    <?php $categories = get_categories();
      $total_items = count($categories);
    
      $items_per_row = get_option( 'category_box_row' );
      $current_item = 0;
    foreach($categories as  $index => $category): 
      
      if($total_items < $items_per_row) {

        $items_per_row = $total_items;
      }

      $current_item++; 
      $col = 12/$items_per_row;

      $image_url = get_field('featured_image','category_'.$category->term_id);
      $btn_link = get_field('btn_link','category_'.$category->term_id);
      $btn_text = get_field('btn_text','category_'.$category->term_id);

      ?>

      <?php if($current_item % $items_per_row == 1 || ($current_item == 1 && $items_per_row == 1)): ?>
      <div class="gap"> </div>
      <div class="row">
      <?php endif; $class = ($current_item%2)? ' category': ' category'; ?>
        <div class="col-md-<?php echo $col;?>">
        <div class="card text-center <?php echo $class.'-box'; ?>">
          <a href="<?php echo esc_url($btn_link); ?>" title="<?php echo $category->name; ?>">
            <img class="rounded" src="<?php echo $image_url; ?>">
          </a>
          <h1>
            <a href="<?php echo esc_url( $btn_link ); ?>" title="<?php echo $category->name; ?>">
              <?php echo $category->name; ?> 
            </a>
          </h1>

          <p> <?php echo $category->category_description; ?></p>
          <a class="btn box-btn" href="<?php echo $btn_link;?>"><?php echo $btn_text; ?> </a>
         </div>
        </div>
      <?php if($current_item % $items_per_row == 0 || $current_item == count($categories) ):
        $current_item = 0;
        $total_items = $total_items - $items_per_row; ?>
      </div>
      <?php endif; ?>

    <?php endforeach;?>
    </div>

</div>
<?php get_footer(); ?>



