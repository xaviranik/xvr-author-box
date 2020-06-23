<?php 

namespace XVR\Author_Box\Base;

use XVR\Author_Box\Base\BaseController;

/**
* Enqeues scripts
*/
class Enqueue extends BaseController
{
	public function register() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( "{$this->plugin_name}_style", $this->plugin_url . "assets/main.css" );
		wp_enqueue_script( "{$this->plugin_name}_script", $this->plugin_url . "assets/main.js" );
	}
}