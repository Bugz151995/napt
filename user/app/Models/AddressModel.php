<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
  protected $table      = 'address';
  protected $primaryKey = 'address_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'street_etc',
    'city_mun',
    'province'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'city_mun' => 'required'
  ];

  protected $validationMessages = [
    'city_mun' => [
      'required' => 'Please provide your City/Municipality.'
    ]
  ];
}
