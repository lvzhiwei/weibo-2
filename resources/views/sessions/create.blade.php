@extends('layouts.default')
@section('title', '登录')
@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>登录</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('login') }}" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="email">邮箱: </label>
            <input type="text" class="form-control" name="email" placeholder="请输入邮箱地址">
          </div>
          <div class="form-group">
            <label for="password">密码 (<a href="{{ route('password.request') }}">忘记密码</a>) :</label>
            <input type="password" class="form-control" name="password" placeholder="请输入密码">
          </div>
          <button type="submit">提交</button>
        </form>
      </div>
    </div>
  </div>
@stop
