<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

use \App\Models\LotModel;
use \App\Models\BidModel;
use \App\Models\UserModel;

class UserPages extends BaseController
{
    /**
     * display the login form
     * destroy the session every time 
     * the user comes back to this page
     *
     * @return mixed
     */
    public function login()
    {
        session()->destroy();
        return view('User/Pages/login');
    }

    /**
     * display the signup form
     *
     * @return mixed
     */
    public function signup()
    {
        return view('User/Pages/signup');
    }

    /**
     * display the account
     *
     * @return mixed
     */
    public function account()
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];
        $data = [
            'page' => $n1_segment,
        ];
        
        return view('Pages/account', $data);
    }

    /**
     * Method home
     *
     * @return mixed
     */
    public function home()
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];

        $data = ['page' => $n1_segment];

        return view('User/Pages/home', $data);
    }

    /**
     * Method auctions
     *
     * @return mixed
     */
    public function auctions()
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];

        $data = ['page' => $n1_segment];

        return view('User/Pages/auctions', $data);
    }

    /**
     * Method  lot
     *
     * @return mixed
     */
    public function lot($id)
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];

        $data = [
            'page' => $n1_segment
        ];

        return view('Pages/lot', $data);
    }

    /**
     * Method bids
     *
     * @return mixed
     */
    public function biding()
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];

        $data = [
            'page' => $n1_segment
        ];

        return view('User/Pages/bids', $data);
    }

    /**
     * Method watchlist
     *
     * @return mixed
     */
    public function watchlist()
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];

        $data = [
            'page' => $n1_segment
        ];

        return view('User/Pages/watchlist', $data);
    }

    /**
     * Method aboutus
     *
     * @return mixed
     */
    public function aboutus()
    {
        $uri = service('uri');
        $n1_segment = [$uri->getSegment(1)];

        $mission = "We aim to achieve client's satisfaction through simple but valuable numismaticitems which wil feature Philippine Commemorative Events, Culture, Arts and Tradition, Prominent Filipinos, and others which will rekindle the true Filipino spirit of patriotism and sense of national pride.";

        $vision = "Numisworks Auction Product Trading, a recognized institution helping amateur numismatists to share and guide if what is the true essence of collecting while engaging in business.";

        $intro = "Inspired by the hobby and a tribute to the dream of his late father Amaro Baleta Sr. the Numisworks Auction Product Trading (NAPT) was conceptualized by Amaro Baleta Jr. on February 22, 2019. To pursue his passion for numismatics, his formally registered the business name: NAPT at the Department of Trade and Industry of the Philippine Government on January 28, 2021.";

        $data = [
            'page'    => $n1_segment,
            'mission' => $mission,
            'vision'  => $vision,
            'intro'   => $intro,
        ];

        return view('User/Pages/about_us', $data);
    }
}