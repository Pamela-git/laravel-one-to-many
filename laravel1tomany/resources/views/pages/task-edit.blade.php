
@extends('layouts.main-layout')

@section('content')

  <h1>Edit Task : {{ $task -> name}}</h1>

  <form action="{{route('task-update', $task -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">title</label>
    <input type="text" name="title" value="{{$task -> title}}">

    <br>
    <br>

    <label for="name">description</label>
    <input type="text" name="description" value="{{$task -> description}}">

    <br>
    <br>


    <label for="name">priority</label>
    <input type="text" name="priority" value="{{$task -> priority}}">

    <br>
    <br>


    <label for="employee_id">employee_id</label>
    <select class="" name="employee_id">
      @foreach ($emps as $emp)
        <option value="{{$emp -> id}}"
          @if ($task -> employee -> id == $emp -> id)
            selected
          @endif
          >
          {{$emp -> name}}
          {{$emp -> lastname}}
        </option>
      @endforeach

    </select>

    <br>

    {{-- @php
      dd($task -> typologies);
    @endphp --}}
    <label for="typs[]">Typologies</label> <br>
    @foreach ($typs as $typ)
      <input type="checkbox" name="typs[]" value="{{$typ -> id}}"
        @if ($task -> typologies -> contains($typ -> id) )
          checked
        @endif

      >  {{$typ -> name}}

      <br>
    @endforeach

    <input type="submit" name="" value="Edit">

  </form>

@endsection
