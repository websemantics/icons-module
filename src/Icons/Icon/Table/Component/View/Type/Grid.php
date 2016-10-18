<?php namespace Websemantics\IconsModule\Icons\Icon\Table\Component\View\Type;

use Anomaly\Streams\Platform\Ui\Table\Component\View\Query\AllQuery;
use Anomaly\Streams\Platform\Ui\Table\Component\View\View;

/**
 * Class Grid View
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon\Table
 */

class Grid extends View
{

  /**
   * The view slug.
   *
   * @var null|string
   */
  protected $slug = 'grid';

  /**
   * The view text.
   *
   * @var null|string
   */
  protected $text = 'websemantics.module.icons::view.grid';

  /**
   * The view icon.
   *
   * @var null|string
   */
  protected $icon = 'fa fa-th';

  /**
   * The view columns.
   *
   * @var null
   */
  protected $columns = [
        'type',
        'class'
    ];

  /**
   * The grid buttons.
   *
  * @var array
   */

  protected $buttons = [
      'edit' => [
        'text' => ''
        ]
  ];

  /**
   * The grid assets.
   *
   * @var array
   */

  public $assets = [
      'styles.css' => [
          'websemantics.module.icons::less/icons.less',
      ]
  ];

  /**
   * The grid options.
   *
   * @var array
   */

  public $options = [
    'limit' => 200
  ];

  /**
   * The view query.
   *
   * @var string
   */
  protected $query = AllQuery::class;

}
