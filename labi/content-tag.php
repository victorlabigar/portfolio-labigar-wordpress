<?php
/**
 * The template used for displaying page content
 *
 */
?>
<article id="post">
	<h1>Tag: <?php printf( single_tag_title( '', false ) ); ?></h1>

	<div class="main-content">
		<span>
		<?php 
			if($wp_query->found_posts == 1) {
				echo '<p>'. $wp_query->found_posts.' project</p>';
			} else {
				echo '<p>'. $wp_query->found_posts.' projecten</p>';
			}
		?>
		</span>
	</div><!-- .entry-content -->
	
	<hr class="bottom-line"></hr>
</article><!-- #post-## -->

<div class="spacer"></div>	
