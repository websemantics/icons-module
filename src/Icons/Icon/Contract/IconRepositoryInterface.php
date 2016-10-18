<?php namespace Websemantics\IconsModule\Icons\Icon\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface IconRepositoryInterface
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon\Contract
 */

interface IconRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Truncate icon.
     *
     * @return static
     */
    public function truncate();

    /**
     * Create a new icon.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

}
