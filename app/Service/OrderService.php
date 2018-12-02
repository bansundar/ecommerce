<?php

namespace App\Service;


use App\Repository\OrderRepository;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getOrders($pids)
    {
      $orders = [];
        $totalWeight = $totalSum = 0;


        foreach ($pids as $pid) {
            $productDetails = $this->orderRepository->getProductDetails($pid);
            $totalSum += $productDetails->price;
            $totalWeight += $productDetails->weight;
            $items[] = $productDetails->name;

            if ($totalSum <= 250) {
                $packageArr=[
                    'items'=>implode(',',$items),
                    'totalWeight'=>$totalWeight,
                    'price'=>$totalSum,
                    'courierPrice'=>20
                ];

                array_push($orders,$packageArr);
            }

        }
        return $orders;
    }
}