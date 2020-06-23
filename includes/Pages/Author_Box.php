<?php 

namespace XVR\Author_Box\Pages;

use XVR\Author_Box\Api\User_Contact_Method;

/**
 * Author Box
 */
class Author_Box {
	
	public function __construct() {
		$this->register_contact_methods();
		$this->register_author_box();
	}

	private function register_author_box() {
		add_filter( 'the_content', [ $this, 'add_author_info' ] );
	}

	private function register_contact_methods() {
		$params = [
			'twitter' => 'Twitter',
			'facebook' => 'Facebook',
		];

		$user_contact = new User_Contact_Method;
		$user_contact->register( $params );
	}

	public function add_author_info( $content ) {
		global $post;

	    $author   = get_user_by( 'id', $post->post_author );

	    $bio      = get_user_meta( $author->ID, 'description', true );
	    $twitter  = get_user_meta( $author->ID, 'twitter', true );
	    $facebook = get_user_meta( $author->ID, 'facebook', true );
	    $linkedin = get_user_meta( $author->ID, 'linkedin', true );

	    ob_start();
	    ?>
	    <div class="xvr-author-box-bio-wrap">

	        <div class="avatar-image">
	            <?php echo get_avatar( $author->ID, 64 ); ?>
	        </div>

	        <div class="xvr-author-box-bio-content">
	            <div class="author-name"><?php echo $author->display_name; ?></div>

	            <div class="xvr-author-box-author-bio">
	                <?php echo wpautop( wp_kses_post( $bio ) ); ?>
	            </div>

	            <ul class="xvr-author-box-socials">
	                <?php if ( $twitter ) { ?>
	                    <li><a href="<?php echo esc_url( $twitter ); ?>"><?php _e( 'Twitter', 'xvr-author-box' ); ?></a></li>
	                <?php } ?>

	                <?php if ( $facebook ) { ?>
	                    <li><a href="<?php echo esc_url( $facebook ); ?>"><?php _e( 'Facebook', 'xvr-author-box' ); ?></a></li>
	                <?php } ?>

	                <?php if ( $linkedin ) { ?>
	                    <li><a href="<?php echo esc_url( $linkedin ); ?>"><?php _e( 'LinkedIn', 'xvr-author-box' ); ?></a></li>
	                <?php } ?>
	            </ul>
	        </div>
	    </div>
	    <?php
	    $bio_content = ob_get_clean();

	    return $content . $bio_content;
	}
}