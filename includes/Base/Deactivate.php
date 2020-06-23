<?php

namespace XVR\Author_Box\Base;

class Deactivate {
	public static function deactivate() {
		flush_rewrite_rules();
	}
}