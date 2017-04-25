<?php
/**
 * Redirect class
 *
 * @package Aztec
 */

namespace Aztec\Temporary;

use Aztec\Base;

/**
 * Redirect any request to the front page
 */
class Redirect extends Base {

	/**
	 * Add assets hooks
	 */
	public function init() {
		add_action( 'after_setup_theme', $this->callback( 'redirect' ) );
	}
	
	/**
	 * Throw all requests to the front page temporarily
	 */
	public function redirect() {
		if ( '/' !== $_SERVER['REQUEST_URI'] ) {
			wp_safe_redirect( '/' );
			exit;
		}
	}
}
