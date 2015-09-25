<?php
/**
 * The template used for displaying page content
 *
 */
?>
<article id="post-<?php the_ID(); ?>">
	<?php the_title( '<h1>', '</h1>' ); ?>


	<div class="main-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	
	<hr class="bottom-line"></hr>
	
</article><!-- #post-## -->
