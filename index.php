<?php
use classes\api\search\impl\DaumSearchApi;
use classes\api\search\impl\FacebookSearchApi;
use classes\api\search\impl\GoogleSearchApi;
use classes\api\search\impl\NaverSearchApi;
use classes\api\search\impl\TwitterSearchApi;
use classes\api\search\service\SearchService;

require_once 'loader.php';

$twitter  = new TwitterSearchApi( array(
	'oauth_access_token'        => "220892987-QTCRT9KNoV0jqXfNV0AaoVkkdK6AbvxuL5ehWuEc",
	'oauth_access_token_secret' => "RnqbRBgiJtA5RHxVSJp45ijPqtsXLfI4GLg40aWENlAgA",
	'consumer_key'              => "ZQYUVcqdCFhBAAtMi3SQE5J1R",
	'consumer_secret'           => "2sjYEQksXfW8TuZn3mPcIMuOlcuxraaB8scSUasX2tM9ENrVbp"
) );
$naver    = new NaverSearchApi( array( 'api_key' => '52265b73abaa0f5f8086a1e0ca16a944' ) );
$daum     = new DaumSearchApi( array( 'api_key' => '' ) );
$google   = new GoogleSearchApi();
$facebook = new FacebookSearchApi( array(
	'app_id'     => '436496296365311',
	'app_secret' => '05f5cfeb5ffcfb9f4024bdeca8f5579c'
) );

$client = new Google_Client();
$client->setApplicationName( "Google_Service_Customsearch_Search" );
$client->setDeveloperKey( "AIzaSyBge6KMz7x_i-uxAQhByeAggWarQbGE_n8" );

$service = new SearchService();
$service->setSearchApi( $twitter );

header( 'application/json; charset=UTF-8' );

echo '<meta charset="utf-8">';

var_dump( $service->getData( '바보' )->search_metadata );

