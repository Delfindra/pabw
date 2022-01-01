<?php

namespace App\Controllers;

class about extends BaseController
{
    public function index()
    {
        echo view('layout/template');
        echo view('layout/navbar');
        echo view('pages/about');
    }
}

