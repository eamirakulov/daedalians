<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); //* we need this for plugins
?>
	<meta name="viewport" content="width=device-width">
	<link href='https://fonts.googleapis.com/css?family=Ruda:400,700,900' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/f92389dd85.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scotchPanels.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel='stylesheet' type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css"></link>
</head>
	<?php
	genesis_markup( array(
		'html5'   => '<body %s>',
		'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
		'context' => 'body',
	) );

	?>
	<a href="#" class="toggle-panel visible-xs"><i class="fa fa-bars"></i></a>
	<div id="scotch-panel">
		<?php wp_nav_menu( array('container_class' => 'mobile-menu', 'theme_location' => 'primary', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
    </div> 
	<header>
		<div class="container">
			<div class="top-bar hidden-xs">
				<?php if ( ! dynamic_sidebar( 'header-right' ) ) : ?>
					<?php dynamic_sidebar( 'header-right' ); ?>
				<?php endif; ?>
			</div>

			<div class="row header-items">
				<div class="logo col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
				</div>

				<?php wp_nav_menu( array('container_class' => 'menu col-sm-6 hidden-xs', 'theme_location' => 'primary', 'items_wrap' => '<ul>%3$s</ul>' )); ?>

				<div class="logo2 col-sm-2 text-right hidden-xs">
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png"></a>
				</div>
			</div>
		</div>
	</header>
	<div class="main-wrapper">