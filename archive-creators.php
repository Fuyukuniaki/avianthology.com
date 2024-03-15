<?php $term = get_queried_object(); ?>
<dl class="p-author-list__lists">
	<dt class="c-author-list__lists--title" id="illustration">イラスト</dt>
	<dd class="c-author-list__lists--wrap">
		<ul class="c-author-list__lists--member">
			<?php $args = array(
				'post_type' => 'creators',
				'variations' => 'illust',
				'posts_per_page' => -1,
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post ); ?>
			<?php if ( is_object_in_term('variations', 'illust' ) ): ?>
			<li class="c-author-list__lists--list">
				<ul class="c-author-list__name--wrap">
					<li class="c-author-list__name">
						<?php the_field('creator_name'); ?>
					</li>
					<li class="c-author-list__image"><figure class="c-author-list__sample"><img class="c-author-list__sample--image" src="
						<?php
						$custom_field = get_field('sample_image');
						if($custom_field) {
							echo $custom_field;
						} else {
							echo 'https://avianthology.com/wp-content/themes/avianthology.com/assets/images/sample-comingsoon.png';
						} ?>" decoding="async"></figure></li>
					<li class="c-author-list__color">
						<?php the_field('creation_name'); ?>
					</li>
					<li class="c-author-list__sns">
						<?php
						$custom_field = get_field('sns');
							if(false !== strpos($custom_field, 'pixiv')){
								echo '<a class="c-author-list__sns--link c-sns-link--pixiv" target="_blank" rel="noopener noreferrer" href="'. $custom_field . '">Pixiv</a>';
							} else {
								echo '<a class="c-author-list__sns--link c-sns-link--twitter" target="_blank" rel="noopener noreferrer" href="' . $custom_field .'">Pixiv</a>';
							}
						?>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			<?php endforeach;
				wp_reset_postdata(); ?>
		</ul>
		<button href="#illustration" class="c-button__accordion-close">閉じる</button>
	</dd>
	<dt class="c-author-list__lists--title" id="manga">漫画</dt>
	<dd class="c-author-list__lists--wrap">
		<ul class="c-author-list__lists--member">
			<?php $args = array(
				'post_type' => 'creators',
				'variations' => 'manga',
				'posts_per_page' => -1,
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post ); ?>
			<li class="c-author-list__lists--list">
				<ul class="c-author-list__name--wrap">
					<li class="c-author-list__name">
						<?php the_field('creator_name'); ?>
					</li>
					<li class="c-author-list__image"><figure class="c-author-list__sample"><img class="c-author-list__sample--image" src="
						<?php
							$custom_field = get_field('sample_image');
							if($custom_field) {
								echo $custom_field;
							} else {
								echo 'https://avianthology.com/wp-content/themes/avianthology.com/assets/images/sample-comingsoon.png';
							} ?>" decoding="async"></figure></li>
					<li class="c-author-list__color">
						<?php
							$custom_field = get_field('creation_name');
							if($custom_field){
								echo $custom_field;
							} else {
								echo '&nbsp;';
							}
						?>
					</li>
					<li class="c-author-list__sns">
						<?php
							$custom_field = get_field('sns');
							if(false !== strpos($custom_field, 'pixiv')){
								echo '<a class="c-author-list__sns--link c-sns-link--pixiv" target="_blank" rel="noopener noreferrer" href="'. $custom_field . '">Pixiv</a>';
							} else {
								echo '<a class="c-author-list__sns--link c-sns-link--twitter" target="_blank" rel="noopener noreferrer" href="' . $custom_field .'">Pixiv</a>';
							}
						?>
					</li>
				</ul>
			</li>
			<?php endforeach;
				wp_reset_postdata(); ?>
		</ul>
		<button href="#manga" class="c-button__accordion-close">閉じる</button>
	</dd>
	<dt class="c-author-list__lists--title" id="novel">小説</dt>
	<dd class="c-author-list__lists--wrap">
	<ul class="c-author-list__lists--member">
			<?php $args = array(
				'post_type' => 'creators',
				'variations' => 'novel',
				'posts_per_page' => -1,
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post ); ?>
			<li class="c-author-list__lists--list">
				<ul class="c-author-list__name--wrap">
					<li class="c-author-list__name">
						<?php the_field('creator_name'); ?>
						<span class="c-author-list__color"><?php
							$custom_field = get_field('creation_name');
							if($custom_field){
								echo $custom_field;
							} else {
								echo '&nbsp;';
							}
						?></span>
					</li>
					<li class="c-author-list__image"><figure class="c-author-list__sample"><img class="c-author-list__sample--image" src="
						<?php
							$custom_field = get_field('sample_image');
							if($custom_field) {
								echo $custom_field;
							} else {
								echo 'https://avianthology.com/wp-content/themes/avianthology.com/assets/images/sample-comingsoon.png';
							} ?>" decoding="async"></figure></li>
					<li class="c-author-list__sns">
						<?php
							$custom_field = get_field('sns');
							if(false !== strpos($custom_field, 'pixiv')){
								echo '<a class="c-author-list__sns--link c-sns-link--pixiv" target="_blank" rel="noopener noreferrer" href="'. $custom_field . '">Pixiv</a>';
							} else {
								echo '<a class="c-author-list__sns--link c-sns-link--twitter" target="_blank" rel="noopener noreferrer" href="' . $custom_field .'">Pixiv</a>';
							}
						?>
					</li>
				</ul>
			</li>
			<?php endforeach;
				wp_reset_postdata(); ?>
		</ul>
		<button href="#novel" class="c-button__accordion-close">閉じる</button>
	</dd>
	<dt class="c-author-list__lists--title" id="photo">写真</dt>
	<dd class="c-author-list__lists--wrap">
		<ul class="c-author-list__lists--member">
			<?php $args = array(
				'post_type' => 'creators',
				'variations' => 'photo',
				'posts_per_page' => -1,
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post ); ?>
			<li class="c-author-list__lists--list">
				<ul class="c-author-list__name--wrap">
					<li class="c-author-list__name">
						<?php the_field('creator_name'); ?>
					</li>
					<li class="c-author-list__image"><figure class="c-author-list__sample"><img class="c-author-list__sample--image" src="
						<?php
							$custom_field = get_field('sample_image');
							if($custom_field) {
								echo $custom_field;
							} else {
								echo 'https://avianthology.com/wp-content/themes/avianthology.com/assets/images/sample-comingsoon.png';
							} ?>" decoding="async"></figure></li>
					<li class="c-author-list__color">
						<?php the_field('creation_name'); ?>
					</li>
					<li class="c-author-list__sns">
						<?php
							$custom_field = get_field('sns');
							if(false !== strpos($custom_field, 'pixiv')){
								echo '<a class="c-author-list__sns--link c-sns-link--pixiv" target="_blank" rel="noopener noreferrer" href="'. $custom_field . '">Pixiv</a>';
							} else {
								echo '<a class="c-author-list__sns--link c-sns-link--twitter" target="_blank" rel="noopener noreferrer" href="' . $custom_field .'">Pixiv</a>';
							}
						?>
					</li>
				</ul>
			</li>
			<?php endforeach;
				wp_reset_postdata(); ?>
		</ul>
		<button href="#photo" class="c-button__accordion-close">閉じる</button>
	</dd>
</dl>