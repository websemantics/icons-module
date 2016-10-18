<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleIconsCreateIconsIconsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'type' => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'type'    => '-'
            ]
        ],
				'class'                       => 'anomaly.field_type.text',
		];

}
