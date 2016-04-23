<?php

namespace App\Libraries;

use Symfony\Component\HttpFoundation\Session\Session;

class Cart  {

    public function __construct() {

        $this->session = new Session();

        $this->items =  $this->session->get('shopping_cart');

    }

    public function addProduct($product_id, $name, $qty, $price)
    {

        if(isset($this->items[$product_id]))
        {
            $this->items[$product_id]['qty'] = $this->items[$product_id]['qty']+$qty;

        } else {

            $this->items[$product_id] = array('id'=>$product_id, 'name' =>$name, 'price'=>$price, 'qty'=>$qty);
        }
    }


    public function storeInSession()
    {
        $this->session->set('shopping_cart', $this->items);
    }

    public function getItems()
    {
        return $this->items;

    }

    public function get($product_id)
    {
        return $this->items[$product_id];
    }

    public function total()
    {
        $this->suma = 0;

        foreach($this->items as $key=>$val)
        {
            $this->suma+=$val['qty'];
        }

        return $this->suma;
    }

    public function count($elements = '')
    {
        if($elements == TRUE)
        {
            return count($this->items);

        } else {

            $this->total();
        }
    }

    
    public function clearSession()
    {
        $this->session->clear();
    }


    public function delete($product_id){
    	 if(isset($this->items[$product_id]))
        {
    	 unset($this->items[$product_id]);

    	 $this->session->set('shopping_cart', $this->items);
    	}
    }

    public function total_price()
    {
        $this->suma = 0;

        foreach($this->items as $key=>$val)
        {
            $this->suma+=$val['price'] * $val['qty'];
        }

        return $this->suma;
    }


}