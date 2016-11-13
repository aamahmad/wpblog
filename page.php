<!-- header-->
<?php get_header(); ?>

<div class="row">
	<div class="col-lg-9 col-md-3 col-sm-4">
	<!-- content-->
<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>	
	
	</div>
	<div class="col-lg-3 col-md-3 col-sm-4">
	<!-- sidebar -->	
	<?php get_sidebar();?>		
	
	</div>
</div>
</div>
<!-- footer -->	
<?php get_footer();?>