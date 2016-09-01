<?php
/**
 * Post HTML markup structure
 *
 * @package     GirlieWorks\Master\Structure
 * @since       1.0.0
 * @author      girlieworks
 * @link        http://girlieworks.com
 * @license     GNU General Public License 2.0+
 */

namespace GirlieWorks\Master\Structure;

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size' );
/**
 * Modify size of the Gravatar in the author box
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */
function setup_author_box_gravatar_size( $size ) {

	return 90;
}