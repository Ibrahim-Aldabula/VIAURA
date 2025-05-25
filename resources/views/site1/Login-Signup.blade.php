<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" /> --}}
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/login-signup.css') }}">

</head>

<body>



    {{--   <div class="col-md-12">
                    <div class="mb-3">
                        <label for="cv">CV</label>
                        <input type="file" name="cv" id="cv" class="form-control @error('cv')
                            is-invalid
                        @enderror">
                        @error('cv')
                             <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                   </div>
                </div> --}}



    <div id="container" class="login-signup">
        <div class="login">
            <div class="content">
                <h1 data-aos="fade-down" data-aos-delay="100">Log In</h1>
                <form action="{{ route('viaura.Login-Signup') }}" method="post">
                    @csrf

                    <input  type="email" name="email" id="email" required data-aos="fade-right" data-aos-delay="200" placeholder="email" value="" @error('email') is-invalid @enderror">
                    @error('email')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror


                    <input type="password" name="password" id="password" placeholder="password" required data-aos="fade-right" data-aos-delay="300" @error('password') is-invalid @enderror">
                     @error('pasword')
                        <span class="invalid-feedback">{{ $message }}</span>
                     @enderror


                    <input type="checkbox" name="remember-password" class="remember" data-aos="fade-right" data-aos-delay="400">



                    <label for="remember" data-aos="fade-right" data-aos-delay="400">Remember me</label>
                    <a class="forget" href="{{ route('viaura.resetPassword') }}" data-aos="fade-left" data-aos-delay="400">Forgot password?</a>

                    <button>Log In</button>
                    {{-- <button type="submit" onclick="return false;" data-aos="fade-up" data-aos-delay="400">Log In</button> --}}
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

                <form action="{{ route('viaura.Login-Signup') }}" method="post">
                    @csrf
                    <input type="email" name="email"  placeholder="email" required @error('email') is-invalid @enderror">
                    @error('email')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <input type="password" name="password"  placeholder="password" required @error('password') is-invalid @enderror">
                    @error('password')
                       <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                    <input type="password" name="password_confirmation"  placeholder="confirm password" required>

                    <input type="checkbox" name="acceptTerms"  class="acceptTerms">
                    <label for="acceptTerms">I accept terms</label>

                    <button>Sign up</button>
                    {{-- <button type="submit" onclick="return false;">Sign up</button> --}}
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> --}}
    <script src="{{ asset('Front/JS/login-signup.js') }}"></script>
</body>

</html>
