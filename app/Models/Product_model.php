<?php 

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
    protected $table            = 'produk';
    protected $allowedFields    = ['nama', 'deskripsi', 'harga_asli', 'harga_kopsis', 'margin', 'stok', 'slug', 'image', 'created_at', 'updated_at'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function get_detail_product($slug)
    {
        return $this->where(['slug' => $slug])->first();
    }

}


?>