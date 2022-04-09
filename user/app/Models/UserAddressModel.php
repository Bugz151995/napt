<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAddressModel extends Model
{
  protected $table      = 'user_address';
  protected $primaryKey = 'user_address_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'user_id', 'address_id'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];

  protected $validationMessages = [];
}
