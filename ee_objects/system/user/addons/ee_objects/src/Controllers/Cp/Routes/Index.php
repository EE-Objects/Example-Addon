<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Controllers\Cp\AbstractRoute;

class Index extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    public function process(): AbstractRoute
    {
        return $this;
    }
}