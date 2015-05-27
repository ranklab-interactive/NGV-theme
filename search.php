<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<section class="light-grey-bx content">
			<div class="row">
				<div class="small-12 columns">
					<header id="page-id">
						<h1>Search results for: "<?php the_search_query(); ?>"</h1>
						<?php get_template_part('library/includes/breadcrumbs'); ?>	
					</header>		
				</div>
			</div>	
		</section>	
		<section class="row content">		
			<div class="large-9 columns">
				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>	

	<?php else : ?>

		<section class="light-grey-bx content">
			<div class="row">
				<div class="small-12 columns">
					<header id="page-id">
						<h1>No results found for: "<?php the_search_query(); ?>"</h1>
						<?php get_template_part('library/includes/breadcrumbs'); ?>	
					</header>		
				</div>
			</div>	
		</section>			
		<section class="row content">		
				

	<?php endif; ?>	
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
