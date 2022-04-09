<?php

namespace App\Controllers;

use \App\Models\UserModel;

class User extends BaseController
{
    /**
     * update an account
     *
     * @return mixed
     */
    public function update()
    {
        $model = new UserModel();

        $id = esc($this->request->getPost('user_id'));

        $data = [
            'fname'        => esc($this->request->getPost('fname')),
            'lname'        => esc($this->request->getPost('lname')),
            'fb_link'      => esc($this->request->getPost('fb_link')),
            'account_tier' => esc($this->request->getPost('account_tier')),
        ];

        $uname_db = $model->select('username')->where('user_id', $id)->first();
        $username = esc($this->request->getPost('username'));

        if ($uname_db['username'] !== $username)
            $data['username'] = $username;

        $password = esc($this->request->getPost('password'));

        if ($password)
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'A user account was successfully approved.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong, please contact the sytem support.', 1);

        return redirect()->back();
    }

    /**
     * approve an account
     *
     * @return mixed
     */
    public function approve()
    {
        $model = new UserModel();

        $id = esc($this->request->getPost('user_id'));

        $data = [
            'account_tier' => 'N',
            'status'       => 'A'
        ];

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'A user account was successfully approved.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong, please contact the sytem support.', 1);

        return redirect()->back();
    }

    /**
     * unblock an account
     *
     * @return mixed
     */
    public function unblock()
    {
        $model = new UserModel();
        $id = esc($this->request->getPost('user_id'));

        $data = [
            'status' => 'A'
        ];

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'A user account was successfully activated.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong, please contact the sytem support.', 1);

        return redirect()->back();
    }

    /**
     * block an account
     *
     * @return mixed
     */
    public function block()
    {
        $model = new UserModel();
        $id = esc($this->request->getPost('user_id'));

        $data = [
            'status' => 'B'
        ];

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'A user account was successfully blocked.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong, please contact the sytem support.', 1);

        return redirect()->back();
    }

    /**
     * deny an account
     *
     * @return mixed
     */
    public function deny()
    {
        $model = new UserModel();
        $id = esc($this->request->getPost('user_id'));

        $data = [
            'status' => 'D'
        ];

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'A user account was successfully denied.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong, please contact the sytem support.', 1);

        return redirect()->back();
    }

    /**
     * delete an account
     *
     * @return mixed
     */
    public function delete()
    {
        $model = new UserModel();
        $id = esc($this->request->getPost('user_id'));

        $res = $model->update($id);

        if ($res)
            session()->setTempdata('success', 'A user account was successfully deleted.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong, please contact the sytem support.', 1);

        return redirect()->back();
    }

    /**
     * fetch a user
     *
     * @param string $id [user_id]
     *
     * @return string<JSON>
     */
    public function fetch($id)
    {
        $model = new UserModel();

        $data = $model->find($id);
        return json_encode($data);
    }
}
