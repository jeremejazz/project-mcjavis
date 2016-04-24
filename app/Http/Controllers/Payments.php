<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Libraries\Payments\Paymaya;

use App\Libraries\Cart;

class Payments extends Controller
{
    public function index(){
    	return view('payment/index');
    }

    public function checkout(Request $request){

    	$cart = new Cart();

    	if($request->isMethod('get')){

    		$cart_data = $cart->getItems(); 
    		
    		return view('payment.checkout', ['cart_data' => $cart_data]);
    	}else if($request->isMethod('post')){
    		 	$type =	$request->input('type');
	    	if($type == "cash"){



	    		//TODO database transaciton 
	    		//update db
	    	$url = url('/');

	    		return response()->json([
	    			'status' => 'success'
	    			]);
	    	}else if($type == "paymaya"){
	    		$paymaya = new Paymaya();

	    		$items = [];

	    		foreach ($cart->getItems() as $key => $value) {
	    			array_push($items, 
	    				[
	    				[ "name"=> $value['name'],  
				      		"quantity"=> $value['qty'],
				      		"amount"=> [
				        		"value"=> $value['price']
				        	]
				      	],
				      	"totalAmount"=> [
				       	 "value"=> $value['price'] * $value['qty']
				      	]]
				      );
	    		}

	    		$paymaya_info = [
	    			'totalAmount' 	=> [
	    				'currency' 	=> 'PHP',
	    				'value'	   	=> '',
	    				'details'	=> [
	    					'discount' 		=> "0",
	    					'serviceCharge' => "0",
	    					'shippingFee'	=> "0",
	    					'tax'			=> "0",
	    					'subtotal'		=> ""
	    				]
	    			],
	    			'buyer' =>[
	    				'firstName' 	=> 	'Juan',
	    				'middleName'	=>	'',
	    				'lastName'		=>	'Doe',
	    				'contact'		=>	[
	    						'phone' => '',
	    						'email' => '', 
	    				], 
	    			],
	    			"items"=> $items,
				  "redirectUrl"=> [
				    "success"=> $url . "payment/success?id=6319921",
				    "failure"=>  $url . "payment/failure?id=6319921",
				    "cancel"=>  $url . "payment/cancel?id=6319921"

				  ],
				  "requestReferenceNumber"=> "000141386713", //ymd + 00 + sales_information_id 
	    		];

 

				/*$json = '{
				  "totalAmount": {
				    "currency": "PHP",
				    "value": "6404.90",
				    "details": {
				      "discount": "300.00",
				      "serviceCharge": "50.00",
				      "shippingFee": "200.00",
				      "tax": "691.60",
				      "subtotal": "5763.30"
				    }
				  },
				  "buyer": {
				    "firstName": "Juan",
				    "middleName": "dela",
				    "lastName": "Cruz",
				    "contact": {
				      "phone": "+63(2)1234567890",
				      "email": "paymayabuyer1@gmail.com"
				    },
				    "shippingAddress": {
				      "line1": "9F Robinsons Cybergate 3",
				      "line2": "Pioneer Street",
				      "city": "Mandaluyong City",
				      "state": "Metro Manila",
				      "zipCode": "12345",
				      "countryCode": "PH"
				    },
				    "billingAddress": {
				      "line1": "9F Robinsons Cybergate 3",
				      "line2": "Pioneer Street",
				      "city": "Mandaluyong City",
				      "state": "Metro Manila",
				      "zipCode": "12345",
				      "countryCode": "PH"
				    },
				    "ipAddress": "125.60.148.241"
				  },
				  "items": [
				    {
				      "name": "Canvas Slip Ons",
				      "code": "CVG-096732",
				      "description": "Shoes",
				      "quantity": "3",
				      "amount": {
				        "value": "1621.10",
				        "details": {
				          "discount": "100.00",
				          "subtotal": "1721.10"
				        }
				      },
				      "totalAmount": {
				        "value": "4863.30",
				        "details": {
				          "discount": "300.00",
				          "subtotal": "5163.30"
				        }
				      }
				    },
				    {
				      "name": "PU Ballerina Flats",
				      "code": "CVR-096RE2",
				      "description": "Shoes",
				      "quantity": "1",
				      "amount": {
				        "value": "600.00"
				      },
				      "totalAmount": {
				        "value": "600.00"
				      }
				    }
				  ],
				  "redirectUrl": {
				    "success": "http://localhost/project-mcjavis/payment/success?id=6319921",
				    "failure": "http://localhost/project-mcjavis/payment/failure?id=6319921",
				    "cancel": "http://localhost/project-mcjavis/payment/cancel?id=6319921"
				  },
				  "requestReferenceNumber": "000141386713",
				  "metadata": {}}';*/

				  //TODO change ID
					$sample_data = json_decode ($json);


					$response = $paymaya->checkout($sample_data);
					return $response->getBody();
	    		//get data

	    		//redirect to paymaya 

	    		//set callback url
	    		//set web hook
	    	}

    	}
	
    }

    public function success(){

    }

    public function failure(){

    }

    public function cancel(){
    	
    		    }
}

