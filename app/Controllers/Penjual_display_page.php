<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Users;
use App\Models\Product_model;
use App\Models\Users_model;
use CodeIgniter\CodeIgniter;
use Exception;

class Penjual_display_page extends BaseController
{
    protected $produk_model;
    protected $user_model;
    public function __construct()
    {
        $this->produk_model = new Product_model();
        $this->user_model = new Users_model();
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
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tidak ada yang namanya ' . $slug);
        }
        return view('penjual/detail_product', $data);
    }

    public function create_product()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('penjual/create_product', $data);
    }
    
    public function edit_product($slug)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'produk' => $this->produk_model->get_detail_product($slug)
        ];
        return view('penjual/edit_produk', $data);
    }

    public function users()
    {
        $current_page = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
        $keyword = $this->request->getVar('keyword_users');

        if($keyword){
            $user = $this->user_model->search_user($keyword);
        } else{
            $user = $this->user_model;
        }

        $data = [
            'users' => $user->paginate(7, 'users'),
            'pager' => $this->user_model->pager,
            'current_page' => $current_page,
            'keyword' => $keyword
        ];
        return view('penjual/users', $data);
    }
}


?>