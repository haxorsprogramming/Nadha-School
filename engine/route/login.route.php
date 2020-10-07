<?php

class Login extends Route{

    private $sn = 'loginData';
    private $su = 'utilityData';

    public function index()
    {   
        $foto = "12";
        $data['cover_pic'] = substr(str_shuffle($foto),0,1);
        $this -> bind('login/loginPage', $data);
    }

    public function prosesLogin()
    {
        $user           = $this -> inp('username');
        $password       = $this -> inp('password');
        $passHash       = md5($password);
    }  

}
