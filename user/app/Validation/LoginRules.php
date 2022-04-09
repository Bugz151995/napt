<?php

namespace App\Validation;

use App\Models\UserModel;

class LoginRules {
  public function verify_username(string $str, string $fields, array $data) : bool {
    $model = new UserModel();

    $user = $model->where('username', $data['username'])->first();

    return (!$user) ? false : true;
  }

  public function verify_password(string $str, string $fields, array $data) : bool {
    $model = new UserModel();

    $user = $model->where('username', $data['username'])->first();

    return (!$user) ? false : password_verify($data['password'], $user['password']);
  }

  public function login_attempt(string $str) {
    $throttler = \Config\Services::throttler();
    $allow = $throttler->check(base_url().'login', 3, MINUTE);

    return $allow;
  }
}