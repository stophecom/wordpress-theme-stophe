<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

