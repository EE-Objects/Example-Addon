<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use EeObjects\Controllers\Cp;

class Ee_objects_mcp extends Cp
{
    protected $module_name = 'ee_objects';

    public function __construct()
    {
        $this->setRouteNamespace('EeObjects\Addon\Controllers\Cp\Routes');
    }

    public function index()
    {
        return $this->route('index', func_get_args());
    }

    public function testRoute()
    {
        return $this->route('test-route', func_get_args());
    }

    public function members()
    {
        return $this->route('members', func_get_args());
    }
}
