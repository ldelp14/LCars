<?php

namespace App\Controllers;

use App\Models\CarrosModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CarroController extends BaseController
{
    protected CarrosModel $carro;

    public function __construct()
    {
        $this->carro = new CarrosModel();
    }

    public function index()
    {
        $data['listaDeCarros'] = $this->carro->findAll();

        //return view('welcome_message', $data);
        return view('vitrine', $data);
    }
}
