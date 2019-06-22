<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * return json response from data
     * the default status 200.
     *
     * @param $data
     * @param $status
     * @return \Illuminate\Http\Response
     */
    protected function dataResponse($data, $status = 200)
    {
        return response()->json([$data,$status]);
    }
}
