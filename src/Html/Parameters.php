<?php

namespace Nitsmax\Datatables\Html;

use Illuminate\Support\Fluent;

/**
 * Class Parameters.
 *
 * @package Nitsmax\Datatables\Html
 * @see     https://datatables.net/reference/option/ for possible columns option
 * @author  Arjay Angeles <aqangeles@gmail.com>
 */
class Parameters extends Fluent
{
    /**
     * @var array
     */
    protected $attributes = [
        'serverSide' => true,
        'processing' => true,
        'ajax'       => '',
        'columns'    => []
    ];
}
