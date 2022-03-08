<!doctype html>
<html lang="en">




@include('auth.includes.header')
<body class="img js-fullheight" style="background-image: url(loginpage/images/ff.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form action="{{ route('login') }}" class="signin-form" method="POST">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                        @enderror

                        <div class="form-group">
                            <input id="password-field" type="password" placeholder="Password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">
                                Sign In {{ __('Login') }}
                            </button>




                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">
                                        {{ __('Remember Me') }}
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a btn btn-link href="{{ route('password.request') }}" style="color: #fbceb5">
                                        @if (Route::has('password.request'))
                                            {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="{{url('redirect/facebook')}}" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('auth.includes.footer')
</body>
</html>


