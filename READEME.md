#sns-search-api
This is sns search api library

##Support sns
* Twitter
* Naver
* Daum
* Google

##How to use

```
$twitter = new \classes\api\search\impl\TwitterSearchApi( array(
	'oauth_access_token'        => "",
	'oauth_access_token_secret' => "",
	'consumer_key'              => "",
	'consumer_secret'           => ""
) );

$naver  = new \classes\api\search\impl\NaverSearchApi( array( 'api_key' => '' ) );
$daum   = new \classes\api\search\impl\DaumSearchApi( array( 'api_key' => '' ) );
$google = new \classes\api\search\impl\GoogleSearchApi();

$service = new \classes\api\search\service\SearchService();
$service->setSearchApi( $naver );

var_dump( $service->getData( '노트북' ) );
```
