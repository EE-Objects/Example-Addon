<?php

use EeObjects\Services\DateService;
use EeObjects\Services\MembersService;

if (defined('PATH_THIRD')) {
    require_once PATH_THIRD. 'ee_objects/vendor/autoload.php';
}

return [
    'author'            => 'Eric Lamb',
    'author_url'        => '',
    'name'              => 'EE Objects',
    'description'       => 'test bed for EE Objects',
    'version'           => '0.0.1',
    'namespace'         => 'EricLamb\EeObjects',
    'settings_exist'    => true,
    // Advanced settings
    'services' => [
        'DateService' => function ($addon) {
            return new DateService();
        },
        'MembersService' => function ($addon) {
            return new MembersService();
        },
    ]
];
