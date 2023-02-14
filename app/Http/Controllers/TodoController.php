<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoAddRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function gotoTodoIndex()
    {
        $todos = Todo::all();
        return view('todo.index')->with(['todos'=>$todos]);
    }


    public function gotoTodoAddView()
    {
        return view('todo.add');
    }

    public function addANewPost(TodoAddRequest $request){

        Todo::create($request->all());
        return redirect()->back()->with('msg','Data add Successfully');
    }
}
