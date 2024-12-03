<?php

namespace App\Application\Services;

use App\Domain\Entities\User;
use App\Domain\Repositories\AuthRepositoryInterface;

class AuthService{
    protected $authRepository;


    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login($username, $password)
    {
        $user = $this->authRepository->login($username, $password);

        if($user instanceof User){
            // proses sukses, bisa simpan token ke session atau ke cookie
            session(['access_token' => $user->getAccessToken()]);
            return $user;
        }

        return null;
    }

    public function logout()
    {
        // Panggil method logout pada AuthApiClient
        $this->authRepository->logout();

        // Hapus token dari session dan return true jika berhasil logout
        return true;
    }
   
}

?>