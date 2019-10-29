@extends('layouts.default')
@section('title',$user->name)
@section('content')
  <div class="row">
    <div class="offset-md-2 col-md-8">
      <div class="col-md-12">
        <div class="offset-md-2 col-md-8">
          <section class="user_info">
            @include('shared._user_info', ['user' => $user])
          </section>
        </div>
      </div>


      <section class="stats mt-2">
        <a href=""><strong id="following" class="stat">1</strong>"关注"</a>
        <a href=""><strong id="follower" class="stat">2</strong>"粉丝"</a>
        <a href=""><strong id="blog" class="stat">3</strong>"微博"</a>
      </section>
      <hr>
      <section class="stats">
        <p>没有数据!</p>
      </section>
    </div>
  </div>
@stop
