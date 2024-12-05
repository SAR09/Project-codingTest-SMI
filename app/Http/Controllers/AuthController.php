<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application\Services\AuthService;
use Illuminate\Routing\Controller;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        try{
            $user = $this->authService->login($request->username, $request->password); // Memanggil login service
            return redirect()->route('products.index')->with('success', 'Anda berhasil login');
        }catch(\Exception $e){
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }

  

    public function logout(Request $request)
    {
        $this->authService->logout(); // Memanggil logout service

        return redirect()->route('login')->with('message', 'Anda telah logout');
    }

}


?>