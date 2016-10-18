<?php namespace Websemantics\IconsModule\Icons\Icon;

use Websemantics\IconsModule\Icons\Icon\Contract\IconRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class IconRepository
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>
 * @package   Websemantics\IconsModule\Icons\Icon
 */

class IconRepository extends EntryRepository implements IconRepositoryInterface
{
    /**
     * The icon model.
     *
     * @var IconModel
     */
    protected $model;

    /**
     * Create a new IconRepository instance.
     *
     * @param IconModel $model
     */
    public function __construct(IconModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a model by id or list of attributes
     *
     * @param int / array $attributes, value of record (id) or list of (attributes)
     */
    public function find($attributes)
    {
        if(is_array($attributes)){
            return $this->model->where($attributes)->first();
        }

        return parent::find(/* $id */ $attributes);
    }

    /**
     * Find a model by a specific field
     *
     * @param string $field, the field to find by
     * @param string / int, $value, value of that field
     * @param string $operation, the relational operation
     */
    public function findBy($field, $value, $operation = '=')
    {
        return $this->model->where($field, $operation, $value)->first();
    }

    /**
     * Find a model by a list of attributes, if not found, attept to create one
     *
     * @param array $attributes, list of attributes values
     */
    public function findOrNew(array $attributes)
    {
        if(is_null($model = $this->find($attributes))){
            return $this->create($attributes);
        }

        return $model;
    }
}
