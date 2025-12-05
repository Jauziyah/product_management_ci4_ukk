<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\Product_model;

class Penjual_product_update extends BaseController{
    protected $produk_model;
    public function __construct()
    {
        $this->produk_model = new Product_model();
    }

    public function index($id)
    {

        $old_name = $this->produk_model->get_detail_product($this->request->getVar('slug'));
        if ($old_name['nama'] == $this->request->getVar('nama')){
            $rule_judul = 'required';
        } else{
            $rule_judul = 'required';
        }
        if (!$this->validate([
            'nama' => [
                'rules' => $rule_judul,
                'errors'=> [
                    'required'=> '{field} Kudu diisi dongo'
                ]
            ]
        ])){

            $validation = \Config\Services::validation();
            return redirect()->to('penjual/product/tambah')->withInput()->with('validation', $validation);
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $harga_asli = $this->request->getVar('harga_asli');
        $harga_kopsis = $harga_asli * 1.2;
        
        $this->produk_model->save([
            'id' =>$id,
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga_asli' => $this->request->getVar('harga_asli'),
            'harga_kopsis' => $harga_kopsis,    
            'slug' => $slug,
            'margin' => $harga_kopsis - $harga_asli,
            'stok' => $this->request->getVar('stok'),
        ]);

        session()->setFlashdata('pesan', 'Selamat produk berhasil diedit');

        return redirect()->to('penjual/product',);
    }
}