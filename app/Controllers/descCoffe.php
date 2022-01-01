<?php

namespace App\Controllers;

class descCoffe extends BaseController
{
    public function index()
    {
        echo view('layout/template');
        echo view('layout/navbar');
        echo view('pages/descCoffe');
    }
}
