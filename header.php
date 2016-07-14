<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title> <?php bloginfo('name'); wp_title(); ?> </title>

		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>

	<body>
		<div class="header">
			<a href="<?php echo esc_url( home_url() ); ?>" class="logo"><?php bloginfo('name'); ?></a>
			<input class="menu-btn" type="checkbox" id="menu-btn" />
			<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
			
			<ul class="menu">
				<?php 
				wp_list_categories( array(
					'order_by' => 'name',
					'title_li' => '',
					'hide_empty' => 1,
					'order_by' => 'name',
					'order' => 'ASC'
					));
				wp_list_pages( array(
					'title_li' => '',
					'order_by' => 'name',
					'order' => 'ASC'
					));
				?>
			</ul>
		</div>