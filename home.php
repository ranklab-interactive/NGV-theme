<?php get_header(); ?>
<section id="page-id" class="light-grey-bx content">
	<div class="row">
		<div class="large-8 medium-10 medium-centered columns">
		<h1>Blog</h1>
		<?php get_template_part('library/includes/breadcrumbs'); ?>	
		</div>
	</div>	
</section>
<div class="row content">
<section role="main" class="large-8 medium-10 medium-centered columns">
	<?php if (have_posts()) : while  (have_posts()) : the_post(); ?>
	<article class="blog below-5">
		<?php
		if ( has_post_thumbnail() ) {?>
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large' );?></a>
		<?php } ?>
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>		
		<?php the_excerpt();?>
		<div class="postmeta">
			<?php the_time('F j, Y') ?>
		</div><!-- end meta -->
		<a href="<?php the_permalink();?>" class="alt-link">Keep Reading</a>
	</article><!-- end blog -->	

<?php endwhile; ranklab_pagination(); endif; ?>
</section>
</div>
<?php get_footer(); ?>