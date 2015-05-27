<?php
/*
Template Name: Full
*/
?>
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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<article class="row">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	}
	?>
	<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
</div> <!-- #main -->
<?php get_footer(); ?>