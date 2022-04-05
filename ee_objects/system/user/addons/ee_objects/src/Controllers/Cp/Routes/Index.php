<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;

class Index extends AbstractRoute
{
    protected $route_path = 'index';

    public function process($id = false): AbstractRoute
    {
        return $this;
    }
}