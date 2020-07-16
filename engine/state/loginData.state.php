<?php

class loginData{
    
    private $st;

    public function __construct()
    {
    $this -> st = new state;
    }

    public function loginProses($user, $passHash)
    {
        $this -> st -> query("SELECT id FROM tbl_user WHERE username='$user' AND password='$passHash' AND active='1';");
        return $this -> st -> numRow();
    }

    public function verifikasiLogin($user, $passHash)
    {

    }
}