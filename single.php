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
<article role="main" class="large-10 large-push-2 medium-10 medium-centered large-uncentered columns">	
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
<?php get_sidebar('blog-side'); ?>
</section>
<?php get_footer(); ?>