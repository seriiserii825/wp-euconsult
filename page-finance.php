<?php
	/**
	 * Template Name: Finance
	 */
	get_header();
?>


<section class="rambursabile">
	<?php
		$ramb_bg_img_src = kama_thumb_src( 'w=1366 &h=939 &post_id=15' );
	?>
    <section class="rambursabile section-dark page-intro" style="background-image: url('<?php echo $ramb_bg_img_src; ?>'); background-position: center 20%; background-size: cover;">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title"><?php the_title(); ?></h2>
            </header>
			<?php
				$page_intro_text = carbon_get_post_meta( 15, 'crb_finance_page_text' . get_lang() );
			?>
            <p><?php echo $page_intro_text; ?></p>
        </div>
    </section>
    <section class="page-title page-title--rambursabile">
        <div class="page-title__container">
            <h2 class="section__title"><?php the_title(); ?></h2>
			<?php if ( have_posts() ): ?><?php the_post(); ?><?php the_content(); ?><?php else: ?><?php endif; ?>

        </div>
    </section>

	<?php
		$finance_gallery = new WP_Query( [
			'post_type'      => 'finance',
			'posts_per_page' => - 1,
			'order'          => 'ASC'
		] );
	?>

    <section class="finance-gallery section section-dark" id="js-finance-gallery" style="background-image: url('assets/i/section-bg.jpg')">
        <div class="finance-gallery-wrap">
			<?php if ( $finance_gallery->have_posts() ): ?><?php while ( $finance_gallery->have_posts() ): ?><?php $finance_gallery->the_post(); ?>
                <div class="finance-gallery__item">
                    <div class="finance-gallery__after"></div>
                    <div class="finance-gallery__content">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo carbon_get_the_post_meta( 'crb_idea_finance_page_img' ); ?>" alt="">
                        </a>
                        <h6>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> ></a>
                        </h6>
                    </div>
                </div>
			<?php endwhile; ?><?php else: ?><?php endif; ?>
        </div>
    </section>

	<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>
</section>

<?php get_footer(); ?>
