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
        $this->setRouteNamespace('EeObjects\Addon\Controllers');
    }

    public function index()
    {
        return $this->route('index', func_get_args());
    }

    public function controllersExamples()
    {
        return $this->route('controllers-examples', func_get_args());
    }

    public function members()
    {
        return $this->route('members', func_get_args());
    }
}
