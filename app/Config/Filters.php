<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use App\Filters\CheckAuth;
use App\Filters\checkRewe;
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
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'checkauth'     => CheckAuth::class,
        // 'checkrole'     => checkRole::class,
        'checkrewe'     => checkRewe::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        'before' => [

            //         //sebelum login, bisa mengakses controller auth dengan function regis saja.
            'checkauth' => [
                'except' => [
                    'Login', 'Login/*',
                    'registrasi', 'registrasi/*',
                ]
            ]
        ],
        'checkrewe' => [
            'except' => [
                'rewe', 'rewe/*'
            ]
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            //     'checkauth' => [
            //         'except' => [
            //             // 'admin', 'admin/*'
            //             'Login', 'Login/dkm'
            //         ]
            // ],
            'checkauth' => [
                'except' => [
                    'admin', 'admin/*',
                ]
            ]
            // 'honeypot',
            // 'secureheaders',
        ],
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
    public array $filters = [
        'before' => [
            // jika tidak bisa login, tidak dapat mengakses semua url yang terdapat pada parameter before
            // 'checkrewe' => [
            // 'except' => ['rewe', 'rewe/*']
            //     '/admin', 'data_penduduk', 'save_data', 'tambah_data_rt', 'rw', 'kecamatan', 'tambah_data_kecamatan', 'kelurahan',
            //     '/rete', 'rt', 'rewe', 'dkm',
            //     '/buat_akun', '/tambah_akun',
            //     'tambah_data_kelurahan', 'provinsi', 'tambah_data_provinsi', 'data_kk', 'tambah_data_kk'
        ]
        // ],
        // 'checkrewe' => [
        //     'before' => [
        //         'except' => ['rewe', 'rewe/*']

        //     ]
        // ]
    ];
}