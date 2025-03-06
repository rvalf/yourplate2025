<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Page</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Irish+Grover&family=Itim&display=swap"
        rel="stylesheet">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .full-screen-bg {
            background-color: #E25B4E;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100vh;
            background-color: #FFF3E0;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .col-left {
            justify-content: center;
            align-items: center;
            color: #FFF3E0;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .text-desc {
            padding: 0 10rem 2rem 10rem;
        }

        @media screen and (max-width: 768px) and (max-height: 900px) {
            .full-screen-bg {
                min-height: 110vh;
                width: 100%;
                align-items: center;
                justify-content: center;
            }

            .text-desc {
                padding: 0 2rem 1rem 2rem;
            }

            .row {
                display: flex;
                align-items: center;
                justify-content: start;
            }

            .col-right {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .col-left h1 {
                margin-bottom: 3rem;
            }
        }
    </style>
</head>

<body>
    <div class="full-screen-bg">
        <div class="row w-100 m-0">
            <!-- Left Column: Business Introduction -->
            <div class="col-sm-7 col-12 d-flex justify-content-center align-items-center p-0">
                <div class="col-left text-center">
                    <div class="text-desc">
                        <p class="font-logo">YourPlate adalah solusi buat kamu yang sering bingung mau makan apa!
                            Temukan inspirasi resep lezat dan jelajahi marketplace makanan, semua
                            dalam satu tempat.</p>
                    </div>
                    <img src="{{ asset('images/img-logo-bg.png') }}" style="width: 100%; z-index: 0;">
                    <h1 class="font-logo pt-5">Your Plate</>
                </div>
            </div>

            <!-- Right Column: Login Form -->
            <div class="col-sm-5 col-12 d-flex align-items-center p-0 col-right">
                <div class="login-container w-75">
                    <h5 class="text-center mb-0" style="margin-top: 1rem;">Please Login</>
                        <h5 class="text-center" style="margin-bottom: 5rem;">To Your Account</h5>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('logins') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="usr_email" class="form-control" placeholder="Email" required value="{{ old('usr_email') }}">
                                @error('usr_email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="usr_password" class="form-control" placeholder="Password" required>
                                @error('usr_password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group text-end" style="margin-bottom: 5rem;">
                                <p style="font-size: 10pt;">
                                    <a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                        Forgot password?
                                    </a>
                                </p>
                            </div>
                            <button type="submit" class="btn btn-dark w-100 mb-3">LOGIN</button>
                            <button type="button" class="btn w-100">SIGN UP HERE</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>