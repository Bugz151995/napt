<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

use \App\Validation\LoginRules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        LoginRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    
    public $login_rules = [
        'username' => [
            'rules' => 'verify_username[username]',
            'errors' => [
                'verify_username' => 'The username is incorrect.'
            ]
        ],
        'password' => [
            'rules' => 'verify_password[username, password]',
            'errors' => [
                'verify_password' => 'The password is incorrect.',
                // 'login_attempt' => 'Max login attempt has been reached, try again later.'
            ]
        ]
    ];
}
