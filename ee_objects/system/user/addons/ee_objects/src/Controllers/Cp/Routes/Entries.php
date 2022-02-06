<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;
use EeObjects\Channels\Entries\Entry;

class Entries extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    protected $route_path = 'entries';

    public function process($id = false): AbstractRoute
    {
        $entry = ee('ee_objects:ChannelEntryService')->getEntry(5079);
        if ($entry instanceof Entry) {

            $result = $entry->validate();
            if(!$result->isValid()) {
                //print_r($result);
                //exit;
            }
        }

        $this->setHeading('eo.cp.nav.entries');
        $this->addBreadcrumb($this->url('controllers-examples'), 'eo.cp.nav.entries');
        return $this;
    }
}