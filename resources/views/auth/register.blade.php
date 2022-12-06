@extends('layout.app')

@section('content')

<div class="container" style="margin-top: 70px;">
    <div class="card mx-auto" style="max-width: 1000px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-5">
            <img src="{{asset('storage/images/notes-login.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-7">
            <div class="card-body ms-4">
              <h5 class="card-title fs-2 fw-bold mb-1" style="color: black !important;">Register</h5>
              <div class="d-flex mb-0" style="font-size: 90%;">
                <p style="color: black !important;">Already have account?</p>
                <a href="/login" class="text-decoration-none ms-1" style="color: #0d6efd !important;" >Login</a>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-floating mb-3" style="width: 85%;">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="floatingInput" placeholder="text">
                        <label for="floatingInput">Full Name</label>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3" style="width: 85%;">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-floating" style="width: 85%;">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>

                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-floating mt-3" style="width: 85%;">
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"" id="floatingPasswordC password-confirm" placeholder="Password" required autocomplete="new-password">
                        <label for="floatingPasswordC">Confirm Password</label>
                    </div>



                    <select name="occupation" class="form-select mt-3" style="width: 85%; height: 50px;" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>-- Choose One --</option>
                        <option value="Student">Student</option>
                        <option value="Office Worker">Office Worker</option>
                        <option value="Other">Other</option>

                        @error('occupation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </select>


                    <div class="row mb-0 mt-3">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
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
