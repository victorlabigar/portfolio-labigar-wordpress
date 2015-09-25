<?php 
	get_header();
	
	$next_post = get_next_post();
	$previous_post = get_previous_post();
?>


<div class="container-fluid portfolio-list">
	<div class="row inner-shell portfolio-detail">
		
			
		
		<?php 

			while ( have_posts() ) : the_post(); 
			
	
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
					$var = CFS()->get("choose_color");
				?>
				<ul class="pagination-links ">
					<li class="<?php echo $varColor; ?>">
						<a class="anchor-url" href="<?php echo get_permalink($next_post->ID); ?>"><i class="fa fa-long-arrow-left"></i></a>
					</li>
					<li class="<?php echo $varColor; ?>">
						<a class="anchor-url" href="<?php echo get_permalink(8); ?>"><i class="fa fa-th"></i></a>	
					</li>	
					<li class="<?php echo $varColor; ?>">
						<a class="anchor-url" href="<?php echo get_permalink($previous_post->ID); ?>"><i class="fa fa-long-arrow-right"></i></a>
					</li>
				</ul>	
				<div class="clearfix"></div>			

				
				<div class="conContent col-xs-12 <?php echo $varColor; ?>">

					<div class="col-xs-12">
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>	
					<div class="col-xs-12 col-sm-6">
						<?php the_content(); ?>
						<div class="tags"><?php the_tags('', '  ','' ); ?></div>	
					</div>
					<div class="desc-right col-xs-12 col-sm-6">
						<p><i class="fa fa-calendar-o"></i>Jaar: <?php echo get_custom_value(project_date); ?></p>
						<p><i class="fa fa-globe"></i><a class="weblink" href="<?php echo get_custom_value(web_link); ?>" target="_blank">Bekijk website</a></p>	
					</div>	
					<div class="clearfix"></div>	
				</div> <!-- end conContent -->
				
				
				<div class="clearfix"></div>
				<hr class="bottom-line"></hr>
				
				<div class="row">
					<div class="col-xs-12 text-center">

						<?php 
							$fields = CFS()->get('screenshot_loop');
							if($fields){
								foreach ($fields as $field) {
							    echo "<div class='wrapFields'> {$field['add_text']}";
							    echo "<img src='{$field['add_screenshot']}' /></div>";
							    echo "<hr class='bottom-line-2'></hr>";
								}	
							}
							
						?>
						
					</div>
				</div>
			
		<?php 
			endwhile; 
		?>
		
		
		
		
	</div> <!-- end .row -->	
</div> <!-- end .container-fluid -->


<?php get_footer(); ?>