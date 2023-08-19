<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductViewController extends Controller
{
    function index()
    {
        $client             = new \GuzzleHttp\Client();
        $api_url            = "https://www.ebeachbd.com/api/product-list";

        $request = $client->get($api_url);
        $info = json_decode($request->getBody(), true);

        return view('product.view', ['data' => $info]);
    }
}
