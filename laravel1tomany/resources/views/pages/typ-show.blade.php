@extends('layouts.main-layout')

@section('content')

  <h1>Typology: {{$typ -> name}} </h1>
  <p>Description: {{$typ -> description}}</p>

  <h3>Tasks:</h3>

  <ul>
    @foreach ($typ -> tasks as $task)
      <li>
        {{$task -> title}}
        (priority:  {{$task -> priority}})
        <ul>
            <li>Employee: {{$task-> employee -> name}} {{$task -> employee -> lastname}}</li>
        </ul>
      </li>
    @endforeach
  </ul>



@endsection
