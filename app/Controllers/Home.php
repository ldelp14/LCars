<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('boasvindas');
    }
    public function catalogo(): string
    {
        return view('catalogo');
    }
    public function carrinho(): string
    {
        return view('carrinho');
    }
    
}
