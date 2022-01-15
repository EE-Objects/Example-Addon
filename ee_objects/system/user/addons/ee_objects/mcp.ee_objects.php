<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Ee_objects_mcp
{
    public function index()
    {
        $html = '<p>Time to make magic</p>';

        return [
            'body'  => $html,
            'breadcrumb' => [
                ee('CP/URL')->make('addons/settings/ee_objects')->compile() => lang('ee_objects')
            ],
            'heading' => lang('ee_objects_settings'),
        ];
    }
}
