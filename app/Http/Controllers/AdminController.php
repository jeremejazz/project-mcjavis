<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('administrator.administrator');
    }

    public function order()
    {
        return view('administrator.order');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function loginValidate(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == "demo" && $password == "demo") {
            return redirect('/admin');
        } else {
            \Session::flash('flash_message', 'Invalid username and password.');
            return redirect('/login');
        }
    }


}
