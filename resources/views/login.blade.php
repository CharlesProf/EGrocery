@extends('template')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center" style="height:500px;background-color: #f9f8f4">

    <form action="{{ url('/login-check') }}" method="POST">
        @csrf

        <h1 class="h3 mb-4" style="color: #597c9c ">Please Sign In</h1>

        @if($message = Session::get('failed'))
             <div class="alert alert-danger">{{ $message }}</div>
        @endif

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" style="width: 300px" value="{{ Cookie::get('EmailCookie') !== null ? Cookie::get('EmailCookie'): "" }}">
          <label for="floatingInput">Email address</label>
            @error('email')
            <div class="alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" style="width: 300px" value="{{ Cookie::get('PassCookie') !== null ? Cookie::get('PassCookie'): "" }}">
          <label for="floatingPassword">Password</label>
            @error('password')
            <div class="alert-danger text-danger">{{ $message }}</div>
            @enderror
        </div>
        
          <button class="btn btn-lg" type="submit" style="width: 130px; background-color: #febf0b">Login</button>
        </form>
  </div>
@endsection
