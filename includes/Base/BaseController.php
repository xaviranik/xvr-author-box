<?php 

namespace XVR\Author_Box\Base;

class BaseController {
	public $plugin_name;

	public $plugin_path;

	public $plugin_url;

	public $plugin;

	public function __construct() {
		$this->plugin_name = 'xvr_author_box';
		$this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
		$this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
		$this->plugin = plugin_basename( dirname( __FILE__, 3 ) ) . '/xvr-author-box.php';
	}
}