<?php

namespace App\Repository;

use App\Product;
use Illuminate\Support\Facades\DB;


class OrderRepository
{

    public function getTotalWeightAndPrice($pids)
    {
        $totalPriceWeight = DB::table("products")
            ->select(DB::raw("SUM(price) as totalPrice, SUM(weight) as totalWeight"))
            ->whereIn('id', $pids)
            ->get();

        return $totalPriceWeight;

    }

    public function getProductDetails($pid)
    {
        return Product::find($pid);
    }
}