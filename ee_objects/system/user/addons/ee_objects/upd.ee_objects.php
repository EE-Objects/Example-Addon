<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use ExpressionEngine\Service\Addon\Installer;

class Ee_objects_upd extends Installer
{
    public $has_cp_backend = 'n';
    public $has_publish_fields = 'n';

    /**
     * Module Actions
     * @var array
     */
    public $actions = [
        [
            'class' => 'Ee_objects',
            'method' => 'my_action',
            'csrf_exempt' => true
        ],
        [
            'class' => 'Ee_objects',
            'method' => 'another_action',
            'csrf_exempt' => true
        ]
    ];

    public $methods = [
        [
            'method' => 'core_boot',
            'hook' => 'core_boot',
            'priority' => '1',
        ],
    ];

    public function install()
    {
        parent::install();
        parent::activate_extension();

        return true;
    }

    public function update($current = '')
    {
        // Runs migrations
        parent::update($current);

        return true;
    }

    public function uninstall()
    {
        parent::uninstall();
        parent::disable_extension();

        return true;
    }
}
