<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
    protected $table            = 'cart';
    protected $primaryKey       = 'cart_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'cart_id',
        'food_image',
        'food_name',
        'quantity',
        'price',
        'total',
        'user_id',
        'food_id',
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function update_quantity($id, $quantity) {
        // Assume price is stored in the same table
        $this->db->set('quantity', $quantity);
        $this->db->where('id', $id);
        $this->db->update('cart');
    }
    
    public function get_subtotal($id) {
        $this->db->select('quantity, price');
        $this->db->from('cart');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $item = $query->row();
    
        return $item->quantity * $item->price;
    }
    
    public function get_total() {
        $this->db->select_sum('quantity * price', 'total');
        $query = $this->db->get('cart');
        $result = $query->row();
    
        return $result->total;
    }
    
}
