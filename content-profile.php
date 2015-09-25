<?php
/**
 * The template used for displaying page content
 *
 */
?>

<article id="post-<?php the_ID(); ?>">

	<div class="main-content profile-wrap">
		<div class="article-head text-center">
			<?php the_post_thumbnail(); ?>
			<h1><?php echo get_custom_value(my_name); ?></h1>
			<span><?php echo get_custom_value(function_title); ?></span>
		</div>

		<div class="article-body">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
