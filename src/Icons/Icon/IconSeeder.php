<?php namespace Websemantics\IconsModule\Icons\Icon;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class IconSeeder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon
 */

class IconSeeder extends Seeder
{
    /**
     * The $icons repository.
     *
     * @var IconRepository
     */
    protected $icons;

    /**
     * Create a new IconSeeder instance.
     *
     * @param IconRepository $icons
     */
    public function __construct(IconRepository $icons)
    {
        $this->icons = $icons;
    }

    /**
     * Seed the $icons.
     */
    public function run()
    {
        $this->icons->truncate();

        $icons = ((array) app('Anomaly\Streams\Platform\Ui\Icon\IconRegistry'))[chr(0).'*'.chr(0)."icons"];

        foreach ($icons as $type => $class){
            $this->icons->create(['type' => $type, 'class' => $class]);
        }
    }
}
