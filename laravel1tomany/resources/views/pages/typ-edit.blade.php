@extends('layouts.main-layout')

@section('content')

  <h1>Edit Typology</h1>

  <form action="{{route('typ-update', $typ -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name" value="{{$typ -> name}}">

    <br>
    <br>

    <label for="name">description</label>
    <input type="text" name="description" value="{{$typ -> description}}">

    <br>
    <br>

    <label for="tasks[]">Tasks</label> <br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{$task -> id}}"
      @if ($typ -> tasks -> contains($task -> id) )
        checked
      @endif
      > {{$task -> title}} <br>
    @endforeach

    <input type="submit" name="" value="Save">

  </form>

@endsection
