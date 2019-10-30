<?php
/**
 * Template Name: Idea
 */
get_header();
?>
<section class="idea-page">
	<?php
	$ramb_bg_img_src = kama_thumb_src('w=1905 &h=340 &post_id=21');
	?>
    <section class="section-dark page-intro page-idea"
             style="background-image: url('<?php echo $ramb_bg_img_src; ?>'); background-position: center 18%">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title">
					<?php the_title(); ?>
                </h2>
            </header>
			<?php if (have_posts()): ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php else: ?>
			<?php endif; ?>
        </div>
    </section>
    <div class="idea-page__content">
		<?php
		$idea_slider = new WP_Query([
			'post_type' => 'idea',
			'post_per_page' => -1
		]);
		?>
		
		<?php if ($idea_slider->have_posts()): ?>
			<?php while ($idea_slider->have_posts()): ?>
				<?php $idea_slider->the_post(); ?>
                <div class="idea__slide">
                    <div class="idea__slide-content">
                        <div class="idea__img">
                            <a href="<?php the_permalink(); ?>">
								<?php echo kama_thumb_img('w=502 &h=217'); ?>
                            </a>
                        </div>
                        <div class="idea__block">
                            <h5>
                                <a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
                                </a>
                            </h5>
                            <div class="idea__text">
                                <a href="<?php the_permalink(); ?>">
									<?php echo carbon_get_the_post_meta('crb_idea_first_line_link' . get_lang()); ?>
                                </a>
                                <p><?php echo carbon_get_the_post_meta('crb_idea_short_text'.get_lang()); ?>...</p>
                                <a class="read-more"
                                   href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option('crb_idea_button_read_more' . get_lang()); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<?php endif; ?>
    </div>
	<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>
</section>
<?php get_footer(); ?>
