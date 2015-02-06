<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib/TwitterAPIExchange.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib/google-api/autoload.php';

function autoLoad($className) {
	$path = str_replace('\\', DIRECTORY_SEPARATOR, $className);

	if (preg_match('/Mute\\\Facebook/i', $className)) {
		$c = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'facebook' . DIRECTORY_SEPARATOR . $path;
		require_once $c . '.php';
	} else {
		require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . $path . '.php';
	}
}

spl_autoload_register('autoLoad');