
@extends('layouts.main-layout')

@section('content')

  <h1>New Typology</h1>

  <form action="{{route('typ-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name">

    <br>
    <br>

    <label for="name">description</label>
    <input type="text" name="description">

    <br>
    <br>

    <label for="tasks[]">Tasks</label> <br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{$task -> id}}"> {{$task -> title}} <br>
    @endforeach

    <input type="submit" name="" value="Aggiungi">

  </form>

@endsection
