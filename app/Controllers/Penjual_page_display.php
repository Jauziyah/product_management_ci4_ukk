<?php

namespace App\Controllers;
use App\Models\Produk_model;

class Penjual_page_display extends BaseController{
    protected $produk_model;

    public function __construct() {
        $this->produk_model = new Produk_model();
    }

    public function index()
    {
        $data = [
            'list_produk' => $this->produk_model->get_detail()
        ];
        return view('penjual/product', data: $data);
    }

    public function detail($slug){
        $data = [
            'produk' =>$this->produk_model->get_detail($slug)
        ];
        return view('penjual/detail_produk', $data);
    }
}
