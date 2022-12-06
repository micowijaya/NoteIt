@extends('layout.app')

@section('content')

    <div class="container" style="margin-top: 80px;">
        <div class="card mx-auto" style="max-width: 900px;">
            <div class="row g-0 align-items-center">
              <div class="col-md-5">
                <img src="{{asset('storage/images/notes-login.jpg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body ms-4">
                  <h5 class="card-title fs-2 fw-bold mb-1" style="color: black !important;">Login</h5>
                  <div class="d-flex mb-0" style="font-size: 90%;">
                    <p style="color: black !important;">Don't have account?</p>
                    <a href="/register" class="text-decoration-none ms-1" style="color: #0d6efd !important;">Register</a>
                  </div>
                  

                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-floating mb-3" style="width: 85%;">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="floatingInput">Email address</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating" style="width: 85%;">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for="floatingPassword">Password</label>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-2 mt-3">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a style="color: #0d6efd !important;" class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>

                </div>
              </div>
            </div>
          </div>
    </div>


@endsection
