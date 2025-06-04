<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/login-signup.css') }}">

</head>

<body>
    <div id="container" class="login-signup">
        <div class="login">
            <div class="content">
                <h1 data-aos="fade-down" data-aos-delay="100">Log In</h1>

                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>

                @endif
                <form action="{{ route('viaura.LoginSignup_data') }}" method="POST">
                    @csrf

                    <input  type="email" name="email_login" id="email" data-aos="fade-right" data-aos-delay="200" placeholder="email" @error('email_login') is-invalid @enderror>
                    @error('email_login')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror


                    <input type="password" name="password_login" id="password" placeholder="password"  data-aos="fade-right" data-aos-delay="300" @error('password_login') is-invalid @enderror">
                     @error('password_login')
                        <span class="invalid-feedback">{{ $message }}</span>
                     @enderror


                    <input type="checkbox" name="remember-password" class="remember" data-aos="fade-right" data-aos-delay="400">



                    <label for="remember" data-aos="fade-right" data-aos-delay="400">Remember me</label>
                    <a class="forget" href="{{ route('viaura.resetPassword') }}" data-aos="fade-left" data-aos-delay="400">Forgot password?</a>

                    {{-- <button>Log In</button> --}}
                    <button type="submit" data-aos="fade-up" data-aos-delay="400">Log In</button>

                </form>
            </div>
        </div>
        <div class="page front">
            <div class="content">
                <i class="fas fa-user-plus" data-aos="fade-down" data-aos-delay="100"></i>
                <h1 data-aos="fade-down" data-aos-delay="200">Hello, friend!</h1>
                <p data-aos="fade-down" data-aos-delay="300">Enter your personal details and start journey with us</p>
                <button id="signup" data-aos="fade-up" data-aos-delay="400">Sign up <i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="page back">
            <div class="content">
                <i class="fas fa-arrow-right-to-bracket"></i>
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button id="login"><i class="fa-solid fa-angle-left"></i> Log In</button>
            </div>
        </div>
        <div class="signup">
            <div class="content">
                <h1>Sign Up</h1>

                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>

                @endif

                <form action="{{ route('data') }}" method="POST">
                    @csrf

                    <input  type="email" name="email_signup" data-aos="fade-right" data-aos-delay="200" placeholder="email" @error('email_signup') is-invalid @enderror>
                    @error('email_signup')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    {{-- <input type="email" name="email"  placeholder="email" @error('email') is-invalid @enderror>
                    @error('email')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror --}}



                    {{-- <input type="password" name="password"  placeholder="password" required @error('password') is-invalid @enderror"> --}}
                    <input type="password" name="password_signup"  placeholder="password" @error('password_signup') class="is-invalid" @enderror>
                    @error('password_signup')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <input type="password" name="password_confirmation"  placeholder="confirm password">

                    <input type="checkbox" name="acceptTerms"  class="acceptTerms">
                    <label for="acceptTerms">I accept terms</label>

                    {{-- <button>Sign up</button> --}}
                    <button type="submit" >Sign up</button>

                </form>
            </div>
        </div>
    </div>

    <div class="container selection text-center">
        <div>
            <h1 class="mb-40">Pick Your <span>Journey</span></h1>
            <div class="row">
                <div class="col-lg-4">
                   <a  href="{{ route('viaura.education') }}">
                    <div class="content">
                        <i class="fas fa-graduation-cap mb-20"></i>
                        <h4 class="f-30 mb-20">student</h4>
                        <p class="fw-600">Looking for the top courses to boost your knowledge as a student?</p>
                    </div>
                   </a>
                </div>
                <div class="col-lg-4">
                   <a href="{{ route('viaura.profile') }}">
                    <div class="content span">
                        <i class="fas fa-briefcase mb-20"></i>
                        <h4 class="f-30 mb-20">Job Seeker</h4>
                        <p class="fw-600">Looking for the best opportunities to kickstart your career as a job seeker?</p>
                    </div>
                   </a>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ (asset('Front/JS/bootstrap.bundle.min.js')) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/login-signup.js') }}"></script>
</body>

</html>
