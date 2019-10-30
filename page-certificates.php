<?php
/**
 * Template Name: Certificates
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
        </div>
    </section>
    <div class="idea-page__content">
        <?php
            $certificates = carbon_get_theme_option('crb_certificates');
        ?>
        <?php foreach($certificates as $item): ?>
            <div class="idea__slide">
                <div class="idea__slide-content">
                    <div class="idea__img">
                        <?php echo kama_thumb_img('w=502', $item['crb_image']); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
	<?php require_once __DIR__ . '/template-parts/connect-now-video.php'; ?>
</section>
<?php get_footer(); ?>
