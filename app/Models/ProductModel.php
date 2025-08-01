<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price', 'image', 'stock'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getProducts($limit = false)
    {
        if($limit) {
            return $this->orderBy('created_at', 'DESC')->findAll($limit);
        }
        return $this->orderBy('created_at', 'DESC')->findAll();
    }
}
