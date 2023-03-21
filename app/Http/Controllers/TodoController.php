<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();

        return view('todos.index', ['todos' => $todos]);
    }
    public function create() {
        return view('todos.create');
    }
    public function store(TodoRequest $req) {
        Todo::create([
            'title' => $req->title,
            'description' => $req->description,
            'completed' => false
        ]);

        session()->flash('success', 'Created a new task');

        return to_route('todos.index');
    }
}
