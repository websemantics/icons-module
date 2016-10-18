<?php namespace Websemantics\IconsModule\Icons\Icon;

use Websemantics\IconsModule\Icons\Icon\Contract\IconInterface;
use Anomaly\Streams\Platform\Model\Icons\IconsIconsEntryModel;

/**
 * Class IconModel
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon
 */

class IconModel extends IconsIconsEntryModel implements IconInterface
{
    /**
     * Disable timestamps for this model.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The number of minutes to cache query results.
     *
     * @var null|false|int
     */
    protected $ttl = false;

    /**
     * The attributes that are
     * not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Runtime cache.
     *
     * @var array
     */
    protected $cache = [];

}
