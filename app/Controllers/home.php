<?php

namespace App\Controllers;


use App\Models\ProductoModel;

class Home extends BaseController
{
    public function index(): string
    {
       
        $productoModel = new ProductoModel();
        
        return view('welcome_message', [

            'productos'=>$productoModel->findAll(),
        ]);
      
    }


    public function hola()
    {
        
        echo "hola seba";
    }
}
