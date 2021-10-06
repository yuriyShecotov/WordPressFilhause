<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Filhause
 */
	$logo_header = get_field('logo_header', 'options');
	$icon_header = get_field('icon_header', 'options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?> ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<html>
<body>
	<div class="container">
		<!-- Header -->
		<header class="container__contactsheader contacts">
			<div class="contacts__logo">
				<a rel="stylesheet" href="/"><img src="<?php echo $logo_header['logo_icon']['sizes']['medium']; ?>" alt="FilHause"></a>
			</div>
			<div class="contacts__link">
				<div class="contacts__socialnetwork socialnetwork">
					<a rel="stylesheet" href="<?php echo $icon_header['telegrams']['telegram_link'] ?>">
						<img src="<?php echo $icon_header['telegrams']['telegram_icon']['sizes']['medium']; ?>" alt="">
					</a>
					<a rel="stylesheet" href="<?php echo $icon['whatsapps']['whatsapps_link'] ?>">
						<img src="<?php echo $icon_header['whatsapps']['whatsapp_icon']['sizes']['medium']; ?>" alt="">
					</a>
					<a rel="stylesheet" href="<?php echo $icon['instagrams']['instagram_link'] ?>">
						<img src="<?php echo $icon_header['instagrams']['telegram_icon']['sizes']['medium']; ?>" alt="">
					</a>
				</div>
				<div class="contacts__phone phone">
					<a href="tel:<?php echo $icon_header['phone']['phone']; ?>">
						<img src="<?php echo $icon_header['phone']['icon']['sizes']['medium']; ?>" alt="">
						<span><?php echo $icon_header['phone']['phone']; ?></span>
					</a>
				</div>
			</div>
		</header>
		