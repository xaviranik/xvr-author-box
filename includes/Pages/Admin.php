<?php 

namespace XVR\Author_Box\Pages;

use XVR\Author_Box\Pages\Contact_Form;

/**
* Admin controller
*/
class Admin
{
	/**
	 * Registers admin dependencies
	 * @return void
	 */
	public function register() {
		new Author_Box;
		new Contact_Form;
	}
}