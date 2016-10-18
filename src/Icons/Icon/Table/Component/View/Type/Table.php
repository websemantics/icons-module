<?php namespace Websemantics\IconsModule\Icons\Icon\Table\Component\View\Type;

use Anomaly\Streams\Platform\Ui\Table\Component\View\Query\AllQuery;
use Anomaly\Streams\Platform\Ui\Table\Component\View\View;

/**
 * Class Table View
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon\Table
 */


class Table extends View
{

  /**
   * The view slug.
   *
   * @var null|string
   */
  protected $slug = 'table';

  /**
   * The view text.
   *
   * @var null|string
   */
  protected $text = 'websemantics.module.icons::view.table';

  /**
   * The view icon.
   *
   * @var null|string
   */
  protected $icon = 'fa fa-list-ul';

  /**
   * The view columns.
   *
   * @var null
   */
  protected $columns = [
        'icon' => [
          'wrapper' => '<span class="{entry.class}"></span>'
          ],
        'type' => [
          'wrapper' => '<h4><span class="label label-default">{entry.type}</span></h4>'
          ],
        'class' => [
          'wrapper' => '<code>{entry.class}</code>'
          ]
    ];

  /**
   * The grid buttons.
   *
  * @var array
   */

   protected $buttons = [
       'edit'
   ];

  /**
   * The grid assets.
   *
   * @var array
   */

   public $assets = [];

  /**
   * The grid options.
   *
   * @var array
   */

  public $options = [];

  /**
   * The view query.
   *
   * @var string
   */
  protected $query = AllQuery::class;

}
