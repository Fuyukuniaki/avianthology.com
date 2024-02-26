<?php get_header(); ?>
<main class="l-main" id="pagetop">

	<?php
			if( have_posts() ) :
				while( have_posts() ) :
					the_post(); ?>

				<?php endwhile;
			else :
				?><p>表示する記事がありません</p><?php
			endif;
		?>


</main>
<?php get_footer(); ?>