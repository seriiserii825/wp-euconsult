<?php
/**
 * Template Name: Page Romania
 */
get_header();
?>
<?php if (have_posts()): ?>
	<?php the_post(); ?>
    <div class="finance-country">
		<?php $ramb_bg_img_src = kama_thumb_src('w=1905 &h=940 &post_id=15'); ?>
        <section class="our-services-intro section-dark page-intro finance-country"
                 style="background-image: url('<?php echo $ramb_bg_img_src; ?>'); background-position: center top">
            <div class="page-intro__container">
                <header class="section__header section__header--center">
                    <h2 class="section__title"><?php the_title(); ?></h2>
                </header>
				<?php the_content(); ?>
            </div>
        </section>
        <section class="page-title">
            <div class="page-title__container">
                <h2 class="section__title"><?php echo carbon_get_the_post_meta('crb_page_finance_subtitle' . get_lang()); ?></h2>
            </div>
        </section>
        <section class="our-services">
			<?php
			$finance_romania = new WP_Query([
				'post_type' => 'finance_romania',
				'posts_per_page' => -1
			]);
			?>
			<?php if($finance_romania->have_posts()): ?>
				<?php $i = 1; while($finance_romania->have_posts()): ?>
					<?php $finance_romania->the_post(); ?>
                    <div id="js-romania-<?php echo $i; ?>" class="our-services__item <?php if($i % 2 !== 0) echo 'our-services__item--dark'; ?>">
                        <div class="our-services__container">
                            <div class="our-services__content">
                                <header class="our-sevices__header">
                                    <h3 class="our-services__title"><?php the_title(); ?></h3>
                                    <p><?php echo carbon_get_the_post_meta('crb_finance_modova_text'.get_lang()); ?></p>
                                </header>
								<?php the_content(); ?>
                            </div>
                        </div>
                    </div>
					<?php $i++; endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else: ?>
			<?php endif; ?>

        </section>
    </div>
    <!--    --><?php //require_once __DIR__.'/template-parts/connect-now.php';?>
<?php else: ?>
<?php endif; ?>
<?php get_footer(); ?>
