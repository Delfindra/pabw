<?php

namespace App\Controllers;

class product extends BaseController
{
    public function index()
    {
        // echo view('layout/template');
        echo view('layout/navbar');
        echo view('pages/product');
    }
}
