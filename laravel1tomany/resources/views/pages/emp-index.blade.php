@extends('layouts.main-layout')

@section('content')

  <h1>Employees: </h1>

  <ul>
    @foreach ($emps as $emp)
    <li>
      <a href="{{route('emp-show', $emp -> id)}}">
        {{$emp -> name}}
        {{$emp -> lastname}}

      </a>
        <ul>
          @foreach ($emp -> tasks as $task)
            <li>
              {{ $task -> title}}
            </li>
          @endforeach
        </ul>
    </li>
    @endforeach

  </ul>
@endsection
