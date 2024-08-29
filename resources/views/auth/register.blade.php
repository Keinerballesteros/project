@extends('layouts.applogin')
  <!-- @title('Login')-->

@section('content')

<div class="login-box">
  
  <!-- /.login-logo -->

  <div class="card ">
    <div class="card-body login-card-body">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

      <form method="POST" action="{{ route('register')}}">
            @csrf
                        <div class="input-group mb-3">
                            
                                <input id="name" type="text" placeholder="Nombre Completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                        </div>
            
        <div class="input-group mb-3">
            <input id="email" type="email" placeholder="Correo Electrónico" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
        </div>
        <div class="input-group mb-3">
                        <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
        </div>
        <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('login') }}"
                                    class="btn btn-success btn-block">{{ __('I already have an account') }}</a>
                        </div>
                        </div>
        </div>
      </form>

      
      <!-- /.social-auth-links -->

    </div>
                
    <!-- /.login-card-body -->
  </div>
</div>

@endsection













