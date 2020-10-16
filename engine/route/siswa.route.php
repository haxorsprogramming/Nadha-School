<?php

class siswa extends Route{
    
    private $sn = 'dasborData';
    private $su = 'utilityData';

    public function index()
    {   
    
    }

    public function daftarSiswa()
    {
        $this -> bind('dasbor/siswa/daftarSiswa');
    }
 
}