#sns-search-api
This is sns search api library

##Support sns
* Facebook
* Twitter
* Naver
* Daum
* Google

##How to use

```
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
```

[Make by Saweb] (http://www.saweb.co.kr)