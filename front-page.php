<?php get_header(); ?>
<div class="index-intro fullscreen-bg" id="js-index-intro">
    <div class="overlay"></div>
    <div class="index-intro-content">
        <!--        blocks/index-intro-->
        <h1><?php echo carbon_get_theme_option( 'crb_intro_index_title' . get_lang() ); ?></h1>
        <p><?php echo carbon_get_theme_option( 'crb_intro_index_text' . get_lang() ); ?></p>
        <div class="index-intro-content__buttons">
            <!--            blocks/buttons-->
            <a class="btn accent" href="<?php echo get_page_link( 9 ); ?>">
				<?php echo carbon_get_theme_option( 'crb_btn_about' . get_lang() ); ?>
            </a>
            <a class="btn" href="<?php echo get_page_link( 12 ); ?>"><?php echo carbon_get_theme_option( 'crb_btn_services' . get_lang() ); ?></a>
        </div>
    </div>
    <div class="index-intro-contacts">
        <div class="index-intro-contacts-wrap">
			<?php
				$address     = carbon_get_theme_option( 'crb_address' . get_lang() );
				$phone       = carbon_get_theme_option( 'crb_phone' );
				$phone_clear = clear_phone( $phone );
				$gmail       = carbon_get_theme_option( 'crb_gmail' );
				$facebook    = carbon_get_theme_option( 'crb_facebook' );
			?>
            <ul class="index-intro-contacts__list">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/map-in-marked.svg">
                    <a href="#"><?php echo $address; ?></a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/phone-symbol-of-an-auricular-inside-a-circle.svg">
                    <a href="tel:<?php echo $phone_clear; ?>"><?php echo $phone; ?></a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/mail.svg">
                    <a href="mailto:<?php echo $gmail; ?>"><?php echo $gmail; ?></a>
                </li>
                <li>
                    <a href="<?php echo $facebook; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/facebook-logo.svg">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <video class="fullscreen-bg__video" loop="" muted="" autoplay="" poster="<?php echo get_template_directory_uri(); ?>/assets/i/intro-video.jpg">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/intro-video.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/intro-video.webm" type="video/webm">
    </video>
</div>
<?php $finance_block = new WP_Query( 'page_id=15' ); ?>

<?php if ( $finance_block->have_posts() ): ?><?php $finance_block->the_post(); ?>
    <section class="section reimbursabile" id="js-reimbursabile">
        <div class="reimbursabile-wrap">
            <header class="section__header">
                <h2 class="section__title"><?php the_title(); ?></h2>
            </header>
            <div class="reimbursabile__content"><?php the_content(); ?></div>
            <div class="btn"><?php echo carbon_get_theme_option( 'crb_btn_services' . get_lang() ); ?></div>
        </div>
    </section>
<?php else: ?><?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
	$finance_gallery = new WP_Query( [
		'post_type'      => 'finance',
		'posts_per_page' => 6,
		'order'          => 'ASC'
	] );

?>

<?php if ( $finance_gallery->have_posts() ): ?>
    <section class="finance-gallery section section-dark" id="js-finance-gallery" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/section-bg.jpg')">
        <div class="finance-gallery-wrap">
			<?php while ( $finance_gallery->have_posts() ): ?><?php $finance_gallery->the_post(); ?>
                <div class="finance-gallery__item">
                    <div class="finance-gallery__after"></div>
                    <div class="finance-gallery__content">
                        <a href="<?php the_permalink(); ?>">
<!--							--><?php //echo kama_thumb_img( 'w=309 &h=210' ); ?>
<!--							--><?php //echo kama_thumb_img( 'w=618 &h=420' ); ?>
	                        <?php echo kama_thumb_img( 'w=927 &h=630' ); ?>
                        </a>
                        <h6>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> ></a>
                        </h6>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </section>
<?php else: ?><?php endif; ?>

<section class="history section" id="js-history">
    <div class="history-wrap">
		<?php $history_title = new WP_Query( [ 'page_id' => 18 ] ); ?>
        <header class="section__header section__header--center">
			<?php if ( $history_title->have_posts() ): ?><?php $history_title->the_post(); ?>
                <h2 class="section__title"><?php the_title(); ?></h2>
			<?php else: ?><?php endif; ?>
        </header>
        <div class="history__slider-wrap">
            <div class="history__buttons">
                <div class="history-arrow history-arow--left">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 39 11" enable-background="new 0 0 39 11">
                        <polygon points="33.5,0 32.8,0.7 37.1,5 0,5 0,6 37.1,6 32.8,10.3 33.5,11 39,5.5 "></polygon>
                    </svg>
                </div>
                <div class="history-arrow history-arow--right">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 39 11" enable-background="new 0 0 39 11">
                        <polygon points="33.5,0 32.8,0.7 37.1,5 0,5 0,6 37.1,6 32.8,10.3 33.5,11 39,5.5 "></polygon>
                    </svg>
                </div>
            </div>
			<?php $history = new WP_Query( [
				'post_type'      => 'reviews',
				'posts_per_page' => - 1
			] ); ?>
            <div class="history__slider" id="js-history-slider">
				<?php if ( $history->have_posts() ): ?><?php while ( $history->have_posts() ): ?><?php $history->the_post(); ?>
                    <div class="history__slide">
                        <div class="history__text"><?php echo carbon_get_the_post_meta( 'crb_reviews_cite' . get_lang() ); ?></div>
                        <div class="history__author">
                            <div class="history__img">
								<?php the_post_thumbnail( 'full' ); ?>
                            </div>
                            <div class="history__name"><?php echo carbon_get_the_post_meta( 'crb_reviews_title' . get_lang() ); ?></div>
                        </div>
                    </div>
				<?php endwhile; ?><?php wp_reset_postdata(); ?><?php else: ?><?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="numbers section section-dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/section-bg.jpg')">
	<?php $numbers = carbon_get_theme_option( 'crb_numbers_fields' ); ?>
    <div class="numbers__content">
		<?php foreach ( $numbers as $number ): ?>
            <div class="numbers__item">
                <h5><?php echo $number[ 'crb_numbers_title' . get_lang() ]; ?></h5>
                <div class="numbers__text"><?php echo $number['crb_numbers_text']; ?></div>
            </div>
		<?php endforeach; ?>
    </div>
