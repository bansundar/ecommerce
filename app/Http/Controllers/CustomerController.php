<?php

namespace App\Http\Controllers;

use App\Service\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CustomerController extends Controller
{

    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService=$orderService;
    }

    public function getOrders(Request $request){

        if ($request->isMethod('post')) {
            $pids = $request->input('pids');

            $this->orderService->getOrders($pids);

            $data = [
                'response' => Config::get('constants.success'),
                'statusCode' => Config::get('constants.api.ok'),
                'message' => 'Fetch all products'

            ];

        }
        return response()->json($data)->setStatusCode($data['statusCode']);


    }
}
