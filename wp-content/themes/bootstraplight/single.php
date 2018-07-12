<?php get_header(); ?>

<?php get_sidebar(); ?>
<div id="content">
	<div class="container"> 
<?php 
 the_post();
 the_content();
?>
	</div>

</div>
<?php get_footer(); ?>



