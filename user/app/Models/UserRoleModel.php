<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model
{
  protected $table      = 'user_roles';
  protected $primaryKey = 'user_role_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'user_id', 'role_id'
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [];

  protected $validationMessages = [];
}
