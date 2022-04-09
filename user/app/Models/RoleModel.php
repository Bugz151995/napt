<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
  protected $table      = 'roles';
  protected $primaryKey = 'role_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'role_name', 'is_user'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];

  protected $validationMessages = [];
}
