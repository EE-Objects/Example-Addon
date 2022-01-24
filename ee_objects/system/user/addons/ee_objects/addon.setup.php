<?php

use EeObjects\Services\DateService;
use EeObjects\Services\MembersService;
use EeObjects\Services\ChannelEntryService;

if (defined('PATH_THIRD')) {
    require_once PATH_THIRD. 'ee_objects/vendor/autoload.php';
}

return [
    'author'            => 'Eric Lamb',
    'author_url'        => '',
    'name'              => 'EE Objects',
    'description'       => 'test bed for EE Objects',
    'version'           => '0.1.0',
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
        'ChannelEntryService' => function ($addon) {
            return new ChannelEntryService();
        },
    ],
    'tests' => [
        'path' => 'vendor/ee-objects',
    ]
];
