<?php namespace Websemantics\IconsModule\Http\Controller\Admin;

use Websemantics\IconsModule\Icons\Icon\Form\IconFormBuilder;
use Websemantics\IconsModule\Icons\Icon\Table\IconTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Routing\Redirector;

/**
 * Class IconController
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Http\Controller\Admin
 */

class IconsController extends AdminController
{

    /**
     * Redirect to icons.
     *
     * @param Redirector $redirector
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(Redirector $redirector)
    {
        return $redirector->to('admin/icons/icons');
    }

    /**
     * Return an index of existing entries.
     *
     * @param IconTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(IconTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param IconFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(IconFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param IconFormBuilder $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(IconFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
