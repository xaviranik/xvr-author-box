<?php 

namespace XVR\Author_Box\Pages;

use XVR\Author_Box\Ajax;
use XVR\Author_Box\Pages\Contact_Form;

/**
* Frontend controller
*/
class Frontend {
	/**
	 * Registers Frontend dependencies
	 * @return void
	 */
	public function register() {
		new Contact_Form;

		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
			new Ajax;
		}
	}
}