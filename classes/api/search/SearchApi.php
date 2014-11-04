<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 6:37
 */

namespace classes\api\search;

interface SearchApi {
	function getData( $query, $args = array() );
}