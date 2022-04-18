<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="frontend/styles/main.css" />
</head>

<body>
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="#">
                <img src="frontend/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link</a>
                            <a class="dropdown-item" href="#">Link</a>
                            <a class="dropdown-item" href="#">Link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Testimonial</a>
                    </li>
                </ul>

                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
            </div>
        </nav>
    </div>

    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br />
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br />
            moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/tr1.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">UBUD, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/tr2.jpg');">
                            <div class="travel-country">JAPAN</div>
                            <div class="travel-location">OSAKA</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/tr3.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">MANDALIKA</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/tr4.jpg');">
                            <div class="travel-country">EUROPE</div>
                            <div class="travel-location">FRENCH</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br />
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br />
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center match-height">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <h3 class="mb-4">John Doe</h3>
                                <p class="testimonial">
                                    “ It was glorious and I could not stop to say wohooo for
                                    every single moment Dankeeeeee “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">Trip to Ubud</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <h3 class="mb-4">Grace anne</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and I saw something beautiful in that
                                    Island that makes me want to learn more “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">Trip to Nusa Penida</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content mb-auto">
                                <h3 class="mb-4">Jane Wine</h3>
                                <p class="testimonial">
                                    “ I loved it when the waves was shaking harder — I was
                                    scared too “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">Trip to Karimun Jawa</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <h5>FEATURES</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">Reviews</a>
                                        </li>
                                        <li>
                                            <a href="#">Community</a>
                                        </li>
                                        <li>
                                            <a href="#">Social Media Kit</a>
                                        </li>
                                        <li>
                                            <a href="#">Affiliate</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>ACCOUNT</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Refund</a></li>
                                        <li><a href="#">Security</a></li>
                                        <li><a href="#">Rewards</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>COMPANY</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Media</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>Get Connected</h5>
                                    <ul class="list-unstyled">
                                        <li>Jakarta Selatan</li>
                                        <li>Indonesia</li>
                                        <li>0821 - 1111 - 2222</li>
                                        <li>support@Trivvie.id</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2022 Copyright • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>
    <script src="frontend/libraries/retina/retina.min.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
</body>

</html>