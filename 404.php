<?php get_header(); ?>
<section class="light-grey-bx content">
	<div class="row">
		<div class="small-12 columns">
			<header id="page-id">
				<h1>Sorry, we couldn't find what you are looking for</h1>
				<?php get_template_part('library/includes/breadcrumbs'); ?>	
			</header>		
		</div>
	</div>	
</section>
<section class="content row">
	<?php get_sidebar(); ?>	
</section>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<article>
	<p><?php echo stripslashes(get_option('ranklab_404')); ?></p>
</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
