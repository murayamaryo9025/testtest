@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
  <div class="container">
    <div class="box">
    <form class="form" action="/register" method="post">
     @csrf
     <div class="card">
      <div class="card_title">
        <h1>Registration</h1>
      </div>
       <div class="form__group-content">
           <div class="form__input--text">
              <input type="text" name="name" placeholder="username" value="{{ old('name') }}" />
           </div>
           <div class="form__error">
           @error('name')
           {{ $message }}
           @enderror
           </div>
        </div>
     <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="password" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <form class="thanks_btn" action="/thanks" method="get" >
      <button class="form__button-submit" type="submit">登録</button>
    </form>
  </form>
  </div>
  </div>
  
  <div class="login__link">
    <a class="login__button-submit" href="/login">ログインの方はこちら</a>
  </div>
</div>
@endsection