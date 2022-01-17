<?php
namespace EeObjects\Addon\Controllers\Cp\Routes\TestRoute;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;

class MyAction extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    public function process($id = false): AbstractRoute
    {
        $this->setBody('test-route/my-action', []);
        $this->setHeading('Test Of System');

        $this->addBreadcrumb($this->url('index'), 'test-breadcrumb');
        $this->addBreadcrumb($this->url('members/profile/settings', false, ['id' => 23]), 'member-breadcrumb');
        $this->addBreadcrumb($this->url('entries', false), 'entries-breadcrumb');
        return $this;
    }
}