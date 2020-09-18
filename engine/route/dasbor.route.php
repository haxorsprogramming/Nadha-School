<?php

class home extends Route{

    public function __construct()
    {
    $this -> st = new state;
    
    }

    public function index()
    {     
        $this -> cekUserLogin('userSes', 'login');
        $this -> bind('/dasbor/index');
    }
 
    public function beranda()
    {
        $data['aplikasi'] = '';
        $this -> bind('/dasbor/beranda', $data);   
    }

    public function logOut()
    {
        $this -> destses();
        $this -> goto(HOMEBASE.'login');
    }

}