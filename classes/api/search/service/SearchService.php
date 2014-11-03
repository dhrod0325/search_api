<?php
/**
 * Created by PhpStorm.
 * User: oks
 * Date: 14. 11. 4.
 * Time: 오전 1:48
 */

namespace classes\api\search\service;


use classes\api\search\SearchApi;

class SearchService {
    /**
     * @var SearchApi
     */
    private $searchApi;

    /**
     * @param mixed $searchApi
     * @return $this
     */
    public function setSearchApi(SearchApi $searchApi) {
        $this->searchApi = $searchApi;
        return $this;
    }

    public function getData($query, $param = array()) {
        return $this->searchApi->getData($query, $param);
    }
}