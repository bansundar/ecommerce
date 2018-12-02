<?php

namespace App\Repository;

use App\Product;

/**
 * Class ProductRepository
 * @package App\Repository
 *
 * @author  Sundar Ban
 */
class ProductRepository
{
    /**
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function fetchAll()
    {
        return Product::all();
    }
}