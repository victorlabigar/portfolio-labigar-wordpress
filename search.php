<?php
/**
 * The template for displaying search results.
 *
 * Author: The Secret Lab
 * Author URI: http://thesecretlab.tv/
 *
 */ ?>

<?php get_header(); ?>


<!-- CUSTOMLOOP -->
<div class="overview-list-wrap container">
	<div class="inner-shell">
		<div class="row">
			
			<div class="col-xs-12 search-wrap">
				
				<?php if ( have_posts() ) : ?>
	      <!-- <h2>Zoekresultaten</h2> -->
	      <?php //get_search_form(); ?>
	      <h3 id="output">
				
				<?php printf( __( 'U zocht op: %s', '' ), '<span>' . get_search_query() . '</span>' ); ?>
	
				<?php 
					/* Search Count */
					$key = wp_specialchars($s, 1);
					$count = $wp_query->found_posts;
					_e('');
					_e('<span class="search-terms">'); ('</span>');
					_e(' &mdash; ');
					echo $count . ' ';
					_e('artikel(en)');
					//wp_reset_query(); 
					?>
				</h3>
				
				<ul class="overview-list">
	
	      <!-- Start the Loop -->
	  		<?php
	        $ctr = 1;
	        //while ( have_posts() ) : the_post();
	        while ( have_posts() ) : the_post();
	        //$exclude_search = get_custom_field('exclude_search');
	        if($exclude_search == 1){ 
	          /* SKIP */ 
	        }else{
	          ?>
	      			
	      			<li class="odd_even<?php echo $ctr%2 === 0 ? " even": ""; ?>" >
								<div class="row">
									<div class="col-xs-4">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('overviewlist-thumb', ''); ?>
										</a>
									</div>
									<div class="col-xs-8">
										<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
										<div class="rating">4,5 sterren - 5 stemmen</div>
										<span class="general-info time"><i class="fa fa-clock-o"></i><?php echo get_custom_value('cooking_time'); ?></span>
										<span class="general-info people"><i class="fa fa-users"></i><?php echo get_custom_value('amount_of_people'); ?></span>
										<?php //the_excerpt(); ?>
									</div>	
								</div> <!-- end row -->
							</li> <!-- end li -->
	      			
	      		<?php
	        }
	        $ctr++;
	        endwhile;
	      ?>
	      
				</ul>
	
	      <br />
				<?php kriesi_pagination($allsearch->max_num_pages); ?>
				
	  		<?php else : ?>
	        <h2>Helaas, niets gevonden.</h2>
	        <br />
	        <p>Probeer hieronder een andere zoekopdracht...</p>
	        <?php get_search_form(); ?>
	      <?php endif; ?>
				
			</div> <!-- end col-xs-12 -->
			
			
		</div> <!-- end row -->
	</div> <!-- end inner-shell -->
</div> <!-- end overview-list-wrap -->



<?php if( dynamic_sidebar('widget-area-one') ); ?>


<?php get_footer(); ?>