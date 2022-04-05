<?php

use EeObjects\Controllers\Cp;

class Ee_objects_mcp extends Cp
{
    protected $module_name = 'ee_objects';

    public function __construct()
    {
        $this->setRouteNamespace('EeObjects\Addon\Controllers');
    }

    public function index()
    {
        return $this->route('index', func_get_args());
    }

    public function json()
    {

    }

    public function forms()
    {
        return $this->route('forms', func_get_args());
    }

    protected function getForm()
    {
        $filepicker = ee('CP/FilePicker')->make();
        $link = $filepicker->getLink('Click me!');

        return ['member_details' =>
            [
                [
                    'fields' => [
                        'FIELD_NAME' => [
                            'type' => 'image',
                            'id' => 'my-image-field',
                            'image' => '',
                        ],
                    ]
                ]
            ]
        ];
    }
}
