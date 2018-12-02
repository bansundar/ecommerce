<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;


class OrderRepository
{

    public function getOrders($pids)
    {
        $data = DB::table("products")
            ->select(DB::raw("SUM(price) as totalPrice, SUM(weight) as totalWeight"))
            ->whereIn('id',$pids)
            ->get();
        print_r($data);
        exit;
    }
}