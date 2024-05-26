<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }
    public function Create()
    {
        
        return view('todos.create');
    }
    public function Store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'details' => 'required',

        ]);

        $todo = new Todo();
        $todo->name =$request->name;
        $todo->details =$request->details;
        $todo->completed = false;
        $todo->save();

        session()->flash('msg','Todo Careted Successfully!');

        return redirect('/todos');
    }
    public function Show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show',compact('todo'));
    }

    public function Edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit',compact('todo'));
    }

    public function Update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'details' => 'required',

        ]);

        $todo = Todo::find($id);
        $todo = new Todo();
        $todo->name =$request->name;
        $todo->details =$request->details;
        $todo->completed = false;
        $todo->save();

        session()->flash('msg','Todo Update Successfully!');

        return redirect('/todos');

    }

    public function Destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        session()->flash('msg','Todo Remove Successfully!');

        return redirect('/todos');
    }

    public function Complete($id)
    {
        $todo = Todo::find($id);
        $todo->completed =true;
        $todo->save();

        session()->flash('msg','Todo Completed Successfully!');

        return redirect('/todos');

    }
}
