<?php
	/**
	 * Template Name: Home
	 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?> ">
	<?php wp_head(); ?>

    <?php if(get_lang() == '_ru'): ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="J3ZeaDRhMG" async></script>
    <?php elseif(get_lang() == '_en'): ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="Xczl7rOLj1" async></script>
    <?php else:  ?>
        <script src="//code.jivosite.com/widget.js" data-jv-id="8sk4gGzrKe" async></script>
    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<?php if ( is_home() || is_front_page() ): ?>
    <div class="navigation" id="js-navigation">
        <div class="navigation__list">
            <li>
                <a href="#js-reimbursabile"><?php echo carbon_get_theme_option('crb_navigation_title'.get_lang()); ?></a>
            </li>
            <li>
                <a href="#js-history"><?php echo carbon_get_theme_option('crb_navigation_title_2'.get_lang()); ?></a>
            </li>
            <li>
                <a href="#js-footer"><?php echo carbon_get_theme_option('crb_navigation_title_3'.get_lang()); ?></a>
            </li>
        </div>
    </div>
<?php endif; ?>
<header class="header" id="js-header">
    <div class="header__content">
        <div class="logo">
			<?php the_custom_logo(); ?>
        </div>
        <div class="sandwitch-wrap">
            <div class="sandwitch">
                <div class="sandwitch__line sandwitch__line--top"></div>
                <div class="sandwitch__line sandwitch__line--middle"></div>
                <div class="sandwitch__line sandwitch__line--bottom"></div>
            </div>
        </div>

		<?php
			wp_nav_menu( [
				'theme_location'  => 'menu-top',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'main-menu',
				'menu_id'         => 'js-main-menu',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] );
		?>

        <div class="wpglobus-lang">
			<?php if ( ! dynamic_sidebar( 'wpglobus' ) ): ?>
                <h2>wpglobus widget</h2>
			<?php endif; ?>
        </div>
    </div>
</header>
