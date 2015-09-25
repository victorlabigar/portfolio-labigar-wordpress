<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * 
 *
 */
get_header(); ?>
	
	
	<div id="primary" class="row inner-shell">
		<div id="content" class="col-xs-12">
			

			<?php get_template_part('content', 'tag')?>

			
			
			<?php get_template_part('loop', 'tag')?>
			
			
		</div>	
	</div> <!-- end row -->
	
	
<?php get_footer(); ?>