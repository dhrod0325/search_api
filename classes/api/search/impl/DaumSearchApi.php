<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 6:40
 */

namespace classes\api\search\impl;

use classes\api\search\BaseSearchApi;

class DaumSearchApi extends BaseSearchApi {
	function getData( $query, $args = array() ) {
		$params           = array();
		$params['apikey'] = $this->getApiKey();
		$params['q']      = $query;

		$params = array_merge( $params, $args );

		$res = $this->client->get( $this->getApiUrl(), $params );

		return simplexml_load_string( $res );
	}

	function getApiUrl() {
		return 'http://apis.daum.net/search/web';
	}
}