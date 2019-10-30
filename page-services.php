<?php
/**
 * Template Name: Services
 */
get_header();
$page_id = get_the_ID();
$ramb_bg_img_src = kama_thumb_src('w=1351 &h=619 &post_id=' . $page_id . '');
?>

<?php if (have_posts()): ?>
	<?php the_post(); ?>
    <section class="our-services-intro section-dark page-intro" style="background-image: url('<?php echo $ramb_bg_img_src; ?>'); background-position: center top">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title"><?php the_title(); ?></h2>
            </header>
            <?php the_content(); ?>
        </div>
    </section>
    <section class="page-title page-title-services">
        <div class="page-title__container">
            <h2 class="section__title"><?php echo carbon_get_the_post_meta('crb_page_about_subtitle'.get_lang()); ?></h2>
        </div>
    </section>
    <section class="our-services">
        <?php $services = carbon_get_the_post_meta('crb_services_fields'); ?>
        <?php $i = 1;  ?>
        <?php foreach($services as $item): ?>
            <div class="our-services__item <?php if($i % 2 !== 0){ echo 'our-services__item--dark';} ?>">
                <div class="our-services__container">
                    <div class="our-services__content">
                        <header class="our-sevices__header">
                            <div class="our-services__number"><span><?php echo $i; ?>.</span></div>
                            <h3 class="our-services__title"><?php echo $item['title'.get_lang()]; ?></h3>
                        </header>
                        <?php echo $item['content'.get_lang()]; ?>
                    </div>
                </div>
            </div>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </section>

<?php else: ?>
<?php endif; ?>

<?php require_once __DIR__ . '/template-parts/connect-now.php'; ?>
<?php get_footer(); ?>

