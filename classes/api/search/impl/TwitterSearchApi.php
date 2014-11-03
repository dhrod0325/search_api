<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 6:41
 */

namespace classes\api\search\impl;

use classes\api\search\BaseSearchApi;
use classes\api\search\helper\TwitterAPIExchange;

class TwitterSearchApi extends BaseSearchApi
{
    function getApiUrl()
    {
        return 'https://api.twitter.com/1.1/search/tweets.json';
    }

    /**
     * @param $query
     * @param array $args
     *
     * 'oauth_access_token'        => "",
     * 'oauth_access_token_secret' => "",
     * 'consumer_key'              => "",
     * 'consumer_secret'           => ""
     *
     * @return mixed
     * @throws \Exception
     */
    function getData($query, $args = array())
    {
        $twitter = new TwitterAPIExchange($this->settings);
        $url = 'https://api.twitter.com/1.1/search/tweets.json';

        $params = array();
        $params['q'] = $query;
        $params['result_type'] = 'recent';
        $params['lang'] = 'ko';

        $params = array_merge($params, $args);
        $params = http_build_query($params);

        $requestMethod = 'GET';
        $result = $twitter->setGetfield('?' . $params)->buildOauth($url, $requestMethod)->performRequest();

        return json_decode($result);
    }
}