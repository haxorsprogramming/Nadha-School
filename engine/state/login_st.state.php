<?php
class login_st{

    private $tbl = 'tbl_user';
    private $st;


    public function __construct()
    {
    $this -> st = new state;
    }

    public function loginProses($user, $passHash)
    {
        $this -> st -> query("SELECT id FROM tbl_user WHERE username='$user' AND password='$passHash';");
        return $this -> st -> numRow();
    }

}