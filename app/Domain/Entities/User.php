<?php

namespace App\Domain\Entities;

class User
{ 
    private $id;
    private $username;
    private $email;
    private $firstName;
    private $lastName;
    private $gender;
    private $image;
    private $accessToken;
    private $refreshToken;
    


    public function __construct($id, $username, $email, $firstName, $lastName, $gender, $image, $accessToken, $refreshToken)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->image = $image;
        $this->accessToken = $accessToken;
        $this->refreshToken = $refreshToken;
    }

     // Getter methods
     public function getId() { return $this->id; }
     public function getUsername() { return $this->username; }
     public function getEmail() { return $this->email; }
     public function getFirstName() { return $this->firstName; }
     public function getLastName() { return $this->lastName; }
     public function getGender() { return $this->gender; }
     public function getImage() { return $this->image; }
     public function getAccessToken() { return $this->accessToken; }
     public function getRefreshToken() { return $this->refreshToken; }
}



?>