<?php get_header(); ?>
<section class="main">
	<ul class="portfolio clearfix">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<li id="post-<?php the_ID(); ?>">
					<div class="project-wrapper">
						<div class="project" title="<?php the_title_attribute(); ?>" data-toggle="modal" data-project-id="<?php the_ID(); ?>" data-project-link="<?php echo get_permalink(the_ID()); ?>">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('homepage-thumb');
							} ?>
							<div class="slide">
								<span class="category"><?php the_category(); ?></span>
								<h2 class="title"><?php the_title(); ?></h2>
								<div class="description"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
		<?php else : ?>
			<p>You got lost. Follow the white Rabbit. Yippeekayay.</p>
		<?php endif; ?>
	</ul>
	<div class="pagination clearfix">
		<div class="next" rel="tooltip" title="Go for more"><?php next_posts_link(__('<span class="arrow right"></span>')); ?></div>
		<div class="back" rel="tooltip" title="Back"><?php previous_posts_link(__('<span class="arrow left"></span>')); ?></div>
	</div>
</section>
<article class="modalContent"></article>

<?php get_footer(); ?>
