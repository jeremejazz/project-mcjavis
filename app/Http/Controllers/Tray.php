<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Libraries\Cart;
 
class Tray extends Controller
{	

	protected $cart;

	public function __construct(){
	 	$this->cart = new Cart();
	}
    public function index(){
		
		print_r($this->cart->getItems());
    	return 'cart';	
    }


    public function add(Request $request){
    	$menu_id = $request->input('menu_id');
    	$description = $request->input('description');
 		$qty = $request->input('qty');
 		$price = $request->input('price');



    	$this->cart->addProduct($menu_id, $description, $qty, $price);
    	$this->cart->storeInSession();

    }

 

    public function delete($menu_id){


    }

    public function view(){

    }
 
    public function all(){
		
		$items = $this->cart->getItems();
    	return response()->json($items);	
    }

    public function total_qty(){

    	return $this->cart->total();
    }

    public function count(){

    }

    public function clear(){
    	$this->cart->clearSession();
    }

    public function total(){
    	return $this->cart->total_price();
    }

}
