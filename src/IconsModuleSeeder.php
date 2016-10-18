<?php

namespace Websemantics\IconsModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
/**
 * Class IconsModuleSeeder
 *
 *
 * @package   Websemantics\IconsModule
 */
class IconsModuleSeeder extends Seeder
{
    protected $seeders = ['Icon' => 'Websemantics\IconsModule\Icons\Icon\IconSeeder'];
    /**
     * Seed the localization module.
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }
}