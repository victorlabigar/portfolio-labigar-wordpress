<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Author: StudioViq
 * Author URI: http://studioviq.nl/
 * 
 *
 * 
 *	
 *	
 */

 get_header(); ?>

<div class="container-fluid">
	
		<?php if(is_front_page() || is_page(8) ) { ?>
		
			<div id="primary" class="row inner-shell">
				<div id="content" class="col-xs-12">
					
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('content', 'page') ?>
					<?php endwhile; ?>
					
					<div class="spacer"></div>	
					
					
					<?php get_template_part('loop', 'portfolio') ?>
					
				</div>	
			</div> <!-- end row -->

		<?php  } else { ?>
		
			<div id="primary" class="row inner-shell">
				<div id="content" class="col-xs-12">
					
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('content', 'page') ?>
					<?php endwhile; ?>
					
					<div class="spacer"></div>
					
				</div>	
			</div> <!-- end row -->
		
		<?php } ?>	
	
</div> <!-- end page-main-wrapper -->	




<?php // if( dynamic_sidebar('widget-area-one') ); ?>


<?php get_footer(); ?>