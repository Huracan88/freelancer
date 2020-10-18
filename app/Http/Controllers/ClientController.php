<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $view_data = [
            'clients' => Client::all()
        ];

        return view('client.index')->with($view_data);
    }
}
