<?php

namespace App\Controllers;

use \App\Models\BidModel;

class Bidding extends BaseController
{        
    /**
     * authenticate the user
     *
     * @return mixed
     */
    public function create()
    {
        $model = new BidModel();        
        $id = esc($this->request->getPost('lot_id'));

        // return with error if the user is not logged in
        if (!session()->getTempdata('is_logged_in')) {
            session()->setTempdata('error', 'Bid is invalid. Please login to your account.', 1);
            return redirect()->to('auctions/lot/'.$id);
        }

        $data = [
            'bid_price' => esc($this->request->getPost('bid_price')),
            'user_id'   => session()->getTempdata('user_id'),
            'lot_id'    => $id
        ];

        $id = $model->insert($data);

        if ($id) {
            session()->setTempdata('success', 'Yay! Your bid was successfully created!', 1);
        } else session()->setTempdata('error', 'Sorry, your bid was not created. Please contact the Administrator.', 1);

        return redirect()->back();
    }
}