</section>
<section class="partners section" id="js-partners">
    <header class="section__header--center section__header">
        <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_partners_title' . get_lang() ); ?></h2>
    </header>
    <div class="partners-wrap">
        <div class="slider-buttons">
            <div class="slider__arrow slider__arrow-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/right-arrow.svg">
            </div>
            <div class="slider__arrow slider__arrow-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/right-arrow.svg">
            </div>
        </div>
        <div class="partners__slider" id="js-partners__slider">
			<?php $partners = carbon_get_theme_option( 'crb_partners_fields' ); ?>
			<?php foreach ( $partners as $partner ): ?>
                <div class="partners__slide">
                    <div class="partners__img">
                        <a href="<?php echo $partner['crb_partners_text'.get_lang()]; ?>">
                            <img src="<?php echo $partner['crb_partners_img']; ?>">
                        </a>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section idea section-dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/i/section-bg.jpg')">
    <div class="idea__wrap">
        <header class="section__header section__header--center">
            <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_idea_title' . get_lang() ); ?></h2>
        </header>
        <div class="idea__content">
            <div class="slider-buttons">
                <div class="slider__arrow slider__arrow-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/right-arrow.svg">
                </div>
                <div class="slider__arrow slider__arrow-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/right-arrow.svg">
                </div>
            </div>
			<?php
				$idea_slider = new WP_Query( [
					'post_type'     => 'idea',
					'post_per_page' => - 1
				] );
			?>
            <div class="idea__slider" id="js-idea__slider">
				<?php if ( $idea_slider->have_posts() ): ?><?php while ( $idea_slider->have_posts() ): ?><?php $idea_slider->the_post(); ?>
                    <div class="idea__slide">
                        <div class="idea__slide-content">
                            <div class="idea__img">
                                <a href="<?php the_permalink(); ?>">
									<?php echo kama_thumb_img( 'w=502 &h=217' ); ?>
                                </a>
                            </div>
                            <div class="idea__block">
                                <h5><?php the_title(); ?></h5>
                                <div class="idea__text">
                                    <a href="<?php the_permalink(); ?>">
										<?php echo carbon_get_the_post_meta( 'crb_idea_first_line_link' . get_lang() ); ?>
                                    </a>

									<?php
										$short_text    = get_the_content();
										$text_ro       = '{:ro}';
										$text_ru       = '{:ru}';
										$text_en       = '{:en}';
										$pos_ro        = strpos( $short_text, $text_ro ) + 5;
										$pos_ru        = strpos( $short_text, $text_ru ) + 5;
										$pos_en        = strpos( $short_text, $text_en ) + 5;
										$short_text_ro = substr( $short_text, $pos_ro, 180 );
										$short_text_ru = substr( $short_text, $pos_ru, 180 );
										$short_text_en = substr( $short_text, $pos_en, 180 );
										if ( get_lang() === '_ro' ) {
											$short_text = $short_text_ro;
										} elseif ( get_lang() === '_ru' ) {
											$short_text = $short_text_ru;
										} else {
											$short_text = $short_text_en;
										}
										$short_text = str_replace( [ '<strong>', '</strong>' ], '', $short_text );
									?>
                                    <p><?php echo $short_text; ?>...</p>
                                    <a class="read-more" href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option( 'crb_idea_button_read_more' . get_lang() ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?><?php wp_reset_postdata(); ?><?php else: ?><?php endif; ?>

            </div>
        </div>
    </div>
</section>
<section class="section consultation" id="js-consultation">
    <div class="consultation-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/consultation/consultation-bg.png" alt="">
        <div class="consultation__content">
            <header class="section__header">
                <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_consultation_title' . get_lang() ); ?></h2>
            </header>
            <div class="consultation__text"><?php echo carbon_get_theme_option( 'crb_consultation_text' . get_lang() ); ?></div>
            <div class="btn-popup-wrap">
                <a class="popup-btn" href="#">
                    <div class="popup-btn__before"></div>
                    <button class="popup-btn__button"><?php echo carbon_get_theme_option( 'crb_consultation_button' . get_lang() ); ?></button>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
