<?php

namespace App\Models;

use CodeIgniter\Model;

class BidModel extends Model
{
  protected $table      = 'bids';
  protected $primaryKey = 'bids_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'bid_price',
    'user_id'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];

  protected $validationMessages = [];
}
