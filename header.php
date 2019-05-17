<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php
		remove_action('wp_head', 'wp_generator');
		if ( is_singular() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_head(); 
	?>
</head>
<body <?php if(function_exists('body_class')) body_class(); ?>>
	<main>
		<div class="header">
			<div class="headerobject"></div>
		</div>
		<div class="nav">
			<label for="mobile-nav-toggle">Meny</label>
			<input type="checkbox" id="mobile-nav-toggle" aria-label="Visa meny" />
			<?php 
				echo theme_get_menu(array(
					'source' => theme_get_option('theme_menu_source'),
					'depth' => theme_get_option('theme_menu_depth'),
					'menu' => 'primary-menu',
					'class' => 'hmenu'	
				));
			?>
		</div>