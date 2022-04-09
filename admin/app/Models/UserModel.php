<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'user_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'username',
    'password',
    'fname',
    'lname',
    'fb_link',
    'user_img',
    'account_tier',
    'status'
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
