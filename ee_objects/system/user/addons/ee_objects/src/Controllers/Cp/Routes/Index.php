<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;

class Index extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    public function process($id = false): AbstractRoute
    {
        $this->setHeading('Test Index Page');
        $this->setBody('index', []);
        return $this;
    }
}