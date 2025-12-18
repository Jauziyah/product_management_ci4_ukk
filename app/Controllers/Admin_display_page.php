<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin_display_page extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
}


?>