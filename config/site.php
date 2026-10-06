<?php

return [
    'name' => env('SITE_NAME', 'Konsulin Tech'),
    'whatsapp_number' => env('WHATSAPP_NUMBER', '6285710999144'),
    'email' => env('SITE_EMAIL', 'service@konsulintech.com'),
    'phone' => env('SITE_PHONE', '085710999144'),
    'products' => [
        'humi' => ['name' => 'HUMI HRIS', 'url' => 'https://humi.my.id', 'logo' => 'assets/images/products/humi.png'],
        'paperwork' => ['name' => 'Paperwork', 'url' => 'https://paperwork.biz.id', 'logo' => 'assets/images/products/paperwork.png'],
        'mava' => ['name' => 'Mava POS', 'url' => 'https://mavapos.id', 'logo' => 'assets/images/products/mava.png'],
    ],
    'address' => env('SITE_ADDRESS', 'Jalan Kusuma Bangsa VII Nomor 71 Pemecutan Kaja, Denpasar'),
];
