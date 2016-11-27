<?php

namespace Nitsmax\Datatables\Contracts;

/**
 * Interface DataTableContract
 *
 * @package Nitsmax\Datatables\Contracts
 * @author  Arjay Angeles <aqangeles@gmail.com>
 */
interface DataTableContract
{
    /**
     * Render view.
     *
     * @param $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function render($view, $data = [], $mergeData = []);

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax();

    /**
     * @return \Nitsmax\Datatables\Html\Builder
     */
    public function html();

    /**
     * @return \Nitsmax\Datatables\Html\Builder
     */
    public function builder();

    /**
     * @return \Nitsmax\Datatables\Request
     */
    public function request();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query();
}
