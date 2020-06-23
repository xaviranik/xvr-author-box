<?php 

namespace XVR\Author_Box\Pages;

use XVR\Author_Box\Base\BaseController;

/**
* Admin controller
*/
class Admin extends BaseController
{
	public function register() {
		wp_die("Welcome to {$this->plugin_name}");
	}
}