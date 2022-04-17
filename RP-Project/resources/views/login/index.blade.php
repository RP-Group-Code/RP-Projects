<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{ asset('/RP-Project/dist/css/stylelogin.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('masuk') }}" method="post" class="sign-in-form">
                    @csrf
                    <div class="logoimg">
                        <a href="{{ url('/') }}">
                            <img src="img/rp_logo.png" class="image" alt="" />
                        </a>
                    </div>
                    <div class="row justify-content-center" style="background-color: antiquewhite; height: 35px; padding-top:10px; font-size: 0.8rem; margin-bottom: 1rem;">
                        <div class="col-lg-9">
                            @if (session()->has('loginEror') == true)
                                <div class="alert alert-danger alert-dismissible fade show" style="z-index: 1"
                                    role="alert">
                                    <i class="fas fa-exclamation-triangle" width="44" height="44"> <strong>LOGIN GAGAL
                                            !</strong>
                                        USERNAME / PASSWORD ANDA SALAH.</i>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input name="username" type="text" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input name="password" type="password" placeholder="Password" required />
                    </div>
                    <button type="submit" class="btn"> Login</button>
                </form>

                <form action="{{ url('create_login') }}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="create_username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="create_email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="create_password" placeholder="Password" required />
                    </div>
                    <button class="btn"> Sign up</button>
                    {{-- <p class="social-text">Or Sign up with social platforms</p>
                        <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        </div> --}}
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Apakah Anda User Baru?</h3>
                    <p>
                        Silahkan lakukan registrasi akun untuk dapatkan akses masuk kedalam sistem kami.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="img/ic_login02.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Salah Satu User?</h3>
                    <p>
                        Apakah anda telah mempunyai akun sistem kami? <br> Silahkan pergi ke halaman login.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/ic_login01.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="{{ asset('RP-Project') }}/dist/js/app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>
