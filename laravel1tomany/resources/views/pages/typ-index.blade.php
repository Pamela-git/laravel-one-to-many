@extends('layouts.main-layout')

@section('content')

  <h1>Typologies: </h1>

  <ul>
    @foreach ($typs as $typ)
    <li>
      <a href="{{route('typ-show', $typ -> id)}}">{{$typ -> name}}</a>
      <a href="{{route('typ-edit', $typ -> id)}}">Edit</a>
    </li>
    @endforeach
  </ul>

  <a href="{{route('typ-create')}}">Add new Typology</a>

@endsection
