<?php

namespace App\Controllers;

use \App\Models\UserModel;
use \App\Models\UserAddressModel;
use \App\Models\AddressModel;
use \App\Models\UserRoleModel;

class User extends BaseController
{
    /**
     * authenticate the user
     *
     * @return mixed
     */
    public function login()
    {
        $validation = \Config\Services::validation();

        if (!$this->validate($validation->getRuleGroup('login_rules')))
            return view('User/Pages/login', ['validation' => $this->validator]);

        $model = new UserModel();

        $username = esc($this->request->getPost('username'));

        $user = $model->select('users.user_id, fname, lname, is_user')
            ->where('username', $username)
            ->join('user_roles', 'user_roles.user_id = users.user_id')
            ->join('roles', 'roles.role_id = user_roles.role_id')
            ->first();

        session()->setTempdata('user_id', $user['user_id'], 28800);
        session()->setTempdata('fname', $user['fname'], 28800);
        session()->setTempdata('lname', $user['lname'], 28800);
        session()->setTempdata('is_logged_in', true, 28800);

        if (!$user['is_user'])
            return redirect()->to('admin/auction');

        return redirect()->to('/');
    }

    /**
     * save and validate signup of the user
     * 
     * @return void
     */
    public function signup()
    {
        $user_model = new UserModel();
        $uadd_model = new UserAddressModel();
        $addr_model = new AddressModel();
        $urle_model = new UserRoleModel();

        $user_opt = ['only' => ['username', 'password']];
        $user_rules = $user_model->getValidationRules($user_opt);
        $user_mesgs = $user_model->getValidationMessages();

        $addr_opt = ['only' => ['city_mun']];
        $addr_rules = $addr_model->getValidationRules($addr_opt);
        $addr_mesgs = $addr_model->getValidationMessages();

        if (!$this->validate($user_rules, $user_mesgs) && !$this->validate($addr_rules, $addr_mesgs))
            return view('User/Pages/signup', ['validation' => $this->validator]);

        $user = [
            'username'  => esc($this->request->getPost('username')),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'fname'     => esc($this->request->getPost('fname')),
            'lname'     => esc($this->request->getPost('lname')),
        ];

        $user_id = $user_model->insert($user);

        $address = [
            'street_etc'    => esc($this->request->getPost('street')),
            'city_mun'      => esc($this->request->getPost('city_mun')),
            'province'      => esc($this->request->getPost('province')),
        ];

        $addr_id = $addr_model->insert($address);

        $user_address = [
            'user_id'       => $user_id,
            'address_id'    => $addr_id
        ];

        $uadd_model->insert($user_address);

        $user_role = [
            'user_id' => $user_id
        ];

        $urle_model->insert($user_role);

        return view('User/Components/success');
    }

    /**
     * log-out the user account
     *
     * @return void
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
