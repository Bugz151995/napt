<?php

namespace App\Controllers;

use \App\Models\WatchlistModel;

class Watchlist extends BaseController
{        
    /**
     * authenticate the user
     *
     * @return mixed
     */
    public function create()
    {
        $model = new WatchlistModel();
        
        $id = esc($this->request->getPost('lot_id'));

        // return with error if the user is not logged in
        if (!session()->getTempdata('is_logged_in')) {
            session()->setTempdata('error', 'Action is invalid! Please login to your account.', 1);
            return redirect()->to('auctions/lot/'.$id);
        }

        $data = [
            'user_id' => session()->getTempdata('user_id'),
            'lot_id'  => $id
        ];

        $id = $model->insert($data);

        if ($id) {
            session()->setTempdata('success', 'Great! The lot was added to your watchlist.', 1);
        } else session()->setTempdata('error', 'Sorry, the lot wasn\'t added to your watchlist. Please contact the Administrator.', 1);

        return redirect()->back();
    }
    
    /**
     * Method delete
     *
     * @return void
     */
    public function delete()
    {
        
    }
}