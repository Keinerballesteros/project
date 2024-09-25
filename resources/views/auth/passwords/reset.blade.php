@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-2 rounded-3">
                <div class="card-header fs-4 text-center">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                    <div class="input-group mb-3">
            <input id="email" type="email" placeholder="Correo Electrónico" class="fs-5 fst-italic form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
            <input id="password" type="password" placeholder="Contraseña" class="fs-5 fst-italic form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                        <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="fs-5 fst-italic form-control" name="password_confirmation" required autocomplete="new-password">
                                            
                        <div class="input-group-append"> 
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn fw-bold btn-outline-success">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
