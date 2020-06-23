<?php

namespace XVR\Author_Box\Api;

/**
 * User Contact Method
 */
class User_Contact_Method {

	/**
	 * Contact params
	 * @var array
	 */
	private $params = [];

	public function register( array $params ) {
		$this->params = $params;
		add_filter( 'user_contactmethods', [ $this,  'make'] );
	}
	
	public function make( $methods ) {
		if ( ! empty( $this->params ) ) {
			foreach ($this->params as $key => $param) {
				$methods[ $key ] = $param;
			}
		}
		return $methods;
	}
}