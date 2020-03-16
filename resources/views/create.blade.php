@extends('layouts.app')
<!-- This is the create view where the user creates the to do, it has the form with the title, content and due input fields-->
@section('content')

        <h1>Create new Todo</h1> 
        <form method='post' action='/todo'>
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ old('title') }}"><!-- This is the title field -->
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" name="content" id="content" placeholder="Enter content" value="{{ old('content') }}"><!-- This is the content field -->
            </div>
            <div class="form-group">
                <label for="due">Due</label>
                <input type="text" class="form-control" name="due" id="due" placeholder="Enter due" value="{{ old('due') }}"><!-- This is the due field -->
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
@endsection