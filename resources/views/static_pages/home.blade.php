@extends('layouts.default')
@section('content')
  @if(Auth::check())

  @else
    <div class="jumbotron">
      <h1>Hello Laravel</h1>
      <p>
        你现在所看到的是 <a href="">Laravel 入门教程</a> 的示例项目主页
      </p>
      <p>
        一切将从这里开始
      </p>
      <p class="btn btn-lg btn-success">现在注册</p>
    </div>
  @endif
@stop
