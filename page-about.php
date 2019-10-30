<?php
/**
 * Template Name: About
 */
get_header();

$page_id = get_the_ID();
$ramb_bg_img_src = kama_thumb_src('w=651 &h=140 &post_id=' . $page_id . '');
?>
<?php if (have_posts()): ?>
	<?php the_post(); ?>
    <section class="section-dark page-intro about" style="background-image: url('<?php echo $ramb_bg_img_src; ?>')">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title"><?php the_title(); ?></h2>
            </header>
            <p><?php echo carbon_get_the_post_meta('crb_page_about_subtitle'.get_lang());?></p>
        </div>
    </section>
    <div class="page-about">
        <sidebar class="sidebar">
            <div class="widget">
                <h2><?php echo carbon_get_the_post_meta('crb_page_about_sideabr_contacts_title'.get_lang()); ?></h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/icon-map.png">
                        <span><?php echo carbon_get_theme_option('crb_address_just_city'.get_lang()); ?></span></li>
                    <li>
                        <?php
                            $phone = carbon_get_theme_option('crb_phone_with_space_2');
                            $clear_phone = clear_phone($phone);
                        ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/icon-phone.png">
                        <a href="tel:<?php echo $clear_phone; ?>"><?php echo $phone; ?></a>
                    </li>
                    <li>
                        <?php $email = carbon_get_theme_option('crb_gmail'); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/i/icon-letter.png">
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </li>
                </ul>
            </div>
        </sidebar>
        <main class="main">
            <?php the_content(); ?>
        </main>
    </div>
    <div class="page-about__connect-now">
        <?php require_once __DIR__.'/template-parts/connect-now.php';?>
    </div>

<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>

