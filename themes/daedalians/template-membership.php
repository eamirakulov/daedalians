<?php /* template name: Membership  */ ?>
<?php get_header(); ?>

		<div class="container">
			<div class="banner">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide.png">
				<div class="text">
					<h1>Become a Member!</h1>
					<h2>Join our prestigious group of aviators today. The Daedalians are looking for qualified aviators to join us in our advocation for airpower!</h2>
					<a target="_blank" href="#" class="btn-more">learn more</a>
				</div>
			</div>

			<?php if(have_posts()): the_post(); ?>
				<article class="page">
					<div class="entry_content">
						<?php the_content(); ?>
						<h2 class="entry_title">
							<span>SHOP MERCHANDISE</span>
						</h2>

						<div class="row merchandise text-center">
							<div class="col-sm-4">
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jacket.png"></a>
							</div>
							<div class="col-sm-4">
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tie.png"></a>
							</div>
							<div class="col-sm-4">
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/chair.png"></a>
							</div>
						</div>

						<div class="row calendar text-center">
							<div class="col-sm-4">
								<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cal2.png"></a>
							</div>

							<div class="col-sm-8 links">
								<a href="#" class="btn-flat">shop gear</a>
								<a href="#" class="btn-flat">payments & dues</a>
								<a href="#" class="btn-flat">apollo login</a>
							</div>
						</div>

						<h2 class="entry_title">
							<span>Member Spotlight</span>
						</h2>

						<div class="row spotlight">
							<div class="col-sm-12">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spotlight.png">
							</div>
							<div class="col-sm-12">
								<h2>Maj. gen. franklin a. nichols</h2>
							</div>

							<div class="col-sm-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
							</div>
							<div class="col-sm-6">
								<p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</p>
							</div>
						</div>
						
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