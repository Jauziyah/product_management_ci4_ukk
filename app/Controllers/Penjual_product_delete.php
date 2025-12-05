<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Product_model;

class Penjual_product_delete extends BaseController
{
    protected $produk_model;
    public function __construct()
    {
        $this->produk_model = new Product_model();
    }

    public function index($id)
    {
        $this->produk_model->delete($id);
        return redirect()->to('penjual/product');
    }
}