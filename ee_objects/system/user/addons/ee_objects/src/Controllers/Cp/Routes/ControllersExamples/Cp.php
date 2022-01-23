<?php
namespace EeObjects\Addon\Controllers\Cp\Routes\ControllersExamples;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;

class Cp extends AbstractRoute
{
    protected $route_path = 'controllers-examples/cp';

    public function process($id = false): AbstractRoute
    {
        $this->setBody('test-route/my-action', []);
        $this->setHeading('cp');

        $this->addBreadcrumb($this->url('controllers-examples'), 'eo.cp.nav.controller.examples');
        $this->addBreadcrumb($this->url('controllers-examples/cp', false), 'cp');
        return $this;
    }
}