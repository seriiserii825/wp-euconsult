<?php
$term = get_term($term_id);
$term_name = $term->name;
$term_slug = $term->slug;
?>
<li>
    <a href="<?php echo get_term_link((int)$term_id, 'category_video'); ?>">
		<?php echo $term_name; ?>
    </a>
	<?php $sublist_video = new WP_Query([
		'post_type' => 'video',
		'category_video' => $term_slug,
		'posts_per_page' => -1
	]); ?>
    <ul class="sublist">
		<?php if ($sublist_video->have_posts()): ?>
			<?php while ($sublist_video->have_posts()): ?>
				<?php $sublist_video->the_post(); ?>
				<?php $aux = carbon_get_the_post_meta('crb_video_aux'); ?>
                <li>
					<?php
					$classAux = '';
					if ($aux == 2) {
						$classAux = 'class="aux"';
					}
					?>
                    <a <?php echo $classAux; ?> href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<?php endif; ?>
    </ul>
</li>