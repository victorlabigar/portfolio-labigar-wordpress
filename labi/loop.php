<?php if(have_posts() ) : while(have_posts() ) : the_post(){ ?>
	<!-- the loop -->
<?php } endwhile; else { ?>
	<!-- nothing has been found -->
<?php endif; ?>