<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rulus()
    {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }
}

?>