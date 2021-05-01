<?php

namespace App;

class User{
    protected $username;
    protected $password;

    function __construct($user,$pss){
        $this->username = $user;
        $this->password = $pass;
    }

    public function login(){
        return "$this->username Anda Berhasil Login";
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}
?>