<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller 
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);

        $todo = new Todo;
    }
}