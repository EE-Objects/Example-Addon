<?php
namespace EeObjects\Addon\Controllers\Cp\Routes\ControllersExamples;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;

class Mod extends AbstractRoute
{
    protected $route_path = 'controllers-examples/mod';

    public function process($id = false): AbstractRoute
    {
        $this->setBody('test-route/my-action', []);
        $this->setHeading('module');

        $this->addBreadcrumb($this->url('controllers-examples'), 'eo.cp.nav.controller.examples');
        $this->addBreadcrumb($this->url('controllers-examples/cp', false), 'module');
        return $this;
    }
}