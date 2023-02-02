<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

// use App\Filters\checkRole;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */

    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'checkauth'     => \App\Filters\CheckAuth::class,
        'checkrole'     => \App\Filters\CheckRole::class,
        'checkrw'     => \App\Filters\CheckRw::class,
        'checkdkm'     => \App\Filters\CheckDkm::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */


    public array $globals = [
        'before' => [
            // sebelum login, bisa mengakses controller auth dengan function regis saja.
            'checkauth' => [
                'except' => [
                    'login', 'login/*',
                    'login', 'logon',
                    'register', 'register/*',
                ]
            ],
            'checkrole' => [
                'except' => [
                    'login', 'login/*',
                    'login', 'logon',
                    'register', 'register/*',
                ]
            ],
            'checkrole' => [
                'except' => [
                    'login', 'login/*',
                    'login', 'logon',
                    'register', 'register/*',
                ]
            ],
        ],


        'after' => [
            'toolbar',
            'checkauth' => [
                'except' => [
                    'admin', 'admin/*',
                    'rete', 'rete/*',
                    'rewe', 'rewe/*',
                    'dkm', 'dkm/*',
                ]
            ],
            'checkrole' => [
                'except' => [
                    'rete', 'rete/*',
                ]
            ],
            'checkrw' => [
                'except' => [
                    'rewe', 'rewe/*',
                ]
            ],
            'checkdkm' => [
                'except' => [
                    'dkm', 'dkm/*',
                ]
            ],

        ]
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}