<?php

namespace App\Models;

use CodeIgniter\Model;

class LotModel extends Model
{
  protected $table      = 'lots';
  protected $primaryKey = 'lot_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'quantity',
    'reserve_price',
    'estimate_price',
    'bid_increment',
    'starts_at',
    'ends_at',
    'inventory_id',
    'status',
    'is_featured'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'reserve_price'  => 'numeric',
    'estimate_price' => 'numeric',
    'bid_increment'  => 'numeric',
  ];

  protected $validationMessages = [
    'reserve_price' => [
      'numeric' => 'Please provide a decimal number.'
    ],
    'estimate_price' => [
      'numeric' => 'Please provide a decimal number.'
    ],
    'bid_increment' => [
      'numeric' => 'Please provide a decimal number.'
    ],
  ];
}
