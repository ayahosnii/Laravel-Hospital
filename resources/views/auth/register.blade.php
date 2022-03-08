<!doctype html>
<html lang="en">



@include('auth.includes.header')
<body class="img js-fullheight" style="background-image: url(loginpage/images/ff.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Register</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form action="{{ route('register') }}" class="signin-form" method="POST">
                        @csrf


                        <div class="form-group">
                            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>



                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <div class="form-group">
                            <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>



                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>




                        <div class="form-group">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>


                            @error('password')
                            <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input id="password-confirm" placeholder="Password confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>



                </div>


                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">
                        {{ __('Register') }}
                    </button>
                </div>


                <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">
                            {{ __('Remember Me') }}
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right">
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #fbceb5">
                            @if (Route::has('password.request'))
                                {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                    <br>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{route('login')}}">
                            Login page
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>
</section>


@include('auth.includes.footer')
</body>
</html>

