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

$naver  = new \classes\api\search\impl\NaverSearchApi( array( 'api_key' => 'c1b406b32dbbbbeee5f2a36ddc14067f ' ) );
$daum   = new \classes\api\search\impl\DaumSearchApi( array( 'api_key' => '6d85d2a3b6720acc1156c4b65cf04eb11db16037' ) );
$google = new \classes\api\search\impl\GoogleSearchApi();

$service = new \classes\api\search\service\SearchService();
$service->setSearchApi( $naver );

print_r( $service->getData( '노트북' ) );