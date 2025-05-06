<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seller Register Page</title>

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
            background-color: #701A12;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100vh;
            background-color: #FFF3E0;
            border-radius: 15px;
            padding: 15px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .col-left {
            justify-content: center;
            align-items: center;
            color: #FFFFFF;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .text-desc {
            padding: 0 7rem 2rem 7rem;
        }

        @media screen and (max-width: 768px) and (max-height: 900px) {
            .full-screen-bg {
                min-height: 170vh;
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
            <div class="col-sm-5 col-12 d-flex justify-content-center align-items-center p-0">
                <div class="col-left text-center">
                    <div class="text-desc">
                        <p class="font-logo">Yourplate empowers you to markert your food product with ease. Create your account, and connect with your buyers now!</p>
                    </div>
                    <img src="{{ asset('images/img-logo-bg.png') }}" style="width: 100%; z-index: 0;">
                    <h1 class="font-logo pt-5">Your Plate</>
                </div>
            </div>

            <!-- Right Column: Login Form -->
            <div class="col-sm-7 col-12 d-flex align-items-center p-0 col-right">
                <div class="login-container" style="width: 85%;">
                    <h5 class="text-center" style="margin-top: 1rem;">Start Your Business</h5>
                    <p class="text-center mb-4" style="font-size: 12pt">Please complete this field to join us!</p>
                    @if ($errors->any())
                        <div style="color: red;">
                            @foreach ($errors->all() as $error)
                                <p class="text-center">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ url('/seller/register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Fullname" id="fullname"
                                        name="fullname" value="{{ old('fullname') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number" id="phone"
                                        name="phone" value="{{ old('phone') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" id="address"
                                        name="address" value="{{ old('address') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" id="username"
                                        name="username" value="{{ old('username') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" id="password"
                                        name="password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        id="password2" name="password2" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dormitory Room (Optional)"
                                        id="dorm" name="dorm" value="{{ old('dorm') }}">
                                </div>
                                <input type="hidden" class="form-control" id="role" name="role" value="2">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 mb-3 mt-4 p-2">CREATE SELLER ACCOUNT</button>
                        <a href="{{ url('/register') }}" type="submit" class="btn w-100">BACK</a>
                        <section id="footer">
                            <div class="p-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/cdginnary-logo.png') }}" style="width: 15px">
                                <p class="fw-normal ps-2 mb-0" style="font-size: 8pt;">CDG INNARY</p>
                                <p class="fw-light ps-2 mb-0" style="font-size: 6pt;"><i class="bi bi-c-circle"
                                        style="font-size: 4pt;"></i> 2025</p>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>