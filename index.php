<?php
function __autoload( $class_name ) {
	$file = $class_name . '.php';

	if ( file_exists( $file ) ) {
		require_once $class_name . '.php';
	}
}

$twitter = new \classes\api\search\impl\TwitterSearchApi( array(
	'oauth_access_token'        => "2841900320-2V9jbrIptnPpQyYuOVprcOe3UPGgft6iqvqKB8F",
	'oauth_access_token_secret' => "glwOqLHNCpNZFKCCRgKnstG64KF8z7IvD9B2C77UoRFuq",
	'consumer_key'              => "DaWfqIc44zDP0pflMo9RgeCMv",
	'consumer_secret'           => "CSqQCNDdVXXOo4stRkF4VL4yYCPpJAo5lRrBqsBFBuG05Yh5lU"
) );

$result = $twitter->getData( '노트북' );

echo '<meta charset="utf-8"/>';
print_r( $result->statuses );

