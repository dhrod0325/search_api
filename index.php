<?php
require_once 'loader.php';

use classes\api\search\impl\DaumSearchApi;
use classes\api\search\impl\FacebookSearchApi;
use classes\api\search\impl\GoogleSearchApi;
use classes\api\search\impl\NaverSearchApi;
use classes\api\search\impl\TwitterSearchApi;
use classes\api\search\service\SearchService;

$twitter = new TwitterSearchApi(array(
	'oauth_access_token' => "",
	'oauth_access_token_secret' => "",
	'consumer_key' => "",
	'consumer_secret' => ""
));

$naver = new NaverSearchApi(
	array('api_key' => ' ')
);

$daum = new DaumSearchApi(
	array('api_key' => '')
);

$google = new GoogleSearchApi();

$facebook = new FacebookSearchApi(
	array('app_id' => '',
	      'app_secret' => ''
	)
);

$service = new SearchService();
$service->setSearchApi($facebook);

print_r($service->getData('Test'));