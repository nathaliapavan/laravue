<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = [
            [
                'id' => 1,
                'name' => 'Nathalia',
                'email' => 'nanahpavan@gmail.com'
            ]
        ];

        $products = [
            [
                'id' => 1,
                'name' => 'Video Game',
                'valor' => '200'
            ]
        ];
        return response()->json([
            'clients' => $clients,
            'products' => $products
        ]);
    }
}
