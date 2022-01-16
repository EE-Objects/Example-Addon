<?php
namespace EeObjects\Addon\Routes;

use EeObjects\Controllers\Cp\AbstractRoute;

class Members extends AbstractRoute
{
    protected $module_name = 'ee_objects';

    public function process(): AbstractRoute
    {
        $member = MembersService
        return $this;
    }
}