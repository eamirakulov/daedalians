<?php /* template name: Page with sidebar */ ?>
<?php get_header(); ?>
	<div class="container">
		<div class="banner">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide.png">
		</div>
	</div>
	<div class="container">
		<?php if(have_posts()): the_post(); ?>
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
			<div class="row">
				<?php get_sidebar(); ?>
				<div class="col-sm-9">
					<article class="page">
						<div class="entry_content">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>