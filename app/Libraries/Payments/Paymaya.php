<?php 

namespace App\Libraries\Payments;


use GuzzleHttp\Client;


class Paymaya{

	protected $client; 

	private $id = "ANGELHACK2";
	private $public_key = "pk-1cRjsBMbH9E31PFA8YMQXXNyIEsvkFZgm5smJj6FCPA";
	private $secret_key = "sk-TXeD0PbvK1FzmPEpUsRBL5xozgHQaULJxlxbelzyNiJ";
	function __construct(){
		$client = new Client([
			'verify' => false,
			]);		 
	}


	function checkout(){


	}
}