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
                <a href="#" class="btn d-block d-md-none bg-gradient-theme me-3 py-1 fw-bold me-md-0">Sign In</a>
                <img src="img/logo.svg" alt="Logo" class="logo me-md-4">
                <ul class="list-unstyled d-none d-md-flex mb-0 d-flex justify-content-start align-items-center gap-4">
                    <li><a href="#" class="text-white text-decoration-none fw-bold">All competitions</a></li>
                    <li><a href="#" class="text-white text-decoration-none fw-bold">Charity</a></li>
                </ul>
            </div>
            <div class="action-buttons d-flex justify-content-start align-items-center gap-4">
                <div class="auth-buttons d-flex d-none d-md-flex justify-content-start align-items-center gap-4">
                    <a href="#" class="btn btn-outline-light px-4">Sign in</a>
                    <a href="#" class="btn bg-gradient-theme px-3">Sign Up</a>
                </div>
                <div class="cart-button d-flex justify-content-end align-items-center gap-4">
                    <div class="cart">
                        <i class="bi bi-cart3 text-gradient-theme fs-2"></i>
                    </div>
                    <div class="nav-menu">
                        <i class="bi bi-list text-gradient-theme fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- body -->
    <section id="cart" class="bg-theme-dark pb-5">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 my-5">
                            <div class="d-flex justify-content-between align-items-center text-white">
                                <i class="bi bi-arrow-left fs-3"></i>
                                <h4>Point Store</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link bg-dark text-white active" data-bs-toggle="tab"
                                        href="#store">Store</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-dark text-white" data-bs-toggle="tab"
                                        href="#earned">Earned</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div id="store" class="container tab-pane active"><br>
                                    <div class="point-box border border-warning rounded text-center text-white p-2">
                                        You have <span class="badge bg-theme">0</span> Point
                                    </div>

                                    <div class="offers">
                                        <h5 class="text-start text-secondary fw-bold my-4">Latest Offers</h5>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="position-realtive">
                                                        <span class="discount-badge">17%
                                                            OFF</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 d-flex flex-column justify-content-between">
                                                            <div class="offer-info p-3">
                                                                <h4 class="mt-5">Amazon Firestick</h4>
                                                                <span
                                                                    class="bg-dark text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                    <img src="img/exclamationIconLight.svg" alt="Icon">
                                                                    <p class="mb-0">75 RP</p>
                                                                </span>
                                                            </div>
                                                            <br>
                                                            <div class="offer-link p-3">
                                                                <a href="#"
                                                                    class="text-decoration-none text-dark">Redeem
                                                                    prize <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <img src="/img/firestick.webp" alt="Fire Stick"
                                                                width="200px">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card bg-theme">
                                                <div class="card-body p-0">
                                                    <div class="position-realtive">
                                                        <span class="discount-badge">17%
                                                            OFF</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 d-flex flex-column justify-content-between">
                                                            <div class="offer-info p-3">
                                                                <h4 class="mt-5">Amazon Firestick</h4>
                                                                <span
                                                                    class="bg-dark text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                    <img src="img/exclamationIconLight.svg" alt="Icon">
                                                                    <p class="mb-0">75 RP</p>
                                                                </span>
                                                            </div>
                                                            <br>
                                                            <div class="offer-link p-3">
                                                                <a href="#"
                                                                    class="text-decoration-none text-dark">Redeem
                                                                    prize <i class="bi bi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <img src="/img/firestick.webp" alt="Fire Stick"
                                                                width="200px">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="offers">
                                        <h5 class="text-start text-secondary fw-bold my-4">ALL PRIZES</h5>
                                    </div>
                                    <div class="row">
                                        <?php
                                        for ($i = 0; $i < 25; $i++) {
                                            ?>

                                            <div class="col-md-3 ">
                                                <div class="card mb-3">
                                                    <div class="card-body d-flex justify-content-between">
                                                        <div class="prize-info">
                                                            <h3>£5 Site Credit</h3>
                                                            <span
                                                                class="bg-dark mb-4 text-white rounded-pill px-4 d-inline-flex align-items-center justify-content-start gap-2">
                                                                <img src="img/exclamationIconLight.svg" alt="Icon">
                                                                <p class="mb-0">100 RP</p>
                                                            </span>
                                                        </div>
                                                        <div class="prize-img">
                                                            <img src="/img/cred.webp" alt="Credit" width="70px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div id="earned" class="container tab-pane fade"><br>
                                    <div class="point-box border border-warning rounded text-center text-white p-2">
                                        You have <span class="badge bg-theme">0</span> Point
                                    </div>
                                </div>
                            </div>
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
                    <ul
                        class="mb-0 list-unstyled fs-3 d-flex justify-content-around px-5 px-md-0 justify-content-md-center gap-2">
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

</body>

</html>