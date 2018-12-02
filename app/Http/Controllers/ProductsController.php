<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class ProductsController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }

    public function index(Request $request)
    {
        if ($request->isMethod('get')) {

            $products = $this->productService->fetchAll();

                $data = [
                    'response' => Config::get('constants.success'),
                    'statusCode' => Config::get('constants.api.ok'),
                    'message' => 'Fetch all products',
                    'products'=>$products

                ];
            }

        return response()->json($data)->setStatusCode($data['statusCode']);
    }
}
