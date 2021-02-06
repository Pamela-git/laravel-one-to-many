@extends('layouts.main-layout')

@section('content')

  <h1>Typologies: </h1>

  <ul>
    @foreach ($typs as $typ)
    <li>
      <a href="{{route('typ-show', $typ -> id)}}">{{$typ -> name}}</a>
    </li>
    @endforeach
  </ul>

@endsection
