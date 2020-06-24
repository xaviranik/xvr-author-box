<?php 

namespace XVR\Author_Box\Pages;

/**
 * Shortcode handler class
 */
class Contact_Form {

    /**
     * Initializes the class
     */
    function __construct() {
        add_shortcode( 'xvr-author-box-contact-form', [ $this, 'render_shortcode' ] );
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_shortcode( $atts, $content = '' ) {
        wp_enqueue_script(XVR_AUTHOR_BOX_PLUGIN_NAME . '_contact_form_script');
        ob_start();
        include __DIR__ . '/views/contact-form.php';

        return ob_get_clean();
    }
}