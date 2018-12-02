<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ProductService;
use Illuminate\Support\Facades\Config;

/**
 * Class ProductController
 * @package App\Http\Controllers
 *
 * Controller that provide APIs:
 * POST     /api/v1/products
 *
 * @author Sundar Ban
 */

class ProductController extends Controller
{
    /**
     * @var ProductService
     */
    protected $productService;

    /**
     * ProductController constructor.
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }

    /**
     * API to fetch all the products
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $data = ['statusCode' => Config::get('constants.api.bad_request')];

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
