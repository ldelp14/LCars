<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('boasvindas');
    }
    public function fun1(): string
    {
        return view('tela1');
    }
    public function fun2(): string
    {
        return view('tela2');
    }
    
}
