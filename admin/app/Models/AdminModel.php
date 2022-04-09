<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
  protected $table      = 'admin';
  protected $primaryKey = 'admin_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'username',
    'password',
    'fname',
    'lname',
    'img',
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'username' => 'is_unique[users.username]',
    'password' => 'min_length[8]'
  ];

  protected $validationMessages = [
    'username' => [
      'is_unique' => 'The username has already been taken.',
    ],
    'password' => [
      'min_length' => 'The password is too short.'
    ]
  ];
}
