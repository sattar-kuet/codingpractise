  <!-- Sidebar Holder -->
  <nav id="leftSidebar">
   <?php $cat = get_the_category( $id );
         $cat = $cat[0];
    ?>
    <h2 class="main_topic"><?php echo $cat->name; ?></h2>

    <?php
    wp_nav_menu([
     'menu'  => strtolower($cat->name),
     'container'       => 'ul',
     'container_class' => 'list-unstyled components',
     'menu_id'         => false,
     'menu_class'      => 'list-unstyled components'
   ]);
   ?>
 </nav>