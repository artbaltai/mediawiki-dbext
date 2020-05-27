<?php

declare( strict_types = 1 );

class DbExtHooks {
	public function addDbEngineProvider() {
		var_dump( __METHOD__ );
		exit;
	}
}