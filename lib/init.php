<?php
/**
 * Description
 *
 * @package     GirlieWorks\Master
 * @since       1.0.0
 * @author      girlieworks
 * @link        http://girlieworks.com
 * @license     GNU General Public License 2.0+
 */

namespace GirlieWorks\Master;

/**
 * Initialize the theme's constants
 *
 * @since 1.0.0
 *
 * @return void
 */

function init_constants() {

	$child_theme = wp_get_theme();

	define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
	define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
	define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
	define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );

	// Define as many as you want, but ONLY if you will use them more than once
	define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
	define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );
}

init_constants();