<?php
$phone = carbon_get_theme_option('crb_connect_phone');
$phone_clear = clear_phone($phone);
?>
<section class="connect-now">
    <h2 class="connect-now__title"><?php echo carbon_get_theme_option('crb_connect_title' . get_lang()); ?></h2>
    <div class="connect-now__links">
        <a class="connect-now__popup popup-btn" href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/i/letter-white.png">
            <span><?php echo carbon_get_theme_option('crb_connect_text' . get_lang()); ?></span></a>
        <a class="connect-now__phone" href="tel:<?php echo $phone_clear; ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/i/icon-phone-white.png">
            <span><?php echo $phone; ?></span>
        </a>
    </div>
</section>
