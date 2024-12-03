<?php
namespace App\Domain\Repositories;

interface ProductRepositoryInterface
{
    public function getAllProducts();

    public function searchProducts($searchTerm);

    public function getProductById($id);

}
?>