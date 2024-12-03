@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar Produk</h1>

    <!-- Form Pencarian -->
    <div class="mb-6 flex justify-center">
        <form action="{{ url('/products') }}" method="GET" class="flex">
            <input type="text" name="search" value="{{ request()->query('search') }}" class="px-4 py-2 border border-gray-300 rounded-l-lg" placeholder="Cari produk...">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700 transition duration-200">
                Cari
            </button>
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($products as $product)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="h-48 w-full bg-gray-200 flex items-center justify-center">
                    @if(is_array($product->images) && count($product->images) > 0)
                        <img src="{{ $product->images[0] }}" alt="{{ $product->title }}" class="h-full w-full object-cover">
                    @else
                        <span class="text-gray-500">No Image</span>
                    @endif
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $product->title }}</h2>
                    <p class="text-gray-600 text-sm mt-1">{{ $product->description }}</p>
                    <p class="text-gray-600 text-sm mt-1">Kategori: {{ $product->category }}</p>
                    <p class="text-green-600 font-bold mt-2">Harga: ${{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="text-gray-500 text-sm mt-1">Stok: {{ $product->stock }}</p>
                    <a href="{{ route('products.show', $product->id) }}"> 
                    <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">Lihat Detail</button>
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center text-gray-600">Tidak ada produk yang tersedia.</p>
        @endforelse
    </div>
@endsection
