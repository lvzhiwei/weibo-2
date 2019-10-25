@extends('layouts.default')
@section('content')
  @if(Auth::check())

  @else
    <h1>hello world</h1>
  @endif
@stop
