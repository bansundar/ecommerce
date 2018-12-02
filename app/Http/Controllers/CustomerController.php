<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\OrderService;
use Illuminate\Support\Facades\Config;

/**
 * Class CustomerController
 * @package App\Http\Controllers
 *
 * Controller that provide APIs:
 * POST     /api/v1/customers/orders
 *
 * @author Sundar Ban
 */
class CustomerController extends Controller
{
    /**
     * @var OrderService
     */
    protected $orderService;

    /**
     * CustomerController constructor.
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * API to fetch the Orders of Customer
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrders(Request $request)
    {
        $data = ['statusCode' => Config::get('constants.api.bad_request')];

        if ($request->isMethod('post')) {
            $pids = $request->input('pids');

            //fetch customer orders
            $orders = $this->orderService->getOrders($pids);

            $data = [
                'response' => Config::get('constants.success'),
                'statusCode' => Config::get('constants.api.ok'),
                'message' => 'Fetch all orders',
                'orders' => $orders

            ];

        }
        return response()->json($data)->setStatusCode($data['statusCode']);
    }
}
