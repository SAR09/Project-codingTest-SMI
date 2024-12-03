<?php

namespace App\Http\Controllers;

use App\Application\Services\ProductServices;
use Illuminate\Routing\Controller ;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productServices;

    public function __construct(ProductServices $productServices)
    {
        $this->productServices = $productServices;
    }

    public function index(Request $request)
    {
        // Ambil data pencarian dari query string
        $searchTerm = $request->input('search'); // Misalnya: 'phone'

        // Ambil produk berdasarkan pencarian, atau ambil semua produk jika tidak ada pencarian
        $products = $this->productServices->searchProducts($searchTerm);

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = $this->productServices->getProductById($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found');
        }


        return view('products.show', compact('product'));
    }
}