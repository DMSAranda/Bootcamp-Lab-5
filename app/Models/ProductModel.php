<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'quantity'];

    public function getProducts()
    {
        return $this->findAll();
    }

    public function getProduct($id)
    {
        return $this->where('id', $id)->first();
    }

    // Agrega métodos para crear, editar y eliminar publicaciones si lo deseas
}