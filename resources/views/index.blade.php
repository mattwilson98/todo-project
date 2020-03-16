@extends('layouts.app')
<!-- This is the home page which shows each of the to dos, the section below gets yielded in the template file-->
@section('content')
    <h1 class="p-2">What to do?</h1>
    @if (count($todos) > 0)
        @foreach ($todos as $todo)
            <div class="card p-2">
                <h2><a href="todo/{{ $todo->id }}">{{ $todo->title }}</a></h2>
                <h3>{{ $todo->text }}</h3>
                <span class="badge badge-danger">{{ $todo->due }}</span>
            </div>
        @endforeach
    @endif
@endsection