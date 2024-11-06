<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->getProducts();

        return view('product/index', $data);
    }

    public function view($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->getProduct($id);

        return view('product/view', $data);
    }

    public function create()
    {
        return view('product/create');
    }

    public function update($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->getProduct($id);

        return view('product/update', $data);
    }

    public function store()
    {
        helper('form');
        
        $model = new ProductModel();

        $data = [
            'name'   => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('quantity')
        ];

        $model->insert($data);

        return redirect()->to('products');
    }
   
    // Agrega métodos para crear, editar y eliminar publicaciones si lo deseas


    public function edit()
    {
        helper('form');
        
        $model = new ProductModel();

        $id = $this->request->getPost('id');

        $data = [
            'name'   => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('quantity')
        ];

        $model->update($id, $data);

        return redirect()->to('products');
    }

    public function delete()
    {
        $model = new ProductModel();

        $model->delete();

        return redirect()->to('products');
    }
}