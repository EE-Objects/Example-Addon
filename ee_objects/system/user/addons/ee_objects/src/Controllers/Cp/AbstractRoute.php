<?php
namespace EeObjects\Addon\Controllers\Cp;

use EeObjects\Controllers\Cp\AbstractRoute As CpRoute;

abstract class AbstractRoute extends CpRoute
{
    public function __construct()
    {
        parent::__construct();
        $this->sidebar = ee('CP/Sidebar')->make();

        $subsHeader = $this->sidebar
            ->addHeader(lang('eo.cp.nav.controller.examples'), $this->url('index'));
        $subsHeaderList = $subsHeader->addBasicList();
        $subsHeaderList->addItem(lang('eo.cp.nav.members'), $this->url('members'));
        $subsHeaderList->addItem(lang('eo.cp.nav.test-route.my-action'), $this->url('test-route/my-action'));
    }
}