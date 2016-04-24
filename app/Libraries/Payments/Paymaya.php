<?php 

namespace App\Libraries\Payments;


use GuzzleHttp\Client;


class Paymaya{

	protected $client; 

	private $id = "ANGELHACK2";
	private $public_key = "pk-1cRjsBMbH9E31PFA8YMQXXNyIEsvkFZgm5smJj6FCPA";
	private $secret_key = "sk-TXeD0PbvK1FzmPEpUsRBL5xozgHQaULJxlxbelzyNiJ";
	private $auth_key = "";
	function __construct(){
		$this->client = new Client([
			'verify' => false,
			]);		 

		$this->auth_key = base64_encode($this->public_key  . ":");
	}


	function checkout($data){

		$response = $this->client->request('POST', 'https://pg-sandbox.paymaya.com/checkout/v1/checkouts', [
			'headers' => ['Authorization' => 'Basic ' . $this->auth_key],
			'json' => $data,
			]);
		
		return $response;
	}


}