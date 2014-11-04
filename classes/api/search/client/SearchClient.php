<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 6:44
 */

namespace classes\api\search\client;

interface SearchClient {
	function get( $url, array $params = array(), $header = null );

	function post( $url, array $params = array(), $header = null );
}