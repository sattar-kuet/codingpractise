</div>

<footer class="bg-secondary text-white">
	<!-- <div class="container ">
		<div class="row w-100" style="padding: 10px;">
			<div class="col-md-6">
				<div class="container"> 
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
					}
					?>
					<?php echo do_shortcode('[yotuwp type="channel" id="UCJ9dzxvAz3rBepr0KoPlkIQ" ]'); ?>
				</div>
				
			</div>
		
			<div class="col-md-6">
				<?php
				if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
				}
				?>	
			</div>

		</div>
	</div> -->

	<div class="bg-dark text-white text-center copyright-text">

		<?php 
		$copyright_text = get_option( 'copyright_text' );
		echo str_replace("#Y",date('Y'),$copyright_text);
		?> 

	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
