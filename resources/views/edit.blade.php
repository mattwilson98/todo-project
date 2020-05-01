@extends('layouts.app')


<!-- this is the edit form for when the user wishes to edit the todo and shows when the user clicks the edit button. this view is included in the template file -->


@section('content')
<h1>Edit todo</h1>
    <form method='post' action='/todo/{{ $todo->id }}'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $todo->title }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" name="content" id="summernote" placeholder="Enter content">{{ $todo->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="due_at">Due</label>
            <input type="date" class="form-control" name="due_at" id="due_at" placeholder="Enter due" value="{{ $todo->due_at->format('Y-m-d') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection