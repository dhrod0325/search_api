<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 6:40
 */

namespace classes\api\search\impl;

use classes\api\search\BaseSearchApi;

class NaverSearchApi extends BaseSearchApi {
	function getData( $query, $args = array() ) {
		$params           = array();
		$params['key']    = $this->getApiKey();
		$params['target'] = 'shop';
		$params['query']  = $query;

		$params = array_merge( $params, $args );

		if ( ! isset( $this->settings['api_key'] ) ) {
			throw new \Exception( 'api_key required' );
		}

		$res = $this->client->get( $this->getApiUrl(), $params );

		return simplexml_load_string( $res );
	}

	function getApiUrl() {
		return 'http://openapi.naver.com/search';
	}
}