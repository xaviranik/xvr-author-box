<?php 

namespace XVR\Author_Box\Base;

/**
* Enqeues scripts
*/
class Assets {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'wp_admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	public function get_scripts() {
		return [
			XVR_AUTHOR_BOX_PLUGIN_NAME . '_script' => [
				'src'     => XVR_AUTHOR_BOX_ASSETS . '/js/frontend.js',
				'version' => filemtime( XVR_AUTHOR_BOX_PATH . '/assets/js/frontend.js' ),
				'deps'    => ''
			],
			XVR_AUTHOR_BOX_PLUGIN_NAME . '_contact_form_script' => [
				'src'     => XVR_AUTHOR_BOX_ASSETS . '/js/contact-form.js',
				'version' => filemtime( XVR_AUTHOR_BOX_PATH . '/assets/js/contact-form.js' ),
				'deps'    => ['jquery'],
			],
		];
	}

	public function get_styles() {
		return [
			XVR_AUTHOR_BOX_PLUGIN_NAME . '_style' => [
				'src'     => XVR_AUTHOR_BOX_ASSETS . '/css/frontend.css',
				'version' => filemtime( XVR_AUTHOR_BOX_PATH . '/assets/css/frontend.css' ),
				'deps' => ''
			],
		];
	}
	
	public function enqueue() {

		$scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }

		wp_enqueue_script(XVR_AUTHOR_BOX_PLUGIN_NAME . '_script');
		wp_enqueue_style(XVR_AUTHOR_BOX_PLUGIN_NAME . '_style');

		wp_localize_script( XVR_AUTHOR_BOX_PLUGIN_NAME . '_contact_form_script', 'xvrAuthorBox', [
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'error' => __( 'Something went wrong', 'xvr-author-box' ),
		] );
	}
}