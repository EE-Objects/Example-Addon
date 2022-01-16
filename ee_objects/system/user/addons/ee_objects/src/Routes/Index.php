<?php
namespace EeObjects\Addon\Routes;

use EeObjects\Controllers\Cp\AbstractRoute;

class Index extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    public function process(): AbstractRoute
    {
        return $this;
    }
}