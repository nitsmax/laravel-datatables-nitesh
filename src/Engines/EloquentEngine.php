<?php

namespace Nitsmax\Datatables\Engines;

use Illuminate\Database\Eloquent\Builder;
use Nitsmax\Datatables\Request;

/**
 * Class EloquentEngine.
 *
 * @package Nitsmax\Datatables\Engines
 * @author  Arjay Angeles <aqangeles@gmail.com>
 */
class EloquentEngine extends QueryBuilderEngine
{
    /**
     * @param mixed $model
     * @param \Nitsmax\Datatables\Request $request
     */
    public function __construct($model, Request $request)
    {
        $builder = $model instanceof Builder ? $model : $model->getQuery();
        parent::__construct($builder->getQuery(), $request);

        $this->query      = $builder;
        $this->query_type = 'eloquent';
    }
}
