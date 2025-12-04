<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product_model;

class Penjual_display_page extends BaseController
{
    protected $produk_model;
    public function __construct()
    {
        $this->produk_model = new Product_model();
    }
    public function index()
    {
        return view('penjual/dashboard');
    }

    public function product()
    {
        $data = [
            'list_produk' => $this->produk_model->findAll()
        ];
        return view('penjual/product', $data);
    }

    public function detail_produk($slug)
    {
        $data = [
            'produk' =>  $this->produk_model->get_detail_product($slug)
        ];
        return view('penjual/detail_product', $data);
    }
}


?>