<?php

namespace App\Service;

use App\Repository\OrderRepository;

/**
 * Class OrderService
 * @package App\Service
 *
 * @author Sundar Ban
 */
class OrderService
{
    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * OrderService constructor.
     * @param OrderRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * TODO: work on the order fetch function
     * Return Order of the Customer
     *
     * @param $pids
     * @return array
     */
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