<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB;
use App\Todo;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $todos = ['id' =>1, 'status' =>0, 'title' => 'shopping'];
        // return response()->json($todos);
        $todos = Todo::all();
        return response()->json($todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function create()
    {
        //
        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    }
    */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $todo = new Todo;
        $todo->status = $request->input('status');
        $todo->title  = $request->input('title');
        $todo->save();
        return response()->json($todo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $result = DB::select('select * from todos where id = :id', ['id' => $id]);
        // return response()->json($result);
        $todo = Todo::find($id);
        return response()->json($todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
