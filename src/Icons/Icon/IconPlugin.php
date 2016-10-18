<?php namespace Websemantics\IconsModule\Icons\Icon;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class IconPlugin
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon
 */

class IconPlugin extends Plugin
{

    /**
     * The icon repository.
     *
     * @var IconRepository
     */
    protected $icons;

    /**
     * Create a new IconPlugin instance.
     *
     * @param IconRepository $icons
     */
    public function __construct(IconRepository $icons)
    {
        $this->icons = $icons;
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {

    }
}
