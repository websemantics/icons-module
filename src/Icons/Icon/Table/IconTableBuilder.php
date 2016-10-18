<?php namespace Websemantics\IconsModule\Icons\Icon\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Anomaly\Streams\Platform\Ui\Table\Component\View\ViewCollection;
use Websemantics\IconsModule\Icons\Icon\Table\Component\View\Type\Grid;
use Websemantics\IconsModule\Icons\Icon\Table\Component\View\Type\Table;

/**
 * Class IconTableBuilder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon\Table
 */

class IconTableBuilder extends TableBuilder
{

  /**
   * The table actions.
   *
   * @var array
   */

  protected $actions = [
      'delete'
  ];

  /**
   * The views configuration.
   *
   * @var array|string
   */
  protected $views = [
    'grid' => [
        'view' => Grid::class
    ],
    'table' => [
        'view' => Table::class
    ]
  ];

  /**
   * Build the table.
   *
   * @return $this
   */
  public function build()
  {

    $options = $this->table->getOptions();
    $views = new ViewCollection();

    foreach ($this->views as $key => $item) {
      $views->put($key, app($item['view']));
    }

    $current = app('Illuminate\Http\Request')->get($options->get('prefix') . 'view');

    if ($view = $views->findBySlug($current?:'grid')) {
      $this->assets = $view->assets;
      $this->options = $view->options;
    }

    return parent::build();
  }
}
