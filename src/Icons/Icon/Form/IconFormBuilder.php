<?php namespace Websemantics\IconsModule\Icons\Icon\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class IconFormBuilder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon\Form
 */

class IconFormBuilder extends FormBuilder
{

    /**
     * Fields to skip.
     *
     * @var array
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
						'type',
						'class',];
}
