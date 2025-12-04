<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Penjual_display_page extends BaseController
{
    public function index()
    {
        return view('penjual/dashboard');
    }
    public function product()
    {
        return view('penjual/product');
    }
}


?>