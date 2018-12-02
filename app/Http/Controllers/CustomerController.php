<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CustomerController extends Controller
{
    public function getOrders(Request $request){

        if ($request->isMethod('post')) {
            $data = $request->all();


        }


    }
}
