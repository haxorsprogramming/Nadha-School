<?php

class dasbor extends Route{
    
    public function index()
    {   
        $this -> bind('dasbor/index');
    }
 
    public function beranda()
    {
        $data['aplikasi'] = '';
        $this -> bind('dasbor/beranda', $data);   
    }

    public function logOut()
    {
        $this -> destses();
        $this -> goto(HOMEBASE.'login');
    }

    public function cekInstall()
    {
        $statusFile = file_exists('INSTALL.json');
        echo $statusFile;
    }

}