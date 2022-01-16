<?php

if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use EeObjects\Controllers\Cp;

class Ee_objects_mcp extends Cp
{
    public function __construct()
    {
        $this->setRouteNamespace('EeObjects\Addon\Routes');
    }

    public function index()
    {
        return $this->route('index', func_get_args());
    }

    public function testRoute()
    {
        return $this->route('test-route', func_get_args());
    }

}
