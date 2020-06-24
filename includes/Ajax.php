<?php
/**
 * @package  XVR
 */
namespace XVR\Author_Box;

/**
 * Ajax Handler
 */
class Ajax {
	
	public function __construct() {
		add_action('wp_ajax_xvr_author_box_contact', [ $this, 'submit_contact_form' ]);
	}

	public function submit_contact_form() {
		if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'xvr-author-box-form' ) ) {
            wp_send_json_error( [
                'message' => 'Nonce verification failed!'
            ] );
        }

        wp_send_json_success([
            'message' => 'Form has been sent successfully!'
        ]);
	}
}