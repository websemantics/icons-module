<?php

namespace Websemantics\IconsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class IconsModuleServiceProvider
 *
 *
 * @package   Websemantics\IconsModule
 */
class IconsModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins = [];
    protected $routes = ['admin/icons' => 'Websemantics\IconsModule\Http\Controller\Admin\IconsController@index', 'admin/icons/icons' => 'Websemantics\IconsModule\Http\Controller\Admin\IconsController@index', 'admin/icons/icons/create' => 'Websemantics\IconsModule\Http\Controller\Admin\IconsController@create', 'admin/icons/icons/edit/{id}' => 'Websemantics\IconsModule\Http\Controller\Admin\IconsController@edit'];
    protected $bindings = ['Websemantics\IconsModule\Icons\Icon\IconModel' => 'Websemantics\IconsModule\Icons\Icon\IconModel'];
    protected $singletons = ['Websemantics\IconsModule\Icons\Icon\Contract\IconRepositoryInterface' => 'Websemantics\IconsModule\Icons\Icon\IconRepository'];
    protected $middleware = [];
    protected $listeners = [];
    protected $providers = [];
    protected $overrides = [];
    protected $mobile = [];
    protected $commands = [];

    /**
     * Get the addon view overrides.
     *
     * @return array
     */
    public function getOverrides()
    {
      $request = app('Illuminate\Http\Request');

      if ($request->segment(2) === $this->addon->getSlug() &&
          $request->get('view') !== 'table') {
        return [
          'streams::table/partials/header' => 'websemantics.module.icons::table/partials/header',
          'streams::table/partials/body' => 'websemantics.module.icons::table/partials/body'
        ];
      }

      return parent::getOverrides();
    }
}
