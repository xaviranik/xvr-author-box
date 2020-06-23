<?php 

namespace XVR\Author_Box\Pages;

use XVR\Author_Box\Api\User_Contact_Method;

/**
 * Author Box
 */
class Author_Box
{
	
	public function __construct() {
		$params = [
			'twitter' => 'Twitter',
			'facebook' => 'Facebook',
		];

		$user_contact = new User_Contact_Method;
		$user_contact->register( $params );
	}
}