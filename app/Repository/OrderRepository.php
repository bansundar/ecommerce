<?php

namespace App\Repository;

use App\Product;

/**
 * Class OrderRepository
 * @package App\Repository
 *
 * @author Sundar Ban
 */
class OrderRepository
{
    /**
     * return product details by ID
     *
     * @param $pid
     * @return mixed
     */
    public function getProductDetails($pid)
    {
        return Product::find($pid);
    }
}