<?php
namespace EeObjects\Addon\Controllers\Cp;

use EeObjects\Controllers\Cp\AbstractRoute As CpRoute;

abstract class AbstractRoute extends CpRoute
{
    protected $module_name = 'ee_objects';

    protected $sidebar_data = [
        'eo.cp.nav.controller.examples' => [
            'path' => 'controllers-examples',
            'list' => [
                'cp' => 'controllers-examples/cp',
                'module' => 'controllers-examples/mod',
            ]
        ],
        'eo.cp.nav.forms' => [
            'path' => '',
            'list' => [
                'eo.cp.nav.example' => 'forms/example'
            ]
        ],
        'eo.cp.nav.members' => [
            'path' => '',
            'list' => [
                'eo.cp.nav.example' => 'members'
            ]
        ],
        'eo.cp.nav.entries' => [
            'path' => '',
            'list' => [
                'eo.cp.nav.example' => 'entries'
            ]
        ]
    ];

    public function __construct()
    {
        parent::__construct();
    }
}