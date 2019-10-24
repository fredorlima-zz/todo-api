<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController
{
    public function index(){
        $todos = Todo::active()
                     ->get();

        return response()->json($todos);
    }

    public function details($id){
        $todo = Todo::where('id', $id)
                    ->get();

        return response()->json($todo);
    }

    public function create(Request $request){
        $todo = Todo::create([
            'title' => $request->get('title'),
            'description' => $request->get('title'),
            'prority' => $request->get('priority'),
            'status' => $request->get('status')
        ]);

        return response()->json($todo);
    }

    public function delete($id){
        Todo::where('id', $id)->delete();
        return response()->json([]);
    }
}
