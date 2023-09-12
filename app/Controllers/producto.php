<?php

namespace App\Controllers;


use App\Models\ProductoModel;

class Producto extends BaseController
{

    
    public function index()
    {

        echo "hola productos";
     
    $productoModel = new ProductoModel();

    echo view('index', [

        'productos'=>$productoModel->findAll(),
    ]);

    }

    public function new(){

        echo "new";

    }

    public function show($id){

        $productoModel = new ProductoModel();

        

        echo view('producto/show',[
            'productos'=>$productoModel->find($id)
        ]);


      



    }


}
