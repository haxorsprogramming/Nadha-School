<?php

class login extends Route{

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
        $user = $this -> inp('username');
        $password = $this -> inp('password');
        $userPasswordDb = $this -> state($this -> sn) -> getPassword($user);
        $checkPassword  = $this -> verifPassword($password, $userPasswordDb);

        if($checkPassword === true){
            $_SESSION['userSession'] = $user;
            $data['status_login'] = 'sukses';
        }else{
            $data['status_login'] = 'gagal';
        }
        echo json_encode($data);
    }  

}
