<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class HomeController extends Controller
{
    public function index(){
        $response = Curl::to('https://images-api.nasa.gov/search?q=asteroid')
        ->asJson()
        ->get();

        $data = $response->collection->items;

        return view('main',['data'=>$data]);
    }
}
