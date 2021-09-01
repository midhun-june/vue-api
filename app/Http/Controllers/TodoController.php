<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::latest()->get();
    }

    public function store()
    {
        Todo::create([
            'text' => request('text'),
        ]);

        return response()->json([
            'message' => 'Todo created successfully'
        ]);
    }

    public function delete()
    {
        $todo = Todo::find(request('id'));
        $todo->delete();
        return response()->json([
            'message' => 'Todo deleted successfully'
        ]);
    }

    public function markAsDone()
    {
        $todo = Todo::find(request('id'));
        $todo->done = true;
        $todo->update();
        return response()->json([
            'message' => 'Todo updated successfully'
        ]);
    }
    public function markAsUnDone()
    {
        $todo = Todo::find(request('id'));
        $todo->done = false;
        $todo->update();
        return response()->json([
            'message' => 'Todo updated successfully'
        ]);
    }
}
