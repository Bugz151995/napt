<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

use \App\Models\InventoryModel;
use \App\Models\LotModel;
use \App\Models\UserModel;
use \App\Models\CompanyInfoModel;
use \App\Models\BidModel;

class Pages extends BaseController
{
    /**
     * show auctions
     *
     * @return void
     */
    public function showAuctions()
    {
        $uri = service('uri');
        $page = [$uri->getSegment(1)];

        $data = [
            'page'        => $page
        ];

        return view('Pages/auctions', $data);
    }

    /**
     * show users
     *
     * @return void
     */
    public function showUsers()
    {
        $time = new Time('now');
        $uri = service('uri');
        $page = [$uri->getSegment(1)];
        $model = new UserModel();

        $data = [
            'page'  => $page,
            'users' => $model->findAll(),
            'Time'  => $time
        ];

        return view('Pages/users', $data);
    }
}