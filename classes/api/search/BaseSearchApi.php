<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 6:41
 */

namespace classes\api\search;

use classes\api\search\client\DefaultClient;
use classes\api\search\client\SearchClient;

abstract class BaseSearchApi implements SearchApi {
	protected $client;
	protected $settings = array();

	function __construct( $settings = array(), SearchClient $client = null ) {
		$this->settings = $settings;

		if ( is_null( $client ) ) {
			$this->client = new DefaultClient();
		} else {
			$this->client = $client;
		}
	}

	public function setClient( SearchClient $client ) {
		$this->client = $client;
	}

	public function getClient() {
		return $this->client;
	}

	public function getApiKey() {
		return $this->settings['api_key'];
	}

	abstract function getApiUrl();
}