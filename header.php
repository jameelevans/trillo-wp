<?php
/**
 * The main header for my theme
 *
 * @package trillo
 */
?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
   
    <body>
		<div class="container">
			<header class="header">
			<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
							echo '<img class="logo" src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '">';
					} else {
							echo get_bloginfo( 'name' );
					}
				?>

				<form action="#" class="search">
					<input type="text" class="search__input" placeholder="Search hotels">
					<button class="search__button">
						<svg class="search__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-magnifying-glass"></use>
						</svg>
					</button>
				</form>

				<nav class="user-nav">
					<div class="user-nav__icon-box">
						<svg class="user-nav__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-bookmark"></use>
						</svg>
						<span class="user-nav__notification">7</span>
					</div>
					<div class="user-nav__icon-box">
						<svg class="user-nav__icon">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-chat"></use>
						</svg>
						<span class="user-nav__notification">13</span>
					</div>
					<div class="user-nav__user">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/user.jpg" alt="User photo" class="user-nav__user-photo">
						<span class="user-nav__user-name">Jameel</span>
					</div>
				</nav>
			</header>

			<div class="content">
				<nav class="sidebar">
					<ul class="side-nav">
						<li class="side-nav__item <?php if (is_front_page()) echo 'side-nav__item--active'; ?>">
							<a href="#" class="side-nav__link">
								<svg class="side-nav__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-home"></use>
								</svg>
								<span>Hotel</span>
							</a>
						</li>

						<li class="side-nav__item <?php if (is_page('flight')) echo 'side-nav__item--active'; ?>">
							<a href="#" class="side-nav__link">
								<svg class="side-nav__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-aircraft-take-off"></use>
								</svg>
								<span>Flight</span>
							</a>
						</li>

						<li class="side-nav__item <?php if (is_page('car-rental')) echo 'side-nav__item--active'; ?>">
							<a href="#" class="side-nav__link">
								<svg class="side-nav__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-key"></use>
								</svg>
								<span>Car Rental</span>
							</a>
						</li>

						<li class="side-nav__item <?php if (is_page('tours')) echo 'side-nav__item--active'; ?>">
							<a href="#" class="side-nav__link">
								<svg class="side-nav__icon">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sprite.svg#icon-map"></use>
								</svg>
								<span>Tours</span>
							</a>
						</li>
					</ul>

					<div class="sidebar__footer">
						<?php echo get_bloginfo('description') ?>
					</div>
				</nav>