<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
	<div>
		<!-- <label class="screen-reader-text" for="s">Search for:</label> -->
		<!-- <input type="text" value="" name="s" id="s"> -->
		<input type="text" name="s" id="search" class="search-field alpha20" value="<?php the_search_query(); ?>" placeholder="Zoek hier recepten, kookboeken of restaurants..." />
		<input type="submit" id="searchsubmit" class="" value="&#xf002;">
	</div>
</form>