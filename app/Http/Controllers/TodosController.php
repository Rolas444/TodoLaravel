<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller 
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3',
            'desc' =>'required|min:3'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->desc=$request->desc;
        $todo->status=true;
        $todo->save();

        return redirect()->route('todos')->with('success','Tasks created');
    }

    public function index(){
        $todos = Todo::all();
        return view('todos.index',['todos'=>$todos] );
    }
}