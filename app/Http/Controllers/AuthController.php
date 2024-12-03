<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application\Services\AuthService;
use Illuminate\Routing\Controller;


class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(Request $request)
    {
        //validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // cek credentials login
        $credentials = $request->only('username', 'password');
        $user = $this->authService->login($credentials['username'], $credentials['password']);

        if ($user) {
            // mengembalikan ke halaman products jika login sukses
            return redirect()->route('products.index');
        }

        return back()->withErrors([
            'login_failed' => 'Gagal login, silahkan cek username dan password anda',
        ]);
    }

  

    public function logout(Request $request)
    {
        $this->authService->logout(); // Memanggil logout service

        return redirect()->route('login')->with('message', 'Anda telah logout');
    }

}


?>