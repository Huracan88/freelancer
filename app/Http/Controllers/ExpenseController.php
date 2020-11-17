<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function index()
    {
        $view_data = [
            'expenses' => Expense::all()
        ];

        return view('expenses.index')->with($view_data);
    }


    public function new(){

        $view_data = [
            'expense' => null,
            'clients' => Client::all()->pluck('name', 'id')->toArray()
        ];

        return view('expenses.form')->with($view_data);
    }

    public function edit(Expense $expense){
        $view_data = [
            'expense' => $expense,
            'clients' => Client::all()->pluck('name', 'id')->toArray()
        ];

        return view('expenses.form')->with($view_data);
    }

    public function doInsert(){
        response()->json(['message'=>'Se insertó el registro']);
    }

    public function doEdit(){}

    public function doDelete(){}



}
