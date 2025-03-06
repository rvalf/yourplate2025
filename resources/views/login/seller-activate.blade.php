<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seller Activate Page</title>

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
                min-height: 160vh;
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

            .col-right p {
                padding: 0 !important;
            }

            .col-right .border {
                margin: 25px 0 !important;
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
                        <p class="font-logo">YourPlate menjadi solusi untuk memasarkan produk-produk yang
                            ingin kamu jual. Tersedia fitur Chat agar penjual mudah berinterkasi dengan
                            pembeli. Daftarkan akun-mu dan mulai bisnis bersama YourPlate!</p>
                    </div>
                    <img src="{{ asset('images/img-logo-bg.png') }}" style="width: 100%; z-index: 0;">
                    <h1 class="font-logo pt-5">Your Plate</>
                </div>
            </div>

            <!-- Right Column: Login Form -->
            <div class="col-sm-7 col-12 d-flex align-items-center p-0 col-right">
                <div class="login-container" style="width: 85%;">
                    <h5 class="text-center" style="margin-top: 1rem;">Congratulations!</h5>
                    <p class="text-center mb-4" style="font-size: 12pt">Your seller account's successfully created</p>
                    <form>
                        <p class="text-center px-5 mb-0">Untuk mengaktivasi akun-mu, lakukan pembayaran biaya administrasi akun ke nomor rekening berikut:</p>
                        <div class="p-2 border border-dark border-1 rounded card-norek" style="margin: 25px 100px">
                            <h4 class="text-center">9925674567</h4>
                            <h6 class="text-center">Permata Bank a/n Bunga Aulia Risti</h6>
                        </div>
                        <p class="text-center px-5">Kirim bukti pembayaran dan tunggu admin kami melakukan konfirmasi akun agar kamu bisa memulai bisnis-mu di YourPlate.</p>
                        <div class="form-group input-group-sm w-50 m-auto">
                            <input type="file" class="form-control" placeholder="FULLNAME" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 mb-3 mt-4 p-2">ACTIVATE</button>
                        <button type="submit" class="btn w-100">LATER</button>
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