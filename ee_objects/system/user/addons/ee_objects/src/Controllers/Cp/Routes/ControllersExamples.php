<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;

class ControllersExamples extends AbstractRoute
{
    /**
     * @var string
     */
    protected $route_path = 'controllers-examples';

    public function process($id = false): AbstractRoute
    {
        $this->setHeading('controllers-examples');
        $this->addBreadcrumb($this->url('controllers-examples'), 'eo.cp.nav.controller.examples');
        return $this;
    }
}