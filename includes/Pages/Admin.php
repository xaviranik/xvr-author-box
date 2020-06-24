<?php 

namespace XVR\Author_Box\Pages;

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
	}
}