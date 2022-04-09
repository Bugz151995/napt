<?php

namespace App\Controllers;

use \App\Models\AdminModel;

class Admin extends BaseController
{        
    /**
     * authenticate the admin
     *
     * @return mixed
     */
    public function login()
    {
        $validation = \Config\Services::validation();

        if (!$this->validate($validation->getRuleGroup('login_rules'))) 
            return view('Pages/login', ['validation' => $this->validator]);
        
        $model = new AdminModel();

        $username = esc($this->request->getPost('username'));
        
        $user = $model->select('admin_id')->where('username', $username)->first();

        session()->setTempdata('admin_id', $user, 28800);
        session()->setTempdata('is_logged_in', true, 28800);
        session()->setTempdata('welcome_message', 'Welcome', 1);

        return redirect()->to('dashboard');
    }
        
    /**
     * log-out the user account
     *
     * @return void
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}