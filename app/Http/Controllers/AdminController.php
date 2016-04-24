<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SaleInfo;
use App\Menu;


class AdminController extends Controller
{
    public function index()
    {
        return view('administrator.administrator');
    }

    public function order()
    {
        $result = new SaleInfo();
        $test['sales_info'] = $result->fetchSaleInformations();

        $response = [];


        $index = 0;
        foreach ($test['sales_info'] as $person) {
            // get the menu order using sales_info_id
            $Menu = new Menu();
            //dump($person);

            $response[$index]['sales_info'] = $person;


            $response[$index]['menu_list'] = $result->fetchSaleInfoMenu(["" . $person->sale_information_id]);

            // Get menu information
            foreach ($response[$index]['menu_list'] as $menu_item) {

                $flat_menu_info = $this->flatArray($Menu->getMenu(["" . $menu_item->menu_id]));
                // Need to merge the value from other active records

                //dump($flat_menu_info);
                $response[$index]['menu_list_info'][] = (object)array_merge((array)$flat_menu_info, (array)$menu_item);
            }

            $index++;

        }

        $test = $response;

        return view('administrator.order', compact('response'));
    }

    private function flatArray($array_to_flat)
    {
        foreach ($array_to_flat as $item) {
            return $item;
        }


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
