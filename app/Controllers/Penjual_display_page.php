<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product_model;
use CodeIgniter\CodeIgniter;
use Exception;

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

        if (empty($data['produk'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tidak ada yang namanya' . $slug);
        }
        return view('penjual/detail_product', $data);
    }

    public function create_product()
    {
        return view('penjual/create_product');
    }
}


?>