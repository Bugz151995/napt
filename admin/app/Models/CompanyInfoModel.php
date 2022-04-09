<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyInfoModel extends Model
{
  protected $table      = 'company_info';
  protected $primaryKey = 'company_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';

  protected $allowedFields = [
    'mission',
    'vision',
    'intro'
  ];
}