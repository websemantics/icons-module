<?php

namespace Websemantics\IconsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;
/**
 * Class IconsModule
 *
 *
 * @package   Websemantics\IconsModule
 */
class IconsModule extends Module
{
    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = "fa fa-square";
    protected $sections = ['icons' => ['href' => 'admin/icons/icons', 'buttons' => ['create']]];
}