<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SaleInfo;
use App\Menu;

class PageController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function menu(){


        return view('pages.menu');
    }
}
