<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        // ✅ Tambahkan guard untuk pelanggan
        'pelanggan' => [
            'driver' => 'session',
            'provider' => 'pelanggan',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
            'table' => 'users',
            'username' => 'username',
        ],

        // ✅ Tambahkan provider untuk pelanggan
        'pelanggan' => [
            'driver' => 'eloquent',
            'model' => App\Models\Pelanggan::class, // Sesuaikan dengan model pelanggan Anda
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        // ✅ Tambahkan konfigurasi untuk pelanggan
        'pelanggan' => [
            'provider' => 'pelanggan',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
