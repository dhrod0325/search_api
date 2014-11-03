<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 2014-11-03
 * Time: 오후 7:04
 */

namespace classes\api\search\client;

class DefaultClient implements SearchClient {
	function get( $url, array $params = array(), $header = null ) {
		if ( ! empty( $params ) ) {
			if ( strpos( $url, '?' ) === false ) {
				$url .= '?';
			}
			$url .= http_build_query( $params );
		}

		$curl = $this->getDefaultCurl( $header );
		curl_setopt( $curl, CURLOPT_URL, $url );
		$result = curl_exec( $curl );
		curl_close( $curl );

		return $result;
	}

	function post( $url, array $params = array(), $header = null ) {
		$curl = $this->getDefaultCurl( $header );
		curl_setopt( $curl, CURLOPT_URL, $url );
		curl_setopt( $curl, CURLOPT_POST, true );
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $params );

		$result = curl_exec( $curl );
		curl_close( $curl );

		return $result;
	}

	function getDefaultCurl( $header = null ) {
		$curl = curl_init();

		curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $curl, CURLOPT_HEADER, false );
		curl_setopt( $curl, CURLINFO_HEADER_OUT, false );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $curl, CURLINFO_HEADER_OUT, true );

		if ( ! is_null( $header ) ) {
			curl_setopt( $curl, CURLOPT_HTTPHEADER, $header );
		}

		return $curl;
	}
} 