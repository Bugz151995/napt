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
    'lot_name', 'lot_price', 'lot_note', 'bid_increment', 'composition', 'weight', 'diameter', 'obverse_img', 'reverse_img', 'starts_at', 'ends_at', 'status'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'bid_increment'  => 'numeric',
  ];

  protected $validationMessages = [
    'bid_increment' => [
      'numeric' => 'Please provide a decimal number.'
    ],
  ];
}
