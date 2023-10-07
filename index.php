<?php get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header>
<?php endif; ?>

<?php
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	
	twenty_twenty_one_the_posts_navigation();

} else {

	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
