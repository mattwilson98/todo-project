@extends('layouts.app')
<!-- This is the home page which shows each of the to dos, the section below gets yielded in the template file-->
@section('content')
<h1 class="p-2">To do list</h1>
@if (count($todos) > 0)
@foreach ($todos as $todo)
<div class="card">
    <div class="card-header">
        #{{ $todo->id }} - {{ $todo->title }}
    </div>
    <div class="card-body">
        <!-- <h3 class="card-title">{{ $todo->title }}</h3> -->
        <p class="card-text">{!! Str::limit($todo->content, 10); !!}</p><br>
        <span class="badge badge-danger">{{ $todo->due }}</span>
        <a href="todo/{{ $todo->id }}" class="btn btn-primary">Read more</a>
    </div>
</div>
@endforeach
@endif
@endsection