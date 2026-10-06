<?php

return [
    'name' => env('SITE_NAME', 'Konsulin Tech'),
    'whatsapp_number' => env('WHATSAPP_NUMBER', '6285710999144'),
    'email' => env('SITE_EMAIL', 'service@konsulintech.com'),
    'phone' => env('SITE_PHONE', '085710999144'),
    'products' => [
        'humi' => ['name' => 'HUMI HRIS', 'url' => 'https://humi.my.id', 'icon' => 'tji-service-1'],
        'paperwork' => ['name' => 'Paperwork', 'url' => 'https://paperwork.biz.id', 'icon' => 'tji-service-2'],
        'mava' => ['name' => 'Mava POS', 'url' => 'https://mavapos.id', 'icon' => 'tji-service-3'],
    ],
    'address' => env('SITE_ADDRESS', 'Jalan Kusuma Bangsa VII Nomor 71 Pemecutan Kaja, Denpasar'),
];
