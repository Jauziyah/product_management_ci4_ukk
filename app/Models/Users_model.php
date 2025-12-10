<?php 

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = ['name', 'address', 'email', 'created_at', 'updated_at'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function search_user($keyword)
    {
        // $builder = $this->table('users');
        // $builder->like('name', $keyword);
        // return $builder;

        return $this->table('users')->like('name', $keyword);
    }

}


?>