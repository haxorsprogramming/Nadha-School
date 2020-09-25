<?php

class loginData{
    
    private $st;

    public function __construct()
    {
        $this -> st = new state;
    }

    public function getPassword($username)
    {
        $this -> st -> query("SELECT password FROM tbl_user WHERE username='$username';");
        $qUser = $this -> st -> querySingle();
        return $qUser['password'];
    }

}