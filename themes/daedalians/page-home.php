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

			<div class="three-blocks-mobile row visible-xs text-center">
				<a href="<?php bloginfo('url'); ?>/latest-news" class="col-xs-4">
					<h3>Become a member</h3>
				</a>
				
				<a href="<?php bloginfo('url'); ?>/airpower-forum" class="col-xs-4">
					<h3>Find a flight</h3>
				</a>
				
				<a href="<?php bloginfo('url'); ?>/awards" class="col-xs-4">
					<h3>News and blog</h3>
				</a>
			</div>

			<div class="three-blocks">
				<div class="col-sm-4 item hidden-xs">
					<div class="img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latest-news.png">
						<div class="text">
							<h3>latest<br>news</h3>
							<a href="<?php bloginfo('url'); ?>/latest-news" class="view">view</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/forum.png">
						<div class="text">
							<h3>Airpower<br>forum</h3>
							<a href="<?php bloginfo('url'); ?>/airpower-forum" class="view">view</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 item">
					<div class="img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/awards.png">
						<div class="text">
							<h3>NATIONAL & SERVICE<br>LEVEL AWARDS</h3>
							<a href="<?php bloginfo('url'); ?>/awards" class="view">view</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="second-slider hidden-xs">
			<div class="slider-2">
				<?php
					$args = array(
						'post_type' => 'slide',
						'cat' => 5
					);

					$slides2 = new WP_Query( $args );
					while ( $slides2->have_posts() ) : $slides2->the_post(); ?>
						<div class="item">
							<h1><?php echo get_field('headline'); ?></h1>
							<h2><?php echo get_field('description'); ?></h2>
							<a target="_blank" href="<?php echo get_field('link'); ?>" class="btn-more">learn more</a>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>

		<div class="container-2">
			<div class="three-blocks-2 row">
				<div class="col-sm-4 item calendar hidden-xs">
					<?php if ( ! dynamic_sidebar( 'primary-sidebar' ) ) : ?>
						<?php dynamic_sidebar( 'primary-sidebar' ); ?>
					<?php endif; ?>
				</div>
				<div class='col-sm-4 col-xs-6 item'>
					<div class="inner">
						<div class="img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/virtual-flight.png">
						</div>
						<div class="text">
							<h2>virtual flight</h2>
							<p class="pre">stay connected</p>
							<p>Not near a local flight, or in transition? Join our Virtual Flight for personal updates, issues and to have a voice... </p>
						</div>
					</div>
					<a href="<?php bloginfo('url'); ?>/virtual-flight" class="btn-more">read more</a>
				</div>
				<div class='col-sm-4 col-xs-6 item'>
					<div class="inner">
						<div class="img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/member-spotlight.png">
						</div>
						<div class="text">
							<h2>Member spotlight</h2>
							<p class="pre">Maj. gen. franklin a. nichols</p>
							<p>The guiding light of the 24th Flight for more than three decades, Maj. Gen. Nichols has a shining career including...</p>
						</div>
					</div>
					<a href="<?php bloginfo('url'); ?>/membership" class="btn-more">read more</a>
				</div>
			</div>

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