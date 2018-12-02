<?php


namespace App\Service;

use App\Repository\ProductRepository;

/**
 * Class ProductService
 * @package App\Service
 *
 * @author Sundar Ban
 */
class ProductService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * ProductService constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Returns all products
     *
     * @return \App\Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function fetchAll()
    {
        return $this->productRepository->fetchAll();
    }
}