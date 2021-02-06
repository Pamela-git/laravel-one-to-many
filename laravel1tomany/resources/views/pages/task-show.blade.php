@extends('layouts.main-layout')

@section('content')

  <h1>Task: {{$task -> title}} </h1>

  <p> Description: {{$task -> description}}</p>
  <span>Priority: {{$task -> priority}}</span>
@endsection
