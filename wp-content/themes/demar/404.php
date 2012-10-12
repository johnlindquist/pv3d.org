<?php get_header(); ?>

	<div id="content">
	
		<div id="content-left">
	
			<div class="box-left">
			
				<h3>Not found!</h3>
				<p><?php _e('Sorry, no posts matched your criteria. Please view the sitemap below to find what you were looking for.'); ?></p>
				<?php echo ddsg_create_sitemap(); ?>
			
			<div class="clear"></div></div>
	
	  </div><!-- end content-left -->
	  
	  <?php get_sidebar(); ?>
	  
	  <div class="clear"></div>
	
</div><!-- end content -->
	
<?php get_footer(); ?>