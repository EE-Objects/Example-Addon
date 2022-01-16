<?php
namespace EeObjects\Addon\Controllers\Cp\Routes;

use EeObjects\Controllers\Cp\AbstractRoute;
use EeObjects\Members\Member;

class Members extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    public function process(): AbstractRoute
    {
        $member_id = ee()->session->userdata('member_id');
        $member = ee('ee_objects:MembersService')->getMember($member_id);
        if ($member instanceof Member) {
            print_r($member->toArray());
            exit;
        }

        return $this;
    }
}