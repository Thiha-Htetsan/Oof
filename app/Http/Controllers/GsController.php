<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showData()
    {
        $dataFromGs = file_get_contents("http://gsx2json.com/api?id=11u6emYU37TQx-TTFUEIC1-eB5-vbX62LkaViSf8ybmc&columns=false");

        $GsData=json_decode($dataFromGs);

        return view('pages.home',['data'=> $GsData->rows]);
    }
}
