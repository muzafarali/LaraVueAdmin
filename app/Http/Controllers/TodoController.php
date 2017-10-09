<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Validator;
use App\Models\Todo;

class TodoController extends Controller
{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $user = JWTAuth::parseToken()->authenticate();
        $query = Todo::whereUserId($user->id);

        if(request()->has('show_todo_status'))
            $query->whereStatus(request('show_todo_status'));

        $todos = $query->get();
        return $todos;
    }

    public function store(Request $request){

        $validation = Validator::make($request->all(), [
            'todo' => 'required'
        ]);

        if($validation->fails())
          return response()->json(['message' => $validation->messages()->first()],422);

        $user = \JWTAuth::parseToken()->authenticate();
        $todo = new Todo;
        $todo->fill(request()->all());
        $todo->user_id = $user->id;
        $todo->save();

        return response()->json(['message' => 'Todo added!', 'data' => $todo]);
    }

    public function toggleStatus(Request $request){
        $todo = Todo::find(request('id'));
        $user = JWTAuth::parseToken()->authenticate();

        if(!$todo || $todo->user_id != $user->id)
            return response()->json(['message' => 'Couldnot find todo!'],422);

        $todo->status = !$todo->status;
        $todo->save();

        return response()->json(['message' => 'Todo updated!']);
    }

    public function destroy(Request $request, $id){
        $todo = Todo::find($id);
        $user = JWTAuth::parseToken()->authenticate();

        if(!$todo || $todo->user_id != $user->id)
            return response()->json(['message' => 'Couldnot find todo!'],422);

        $todo->delete();

        return response()->json(['message' => 'Todo deleted!']);
    }
}
