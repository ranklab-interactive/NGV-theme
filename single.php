<?php get_header(); ?>
<section class="light-grey-bx content">
	<div class="row">
		<div class="small-12 columns">
			<header id="page-id">
				<h1><?php the_title(); ?></h1>
				<?php get_template_part('library/includes/breadcrumbs'); ?>	
			</header>		
		</div>
	</div>	
</section>
<section class="row content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<article role="main" class="large-9 columns">
	<!-- post details -->
	<div class="postmeta">
		<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
		<p class="comments"><?php comments_popup_link( __( 'Leave your thoughts' ), __( '1 Comment'), __( '% Comments' )); ?></p>
		<p class="tags"><?php the_tags( __( 'Tags: ' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></p>			
		<p class="categories"><?php _e( 'Categorised in: ' ); the_category(', '); // Separated by commas ?></p>
		<p class="author"><?php _e( 'This post was written by ' ); the_author(); ?></p>
	</div><!-- end postmeta -->
	<!-- /post details -->
	
	<!-- post thumbnail -->
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>
	<!-- end post thumbnail -->
	<?php the_content(); ?>	
</article>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>