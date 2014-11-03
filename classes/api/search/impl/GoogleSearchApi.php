<?php
/**
 * Created by PhpStorm.
 * User: oks
 * Date: 14. 11. 4.
 * Time: 오전 2:12
 */

namespace classes\api\search\impl;

use classes\api\search\BaseSearchApi;

class GoogleSearchApi extends BaseSearchApi {
    function getApiUrl() {
        return 'https://ajax.googleapis.com/ajax/services/search/web';
    }

    function getData($query, $args = array()) {
        $params = array(
            'q' => $query,
            'v' => '1.0',
            'userip' => gethostname()
        );

        $params = array_merge($params, $args);

        return json_decode($this->client->get($this->getApiUrl(), $params));
    }
}