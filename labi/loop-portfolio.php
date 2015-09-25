<section class="portfolio-list">
	<?php 
		// Display all posts on homepage 
		if(is_front_page()){
			$args = array( 'post_type' => 'work', 'posts_per_page' => 4 );
		} else {
			$args = array( 'post_type' => 'work', 'posts_per_page' => -1 );
		}
		
		$portfolio_query = new WP_Query( $args);
		$counter = 1;
		if($portfolio_query->have_posts()) : while($portfolio_query->have_posts()) : $portfolio_query->the_post();
		
		$values = CFS()->get('choose_color');
		
		if(count($values)){
			foreach ($values as $value => $label) {
				$varColor = $value;
			}	
		} else {
			$varColor = "bg-red";
		}
		
		$image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id,'large', true);
		
		
	?>

		<?php
			if($counter % 2 ){
				$pull = '';
				$push = '';
				$oddeven = 'even';
				$arrow = "<i class='fa fa-long-arrow-right'></i>";
			} else {
				$pull = 'col-sm-pull-6';
				$push = 'col-sm-push-6';
				$oddeven = 'odd';
				$arrow = "<i class='fa fa-long-arrow-left'></i>";
			}	
		?>
		
		<div class="oddeven <?php echo $oddeven; ?>">
			<a href="<?php the_permalink(); ?>">
				<div class="conThumb col-xs-12 col-sm-6 <?php echo $push; ?>" style="background-image:url('<?php echo $image_url[0]; ?>'); background-size: cover;">
				<!-- <a href="<?php //the_permalink(); ?>"><?php //the_post_thumbnail(); ?></a> -->
				</div>
			</a>
			<div class="conContent col-xs-12 col-sm-6 <?php echo $pull; ?> <?php echo $varColor; ?>">
				<a href="<?php the_permalink(); ?>"><?php echo $arrow; ?></a>
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php the_excerpt(); ?>
				<div class="tags"><?php the_tags('', '  ','' ); ?></div>
			</div>
			<div class="clearfix"></div>		
		</div>
		<!-- end oddeven -->
		

	<?php 
			$counter++; 
		endwhile; 
	?>
		
		<?php 
			if(is_front_page()){ 
		?>
			<a class="more-btn col-xs-12" href="<?php echo get_permalink(8); ?>">
				<span>Bekijk meer</span>	
			</a>
		<?php 
			}
		?>	

		
	<?php 
		endif; 
	?>
	
</section>