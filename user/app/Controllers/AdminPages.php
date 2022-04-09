<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

use \App\Models\LotModel;
use \App\Models\BidModel;
use \App\Models\UserModel;

class AdminPages extends BaseController
{
    /**
     * 
     * @return mixed
     */
    public function auctions()
    {
        $uri = service('uri');
        $n2_segment = [$uri->getSegment(2)];

        $data = [
            'page' => $n2_segment,
        ];

        return view('Admin/Pages/auctions', $data);
    }

    /**
     * 
     * @return mixed
     */
    public function users()
    {
        $uri = service('uri');
        $n2_segment = [$uri->getSegment(2)];

        $data = [
            'page' => $n2_segment,
        ];

        return view('Admin/Pages/users', $data);
    }
}