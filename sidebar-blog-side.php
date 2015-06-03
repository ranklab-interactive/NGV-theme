<aside class="large-2 large-pull-10 columns">
	<!-- post details -->
	<div class="postmeta">
		<p class="date"><?php the_time('F j, Y'); ?></p>				
		<p class="categories"><?php _e( 'Categorised in: ' ); the_category(', '); // Separated by commas ?></p>
		<p class="author"><?php _e( 'This post was written by ' ); the_author(); ?></p>
		<p>Share links</p>
	</div><!-- end postmeta -->
	<!-- /post details -->
</aside>