<?php

class home extends Route{

    public function __construct()
    {
        $this -> st = new state;
    }

    public function index()
    {     
        echo "Dari";
    }

}