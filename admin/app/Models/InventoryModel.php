<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
  protected $table      = 'inventories';
  protected $primaryKey = 'inventory_id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = [
    'item_name',
    'unit_price',
    'composition',
    'weight',
    'diameter',
    'obverse_img',
    'reverse_img',
    'in_stock',
    'in_live',
    'in_unsold',
    'in_sold',
  ];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'item_name'   => 'max_length[90]',
    'unit_price'  => 'numeric',
    'weight'      => 'numeric|permit_empty',
    'diameter'    => 'numeric|permit_empty',
    'obverse_img' => 'is_image[obverse_img]',
    'reverse_img' => 'is_image[reverse_img]',
    'in_stock'    => 'numeric',
    'in_live'     => 'numeric|permit_empty',
    'in_unsold'   => 'numeric|permit_empty',
    'in_sold'     => 'numeric|permit_empty',
  ];

  protected $validationMessages = [
    'item_name'   => [
      'max_length' => 'Please keep the length of the name shorter than 90 characters'
    ],
    'unit_price'  => [
      'numeric' => 'Please provide a decimal number'
    ],
    'in_stock'  => [
      'numeric' => 'Please provide a decimal number'
    ],
    'weight'      => [
      'numeric' => 'Please provide a decimal number'
    ],
    'diameter'    => [
      'numeric' => 'Please provide a decimal number'
    ],
    'obverse_img' => [
      'is_image' => 'Please provide an image file'
    ],
    'reverse_img' => [
      'is_image' => 'Please provide an image file'
    ],
  ];
}
