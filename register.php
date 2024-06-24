<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container-fluid py-3 px-md-3 bg-theme-dark text-white text-center">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="btn d-block d-md-none bg-gradient-theme me-3 py-1 fw-bold me-md-0" data-bs-toggle="modal" data-bs-target="#authModal">Sign In</a>
                <img src="img/logo.svg" alt="Logo" class="logo me-md-4">
                <ul class="list-unstyled d-none d-md-flex mb-0 d-flex justify-content-start align-items-center gap-4">
                    <li><a href="#" class="text-white text-decoration-none fw-bold">All competitions</a></li>
                    <li><a href="#" class="text-white text-decoration-none fw-bold">Charity</a></li>
                </ul>
            </div>
            <div class="action-buttons d-flex justify-content-start align-items-center gap-4">
                <div class="auth-buttons d-flex d-none d-md-flex justify-content-start align-items-center gap-4">
                    <a href="javascript:void(0)" class="btn btn-outline-light px-4" data-bs-toggle="modal" data-bs-target="#authModal">Sign in</a>
                    <a href="javascript:void(0)" class="btn bg-gradient-theme px-3" data-bs-toggle="modal" data-bs-target="#authModal">Sign Up</a>
                </div>
                <div class="cart-button d-flex justify-content-end align-items-center gap-4">
                    <div class="cart">
                        <i class="bi bi-cart3 text-gradient-theme fs-2"></i>
                    </div>
                    <div class="nav-menu">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#sidemenu">
                            <i class="bi bi-list text-gradient-theme fs-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-theme-dark py-2">
        <div class="container mt-5">
            <div class="card bg-dark mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 mx-auto mt-5 mb-3">
                            <h1 class="text-white">Create Free Account</h1>
                        </div>
                        <div class="col-md-7 mx-auto">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="name" class="text-white">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control bg-dark text-white ">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-white">Email</label>
                                    <input type="text" name="email" id="email" class="form-control  bg-dark text-white ">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-white">Password</label>
                                    <input type="text" name="password" id="password" class="form-control bg-dark text-white ">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="text-white">Confirm Password</label>
                                    <input type="text" name="password_confirmation" id="password_confirmation" class="form-control bg-dark text-white ">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn bg-gradient-theme btn-lg w-100">Create Account</button>
                                </div>
                                <div class="form-group mt-4">
                                    <a href="login.php" class="text-decoration-none text-white">Already have an account? <span class="text-theme">Sign in</span> </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="container py-4">
            <div class="d-flex justify-content-center align-items-center py-2 gap-3">
                <img src="img/googleplay.svg" alt="Play Store" class="download-button" width="100">
                <img src="img/appstore.svg" alt="App Store" class="download-button" width="100">
            </div>
            <hr class="text-white my-5">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="text-center mb-4 mb-md-0">
                    <img src="img/trust.svg" alt="">
                </div>
                <div class="d-flex flex-column mb-4 mb-md-0 justify-content-start align-items-center gap-3">
                    <p class="text-white mb-0" style="font-size: 20px;">Payments we accept</p>
                    <ul class="mb-0 list-unstyled d-flex justify-content-start align-items-center gap-2">
                        <li><img src="img/cards/Visa.svg" alt="Payment" width="50"></li>
                        <li><img src="img/cards/Mastercard.svg" alt="Payment" width="50"></li>
                        <li><img src="img/cards/ApplePay.svg" alt="Payment" width="50"></li>
                        <li><img src="img/cards/PayPal.svg" alt="Payment" width="50"></li>
                        <li><img src="img/cards/Google+Pay.svg" alt="Payment" width="50"></li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="text-white text-center text-md-start mt-3 mt-md-0">Follow us</h5>
                    <ul class="mb-0 list-unstyled fs-3 d-flex justify-content-around px-5 px-md-0 justify-content-md-center gap-2">
                        <li><i class="bi bi-facebook text-white"></i></li>
                        <li><i class="bi bi-messenger text-white"></i></li>
                        <li><i class="bi bi-whatsapp text-white"></i></li>
                        <li><i class="bi bi-facebook text-white"></i></li>
                    </ul>
                </div>
            </div>
            <hr class="text-white my-5">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="text-center text-md-start mb-5">
                        <img src="img/logo-light.svg" alt="Logo" width="200">
                    </div>
                </div>
                <div class="col-6 col-md-3 text-center text-md-start">
                    <h4 class="text-white my-4">Website</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center text-md-start">
                    <h4 class="text-white my-4">Categories</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center text-md-start">
                    <h4 class="text-white my-4">Contact</h4>
                    <ul class="list-unstyled mb-0 text-white">
                        <li>My Raffles</li>
                        <li>News & Blog</li>
                        <li>Account</li>
                        <li>Responsible Play</li>
                        <li>Winners Gallery</li>
                    </ul>
                </div>
            </div>
            <hr class="text-white my-5">
            <div class="d-md-flex text-center text-md-start justify-content-between align-items-center">
                <p class="text-white mb-0">Copyright © 2024. All rights reserved. </p>
                <div class="privacy d-flex gap-4 justify-content-center justify-content-md-betwen">
                    <a href="#" class="text-white text-decoration-none">Privacy Policy</a>
                    <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- side menu -->
    <div class="offcanvas offcanvas-end" id="sidemenu">
        <div class="offcanvas-body bg-theme-dark">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="text-white">
                <h4>Menu</h4>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0 mt-5">
                    <li>
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card card-body py-2 bg-theme-dark border border-dark">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-house-door fs-3"></i>
                                    <h6 class="mb-0">Home</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card card-body py-2 bg-theme-dark border border-dark">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-house-door fs-3"></i>
                                    <h6 class="mb-0">Home</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card card-body py-2 bg-theme-dark border border-dark">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-house-door fs-3"></i>
                                    <h6 class="mb-0">Home</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-white">
                            <div class="card card-body py-2 bg-theme-dark border border-dark">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="bi bi-house-door fs-3"></i>
                                    <h6 class="mb-0">Home</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="social-icons">
                    <div class="d-flex flex-column">
                        <h5 class="text-white text-center text-md-start mt-3 mt-md-0">Follow us</h5>
                        <ul class="mb-0 list-unstyled fs-3 d-flex justify-content-around px-5 px-md-0 justify-content-md-center gap-2">
                            <li><i class="bi bi-facebook text-white"></i></li>
                            <li><i class="bi bi-messenger text-white"></i></li>
                            <li><i class="bi bi-whatsapp text-white"></i></li>
                            <li><i class="bi bi-facebook text-white"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>