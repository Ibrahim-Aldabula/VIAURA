<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/ResetPassword.css') }}">

</head>

<body>
    <main>
        <div class="container text-center">
            <div id="step1" class="ptb-100">
                <h1 data-aos="fade-down" data-aos-delay="100"> Forget Password?</h1>
                <p data-aos="fade-down" data-aos-delay="200">Enter your email for instructions</p>
                <form action="{{ route('viaura.resetPassword_data') }}" method="post">
                    @csrf
                    <input class="mx-auto" type="email"  id="email" placeholder=" Enter Your Email" name="email" data-aos="fade-right"
                        data-aos-delay="300">
                    <button type="submit" onclick="sendCode()" data-aos="fade-left" data-aos-delay="300" > Send Code </button>
                </form>
            </div>
        </div>
    </main>


    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('Front/JS/ResetPaswword.js') }}"></script>
</body>

</html>
