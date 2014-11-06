<?php
/**
 * Created by PhpStorm.
 * User: oks
 * Date: 14. 11. 4.
 * Time: 오후 11:10
 */

namespace classes\api\search\impl;

use classes\api\search\BaseSearchApi;
use Mute\Facebook\App;

class FacebookSearchApi extends BaseSearchApi {
	function getApiUrl() {
		return '';
	}

	function getData($query, $args = array()) {
		$app = new App($this->settings['app_id'], $this->settings['app_secret']);

		$params = array(
			'q' => $query,
			'type' => 'page'
		);

		$params = array_merge($params, $args);
		$data   = $app->get('search', $params);

		return $data['data'];
	}
}