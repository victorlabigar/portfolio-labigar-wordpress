<section class="portfolio-list">
	<?php 
		// Display all posts on homepage 

		$counter = 1;
		
		while(have_posts()) : the_post();
		
			$values = CFS()->get('choose_color');
			
			if(count($values)){
				foreach ($values as $value => $label) {
					$varColor = $value;
				}	
			} else {
				$varColor = "bg-red";
			}
		
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
				<div class="conThumb col-xs-12 col-sm-6 <?php echo $push; ?>">
					<?php the_post_thumbnail(); ?>
				</div>
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
		wp_reset_query();
		//endif; 
	?>
</section>