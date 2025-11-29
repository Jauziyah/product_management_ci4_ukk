<?php 

Namespace App\Models;
use CodeIgniter\Model;

class Produk_model extends Model{
    protected $table = 'produk';
    protected $allowedFields = ['id', 'nama', 'deskripsi', 'harga_asli', 'harga_kopsis', 'margin', 'stok', 'image', 'created_at', 'updated_at'];
    protected $updatedField = 'updated_at';
    protected $createdField = 'created_at';

    public function get_detail($slug = false){
        if( $slug == false)
        {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}

?>