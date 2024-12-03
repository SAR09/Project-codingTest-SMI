@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">{{ $product->title }}</h1>

            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="w-full h-80 object-cover rounded-lg shadow-lg">
                </div>

                <div class="md:w-1/2 md:pl-8">
                    <div class="text-gray-700 mb-4">
                        <h3 class="text-xl font-semibold">Description</h3>
                        <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                    </div>

                    <div class="text-gray-700 mb-4">
                        <h3 class="text-xl font-semibold">Category</h3>
                        <p class="text-gray-600 mt-2">{{ $product->category }}</p>
                    </div>

                    <div class="text-gray-700 mb-4">
                        <h3 class="text-xl font-semibold">Price</h3>
                        <p class="text-gray-600 mt-2">${{ $product->price }}</p>
                    </div>

                    <div class="text-gray-700 mb-6">
                        <h3 class="text-xl font-semibold">Stock</h3>
                        <p class="text-gray-600 mt-2">{{ $product->stock }} available</p>
                    </div>

                    <div class="flex justify-center">
                        <a href="{{ url('/products') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                            Back to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
