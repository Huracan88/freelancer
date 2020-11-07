<?php

namespace App\Http\Controllers;


use App\Models\Client;

class LivewireController extends Controller
{
    public function index()
    {
        $view_data = [
            'clients' => Client::all()
        ];

        return view('prototypes.index')->with($view_data);
    }
}
