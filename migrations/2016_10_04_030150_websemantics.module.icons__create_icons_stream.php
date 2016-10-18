<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleIconsCreateIconsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
				'slug'                        => 'icons',
				'title_column'                => 'type'
		];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
				'type'                          => [
						'required'                  => true
				],
				'class'                         => [
						'required'                  => true
				]
		];

}
