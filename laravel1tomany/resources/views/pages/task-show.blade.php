@extends('layouts.main-layout')

@section('content')

  <h1>Task: {{$task -> title}} </h1>

  <p> Description: {{$task -> description}}</p>
  <span>Priority: {{$task -> priority}}</span>
  <div>
    Employee: {{$task -> employee -> name}} {{ $task -> employee -> lastname}}
  </div>

  <h3> Typology:  </h3>
  <div>
    @foreach ($task -> typologies as $typology)
      <span> Typology: {{$typology -> name}}</span>
      <p> Description: {{$typology -> description}}</p>
    @endforeach
  </div>

@endsection
