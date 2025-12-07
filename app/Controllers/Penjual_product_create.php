<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Product_model;

class Penjual_product_create extends BaseController
{
    protected $produk_model;
    public function __construct()
    {
        $this->produk_model = new Product_model();
    }
    public function index()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors'=> [
                    'required'=> '{field} Kudu diisi dongo'
                ]
            ],
            'deskripsi' => 'required',
            'harga_asli' => 'required',
            'stok' => 'required',
            'image' => [
                'rules' => 'uploaded[image]',
                'errors' => [
                    'uploaded' => 'Image kudu diupload dongo'
                ]
            ],
        ])){
            return redirect()->to('penjual/product/tambah')->withInput();
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $harga_asli = $this->request->getVar('harga_asli');
        $harga_kopsis = $harga_asli * 1.2;
        $this->produk_model->save([
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga_asli' => $this->request->getVar('harga_asli'),
            'harga_kopsis' => $harga_kopsis,    
            'slug' => $slug,
            'margin' => $harga_kopsis - $harga_asli,
            'stok' => $this->request->getVar('stok'),
            'image' => $this->request->getVar('image')
        ]);

        session()->setFlashdata('pesan', 'Selamat produk berhasil ditambah');

        return redirect()->to('penjual/product');
    }
}
