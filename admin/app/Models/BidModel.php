<?php

namespace App\Models;

use CodeIgniter\Model;

class BidModel extends Model
{
  protected $table      = 'bids';
  protected $primaryKey = 'bid_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'bid_price',
    'user_id',
    'lot_id'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'bid_price' => 'numeric'
  ];

  protected $validationMessages = [
    'bid_price' => [
      'numeric' => 'Please provide a decimal number. '
    ]
  ];
}
