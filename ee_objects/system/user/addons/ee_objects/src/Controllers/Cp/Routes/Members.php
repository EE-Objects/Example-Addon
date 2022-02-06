<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Addon\Controllers\Cp\AbstractRoute;
use EeObjects\Members\Member;

class Members extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    protected $route_path = 'members';

    public function process($id = false): AbstractRoute
    {
        $member_id = ee()->session->userdata('member_id');
        $member = ee('ee_objects:MembersService')->getMember($member_id);
        if ($member instanceof Member) {

            $member->get('first_name');
            $result = $member->validate();
            if($result->isValid()) {
                //print_r($result);
                //exit;
            }

        }

        $this->setHeading('eo.cp.nav.members');
        $this->addBreadcrumb($this->url('controllers-examples'), 'eo.cp.nav.members');
        return $this;
    }
}