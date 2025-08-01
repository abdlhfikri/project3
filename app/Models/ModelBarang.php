<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarang extends Model
{
    protected $table = 'cart';
    public function getBarang()
    {
        return $this->findAll();
    }
}