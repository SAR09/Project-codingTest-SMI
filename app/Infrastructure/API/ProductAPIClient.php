<?php
namespace App\Infrastructure\API;

use App\Domain\Repositories\ProductRepositoryInterface;
use App\Domain\Entities\Product;
use Illuminate\Support\Facades\Http;

class ProductAPIClient implements ProductRepositoryInterface
{
    public function getAllProducts()
    {
        $response = Http::get('https://dummyjson.com/products');
        $data = $response->json()['products'] ?? []; // Ambil key 'products'
    
        return array_map(function ($item) {
            return new Product(
                $item['id'],
                $item['images'],
                $item['title'],
                $item['description'],
                $item['category'],
                $item['price'],
                $item['stock']
            );
        }, $data);
    }

    public function searchProducts($searchTerm)
    {
        $response = Http::get('https://dummyjson.com/products/search', [
            'q' => $searchTerm, // Mengirimkan parameter pencarian ke API
        ]);

        $data = $response->json()['products'] ?? []; // Ambil data produk dari response

        // Jika data kosong, kembalikan array kosong
        if (empty($data)) {
            return [];
        }

        // Kembalikan hasil pencarian sebagai array of Product entities
        return array_map(function ($item) {
            return new Product(
                $item['id'],
                $item['images'],
                $item['title'],
                $item['description'],
                $item['category'],
                $item['price'],
                $item['stock']
            );
        }, $data);
    }

    public function getProductById($id)
    {
        $response = Http::get('https://dummyjson.com/products/' . $id);
        $data = $response->json(); // Ambil data produk dari response

        // Jika data kosong, kembalikan null
        if (empty($data)) {
            return null;
        }

        // Kembalikan hasil pencarian sebagai Product entity
        return new Product(
            $data['id'],
            $data['images'],
            $data['title'],
            $data['description'],
            $data['category'],
            $data['price'],
            $data['stock']
        );
    }

}