<?php

namespace App\Models;

use CodeIgniter\Model;

class tblbookings extends Model
{
    protected $table            = 'tblbookings';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'bookingNo',
        'fullName',
         'emailId', 
         'phoneNumber',
          'bookingDate',
           'bookingTime',
            'noAdults',
             'noChildrens',
             'boookingStatus'

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

    public function searchBookings($searchData)
    {
        // Perform the search using Query Builder
        return $this->where('bookingNo', (int)$searchData)
                    ->orWhere('phoneNumber', (int)$searchData)
                    ->findAll();
    }
}
