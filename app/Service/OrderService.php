<?php

namespace App\Service;


use App\Repository\OrderRepository;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository=$orderRepository;
    }

    public function getOrders($pids)
    {
       return $this->orderRepository->getOrders($pids);
    }
}