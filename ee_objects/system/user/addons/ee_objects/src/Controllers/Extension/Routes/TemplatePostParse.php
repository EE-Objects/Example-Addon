<?php
namespace EeObjects\Addon\Controllers\Extension\Routes;

use EeObjects\Controllers\Extension\AbstractRoute;

class TemplatePostParse extends AbstractRoute
{
    public function process(string $final_template, bool $is_partial, $site_id, array $currentTemplateInfo): string
    {
        return $final_template;
    }
}