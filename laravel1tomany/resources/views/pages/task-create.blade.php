
@extends('layouts.main-layout')

@section('content')

  <h1>New Task</h1>

  <form action="{{route('task-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">title</label>
    <input type="text" name="title" value="">

    <br>
    <br>

    <label for="name">description</label>
    <input type="text" name="description" value="">

    <br>
    <br>


    <label for="name">priority</label>
    <input type="text" name="priority" value="">

    <br>
    <br>


    <label for="employee_id">employee_id</label>
    <select class="" name="employee_id">
      @foreach ($emps as $emp)
        <option value="{{$emp -> id}}">
          {{$emp -> name}}
          {{$emp -> lastname}}
        </option>
      @endforeach
    </select>

    <br>
    <br>

    <label for="typs[]">Typologies</label> <br>
    @foreach ($typs as $typ)
      <input type="checkbox" name="typs[]" value="{{$typ -> id}}"> {{$typ -> name}} <br>
    @endforeach

    <input type="submit" name="" value="Aggiungi">

  </form>

@endsection
