<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'asc')->get(); 
        
        return view('index')->with('todos', $todos);    /* This method orders the data to show the most recently created at the bottom of the list   */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create'); /* This method show's the create page */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /* This method shows the validation requests and parameters and also shows the redirection to the home page
    with a success message when the todo has successfully been created */

    public function store(Request $request)             
    {
        $this->validate($request,
            [
                'title' => 'required',
                'content' => 'required',
                'due' => 'required'

            ]
        );
        
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();

        return redirect('/')->with('success', 'Todo created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* This method shows the individual to do with the title, content and the due date */

    public function show($id)
    {
        $todo = Todo::find($id);

        return view('show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* This method takes the user to the edit form where they can edit a todo. */
    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* This method updates the todo after the user has successfully edited it. */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();

        return redirect('/')->with('success', 'Todo updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* This method deletes the todo and then redirects the user back to the home page with a success message. */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/')->with('success', 'Todo deleted successfully!');
    }
}
