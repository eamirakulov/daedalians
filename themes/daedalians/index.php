<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<article class="page">
				<h2 class="entry_title">
					<a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
				</h2>

				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>