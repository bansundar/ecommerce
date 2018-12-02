<?php

namespace App\Repository;

use App\Product;

class ProductRepository
{

    public function fetchAll()
    {
        return Product::all();
    }
}