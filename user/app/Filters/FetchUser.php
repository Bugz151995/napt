<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use \App\Models\UserModel;

class FetchUser implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $model = new UserModel();

        $id = session()->getTempdata('user_id');
        $is_logged_in = session()->getTempdata('is_logged_in');

        $user = $model->where('user_id', $id)->first();

        if(!$is_logged_in)
            return redirect()->to('login');

        session()->setFlashdata('user_info', $user);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}