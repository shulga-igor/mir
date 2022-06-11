<div class="defaultsearch">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr_e( 'Search', 'bariplan' ) ?>" title="<?php echo esc_attr_e( 'Search for:', 'bariplan' ) ?>" />
	<button  type="submit" class="icons">
		<i class="icofont-search-2"></i>
	</button>
	</form>
</div>

		
		
		