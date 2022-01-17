<?php
namespace EeObjects\Addon\Controllers\Action\Routes;

use EeObjects\Controllers\Action\AbstractRoute;

class AnotherAction extends AbstractRoute
{
    public function process()
    {
        echo __FILE__.':'.__LINE__;
    }
}