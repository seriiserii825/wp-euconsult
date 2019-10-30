<?php
/**
 * bs-euconsult functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bs-euconsult
 */


	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

require_once __DIR__.'/inc/carbon-fields/cb.php';
require_once __DIR__.'/inc/carbon-fields/cb-finance-page.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-type.php';
require_once __DIR__.'/inc/carbon-fields/cb-page.php';
require_once __DIR__.'/inc/carbon-fields/cb-category.php';
require_once __DIR__.'/inc/carbon-fields/cb-news-post.php';

require_once __DIR__.'/inc/func.php';
require_once __DIR__.'/inc/bs-post-type.php';
require_once __DIR__.'/inc/bs-post-taxonomy.php';
require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-setup.php';
require_once __DIR__.'/inc/bs-widgets.php';

add_action( 'after_setup_theme', function() {
	add_theme_support( 'pageviews' );
});

function bs_euconsult_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bs_euconsult_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_euconsult_content_width', 0 );


$result = add_role( 'vegetables', 'Vegetables',
	array(
		'read'         => true,  // true разрешает эту возможность
	)
);

$result = add_role( 'pomicultura', 'Pomicultura',
	array(
		'read'         => true,  // true разрешает эту возможность
	)
);

$result = add_role( 'viticultura', 'Viticultura',
	array(
		'read'         => true,  // true разрешает эту возможность
	)
);

function login_redirect( $redirect_to, $request, $user ){
//is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		
		// check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		}
		else {
			return home_url('video-page/');
		}
	}
	else {
		return $redirect_to;
	}
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );

///**
// * Implement the Custom Header feature.
// */
//require get_template_directory() . '/inc/custom-header.php';
//
///**
// * Custom template tags for this theme.
// */
//require get_template_directory() . '/inc/template-tags.php';
//
///**
// * Functions which enhance the theme by hooking into WordPress.
// */
//require get_template_directory() . '/inc/template-functions.php';
//
///**
// * Customizer additions.
// */
//require get_template_directory() . '/inc/customizer.php';
//
///**
// * Load Jetpack compatibility file.
// */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}
//
