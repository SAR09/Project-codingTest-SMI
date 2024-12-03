
    <!-- Menampilkan Navigasi Jika Bukan Halaman Login -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">Product-API</a>
            @if(request()->route()->getName() != 'login')
            <div class="flex items-center">
                    <!-- Tombol Logout -->
                    <form action="{{ route('logout') }}" method="POST" class="ml-4">
                        @csrf
                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-200">
                            Logout
                        </button>
                    </form>
            </div>
            @endif
        </div>
    </nav>

