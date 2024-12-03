<?php

namespace App\Infrastructure\API;

use Illuminate\Support\Facades\Http;
use App\Domain\Entities\User;
use App\Domain\Repositories\AuthRepositoryInterface;

class AuthApiClient implements AuthRepositoryInterface
{
    public function login($username, $password)
    {
        $response = Http::post('https://dummyjson.com/auth/login',[
            'username' => $username,
            'password' => $password,
        ]);

        $data = $response->json();
        if(!isset($data['access_token'])){
            return new User(
                $data['id'],
                $data['username'],
                $data['email'],
                $data['firstName'],
                $data['lastName'],
                $data['gender'],
                $data['image'],
                $data['accessToken'],
                $data['refreshToken']
            );
        }

        return null;

        

    }

    public function logout()
    {
        // Jika logout perlu panggilan ke API atau cukup hapus token dari session
        // Jika perlu, Anda bisa melakukan request logout ke API seperti ini:
        // $response = Http::post('https://dummyjson.com/auth/logout');

        // Menghapus token dari session
        session()->forget('access_token');

        return true;
    }

   

   
}



?>