<?php /* template name: Membership  */ ?>
<?php get_header(); ?>
		<div class="container">
			<div class="main-slider">
				<div class="slider">
					<?php
						$args = array(
							'post_type' => 'slide',
							'cat' => 4
						);

						$slides1 = new WP_Query( $args );
						while ( $slides1->have_posts() ) : $slides1->the_post(); ?>
							<div class="item">
								<div class="slide-img">
									<img src="<?php echo get_field('image'); ?>">
									<div class="slide-text text-center">
										<h1><?php echo get_field('headline'); ?></h1>
										<p><?php echo get_field('description'); ?></p>
										<a target="_blank" href="<?php echo get_field('link'); ?>" class="btn-more">Learn More</a>
									</div>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div>

			<?php if(have_posts()): the_post(); ?>
				<h2 class="entry_title">
					<span><?php the_title(); ?></span>
				</h2>
				<article class="page">
					<div class="entry_content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endif; ?>
			<div class="sign-up">
				<h2>Sign Up to get the Latest Updates</h2>
				<form class="form-inline">
					<div class="form-group">
						<input type="text" placeholder="Full Name">
					</div>
					<div class="form-group">
						<input type="text" placeholder="Email Address">
					</div>
					<button type="submit" class="btn-flat dark">SUBMIT</button>
				</form>
			</div>
		</div>
<?php get_footer(); ?>