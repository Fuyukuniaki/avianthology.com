<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'l-body js-body' ); ?>>
	<header id="top" class="l-header js-header">
		<a class="p-header">
			<h1 href="/#top" class="c-logo"></h1>
		</a>
		<button class="p-hamburger-menu"></button>
	</header>