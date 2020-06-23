<?php

namespace XVR\Author_Box\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}