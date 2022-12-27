@extends('layouts.applogin')

@section('login')
<div class="animated bounceInDown background" >
    <div class="container">
      <span class="error animated tada" id="msg"></span>
      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif

      <form class="box" method="POST" action="{{ route('password.email') }}" >
          @csrf
        <h4> إعادة تعيين كلمة المرور </h4>
          {{-- email --}}

          <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <i class="typcn typcn-eye" id="eye"></i>


          <input type="submit" value="Send Password Reset Link" class="btn1">

      </form>
    </div>

  </div>
@endsection
