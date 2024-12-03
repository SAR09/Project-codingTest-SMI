<?php

namespace App\Application\Services;
use App\Domain\Repositories\ProductRepositoryInterface;


class ProductServices
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProduct()
    {
        return $this->productRepository->getAllProducts();
    }

    public function searchProducts($searchTerm)
    {
        return $this->productRepository->searchProducts($searchTerm);
    }

    public function getProductById($id)
    {
        return $this->productRepository->getProductById($id);
    }
}
?>