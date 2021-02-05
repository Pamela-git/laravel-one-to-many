@extends('layouts.main-layout')

@section('content')

  <h1>Employee: {{$emp -> name}} {{$emp -> lastname}} </h1>
  <h2> Birth: {{$emp -> date_of_birth}}</h2>
  <ul>
    @foreach ($emp -> tasks as $task)
      <li>
        Mansione: {{ $task -> title}}
        <div class="">
          Descrizione: {{ $task -> description}}
          Priorità: {{ $task -> priority}}
        </div>

      </li>
    @endforeach
  </ul>
@endsection
