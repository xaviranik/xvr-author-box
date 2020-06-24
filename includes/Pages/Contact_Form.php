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
        ob_start();
        include __DIR__ . '/views/contact-form.php';

        return ob_get_clean();
    }
}