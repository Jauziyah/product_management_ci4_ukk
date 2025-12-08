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

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Kudu diisi dongo'
                ]
            ],
            'deskripsi' => 'required',
            'harga_asli' => 'required',
            'stok' => 'required',
            'image' => [
                'rules' => 'max_size[image, 2045]',
                'errors' => [
                    'uploaded' => 'Image kudu diupload dongo'
                ]
            ],
        ])) {
            $data = [
                'validation' => $this->validator  // ← pass current validator instance
            ];
            return view('penjual/create_product', $data);
        }

        $produk_image = $this->request->getFile('image');

        if($produk_image->getError() == 4){
            $produk_image_name = $this->request->getVar('old_image');
        } else{
            $produk_image_name = $produk_image->getRandomName();
            $produk_image->move('uploads/product', $produk_image_name);
            unlink('uploads/product/' . $this->request->getVar('old_image'));
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
            'image' =>$produk_image_name
        ]);

        session()->setFlashdata('pesan', 'Selamat produk berhasil diedit');

        return redirect()->to('penjual/product',);
    }
}