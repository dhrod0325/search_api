<?php
function autoLoad( $className ) {
	$path = str_replace( '\\', DIRECTORY_SEPARATOR, $className );
	require_once $path . '.php';
}

spl_autoload_register( 'autoLoad' );

$twitter = new \classes\api\search\impl\TwitterSearchApi( array(
	'oauth_access_token'        => "2841900320-2V9jbrIptnPpQyYuOVprcOe3UPGgft6iqvqKB8F",
	'oauth_access_token_secret' => "glwOqLHNCpNZFKCCRgKnstG64KF8z7IvD9B2C77UoRFuq",
	'consumer_key'              => "DaWfqIc44zDP0pflMo9RgeCMv",
	'consumer_secret'           => "CSqQCNDdVXXOo4stRkF4VL4yYCPpJAo5lRrBqsBFBuG05Yh5lU"
) );

$naver  = new \classes\api\search\impl\NaverSearchApi( array( 'api_key' => '' ) );
$daum   = new \classes\api\search\impl\DaumSearchApi( array( 'api_key' => '' ) );
$google = new \classes\api\search\impl\GoogleSearchApi();

echo '<meta charset="utf-8">';

$service = new \classes\api\search\service\SearchService();
$service->setSearchApi( $facebook );

print_r( $service->getData( '노트북' ) );