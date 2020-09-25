<?php

class Login extends Route{

    private $sn = 'loginData';
    private $su = 'utilityData';

    public function index()
    {       
        $this -> bind('login/loginPage');
    }

    public function prosesLogin()
    {
        $user           = $this -> inp('username');
        $password       = $this -> inp('password');
        $passHash       = md5($password);
    }  

}
