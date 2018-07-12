<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="content" class="home-container">

  <div class="container">

    <?php 
    $cat_id = get_query_var('cat'); 
    $content = get_field('detail_description','category_'.$cat_id);
    echo $content;
    ?>

  </div>
</div>
<?php get_footer(); ?>



