@extends('layouts.main-layout')

@section('content')

  <h1>Tasks: </h1>

  <ul>
    @foreach ($tasks as $task)
    <li>
      <a href="{{route('task-show', $task -> id)}}">{{$task -> title}}</a>
        <a href="{{route('task-edit', $task -> id)}}">Edit</a>
        <div class="">
          Employee: {{$task -> employee -> name}}
        </div>
    </li>
    @endforeach
  </ul>

<a href="{{route('task-create')}}">Add new Task</a>
@endsection
