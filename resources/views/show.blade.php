@extends('layouts.app')

<!-- this view shows each todo when opened -->

@section('content')
    <a href="/" class="btn btn-secondary mt-2">Go Back</a>
    <h1>{{ $todo->title }}</h1><!-- This shows the todo's title -->
    <div class="badge badge-danger p-2">{{ $todo->due }}</div><!-- this shows when the todo is due. -->
    <hr>
    <span>{!! $todo->content !!}</span><!-- This shows the todo's content -->
    <form method="post" action="/todo/{{ $todo->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2 float-right">Delete</button> <!-- This button deletes the todo -->
        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a> <!-- this link lets the user edit the todo in the form -->
    </form>
    
@endsection