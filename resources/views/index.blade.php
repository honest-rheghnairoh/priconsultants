<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="app">
        <!-- BEGIN nav -->
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}" id="brand-name">
                <h2 class="text-primary text-uppercase">{{ config('app.name') }}</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link scrollable" href="#home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollable" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollable" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollable" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollable" href="#team">Team</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link scrollable dropdown-toggle" href="#" id="navbarScrollingDropdown"
                            role="button" data-toggle="dropdown" aria-expanded="false">
                            Drop Down
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item scrollable" href="#testimonials">Testimonials</a></li>
                            <li><a class="dropdown-item scrollable" href="#clients">Our Clients</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item scrollable" href="#footer">Footer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollable" href="#contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END nav -->

        <!-- START home section -->
        <section class="home" id="home"
            style="background: url({{ asset('/images/'.$home->cover) }}) center bottom no-repeat;background-size: auto;background-size: cover;">
            <div class="container d-flex flex-column">
                <div class="align-self-center align-self-lg-start">
                    <h2 class="home-heading text-light font-weight-bolder">{{ $home->header_top }} <br>
                        <span class="text-secondary">{{ $home->header_middle }}</span><br>
                        {{ $home->header_bottom }}
                    </h2>
                </div>
                <div class="py-5 align-self-center align-self-lg-start">
                    <a href="#about" class="btn-get-started bg-secondary text-light px-5 py-3 mr-4 border-primary">
                        Get Started
                    </a>
                    <a href="#services" class="btn-our-services bg-transparent text-light px-5 py-3 ml-4">
                        Our Services
                    </a>
                </div>
            </div>
        </section>
        <!-- END home section -->

        <!-- START about us section -->
        <section class="about-us" id="about-us">
            <div class="container">
                <div class="text-center pb-5">
                    <h1 class="text-primary">About Us</h1>
                    <p class="mx-5 px-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris dapibus
                        lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel cursus
                        aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center order-lg-2 order-1">
                        <img src="{{ asset('images/about-us.png') }}" class="img-fluid" alt="about-us-image">
                    </div>
                    <div class="col-lg-6 order-lg-1 order-2">
                        <p class="mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris
                            dapibus lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel
                            cursus aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                        </p>
                        <div class="about-item pb-4 d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-code m-4" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h6 class="about-item-title font-weight-bold"><a href="">Lorem Ipsum</a>
                                </h6>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                        <div class="about-item pb-4 d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-photo m-4" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h6 class="about-item-title font-weight-bolder"><a href="">Lorem Ipsum</a>
                                </h6>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                        <div class="about-item pb-4 d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-bar-chart m-4" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h6 class="about-item-title font-weight-bolder"><a href="">Lorem Ipsum</a>
                                </h6>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <img src="{{ asset('images/about-us-2.png') }}" class="img-fluid" alt="about-us-2-image">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="my-3 font-weight-bold">Phasellus maximus, turpis velcursus aliquam</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris
                            dapibus lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel
                            cursus aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris
                            dapibus lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel
                            cursus aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                        </p>
                    </div>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-lg-6 d-flex flex-column justify-content-center order-lg-2 order-1">
                        <img src="{{ asset('images/about-us-3.png') }}" class="img-fluid" alt="about-us-3-image">
                    </div>
                    <div class="col-lg-6 order-lg-1 order-2">
                        <h3 class="my-3 font-weight-bold">Mauris arcu nisi, pretium at sapien quis, suscipit mattis leo.
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris
                            dapibus lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel
                            cursus aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris
                            dapibus lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel
                            cursus aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END about us section -->

        <!-- START services section -->
        <section class="services" id="services">
            <div class="container">
                <div class="text-center pb-5">
                    <h1 class="text-primary">Services</h1>
                    <p class="mx-5 px-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris dapibus
                        lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel cursus
                        aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="service-container d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-clock-o m-4 text-warning" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6 class="about-item-title font-weight-bold">Lorem Ipsum</h6>
                                </a>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="service-container d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-list m-4 text-danger" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6 class="about-item-title font-weight-bold">Lorem Ipsum</h6>
                                </a>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="service-container d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-bar-chart m-4 text-primary" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6 class="about-item-title font-weight-bold">Lorem Ipsum</h6>
                                </a>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="service-container d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-calendar m-4 text-info" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6 class="about-item-title font-weight-bold">Lorem Ipsum</h6>
                                </a>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="service-container d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-snowflake-o m-4 text-success" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6 class="about-item-title font-weight-bold">Lorem Ipsum</h6>
                                </a>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="service-container d-flex flex-row align-items-center">
                            <div class="icon-container mr-3">
                                <i class="fa fa-bell m-4 text-indigo-100" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6 class="about-item-title font-weight-bold">Lorem Ipsum</h6>
                                </a>
                                <p class="about-item-description mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END services section -->

        <!-- START portfolio section -->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="text-center pb-5">
                    <h1 class="text-primary">Our Portfolio</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="row justify-content-center mb-5">
                        <a href="#" class="filter col mx-2 btn btn-secondary text-light">ALL</a>
                        <a href="#" class="filter col mx-2 btn btn-outline-secondary text-secondary">APP</a>
                        <a href="#" class="filter col mx-2 btn btn-outline-secondary text-secondary">CARD</a>
                        <a href="#" class="filter col mx-2 btn btn-outline-secondary text-secondary">WEB</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-1.png') }}" class="img-fluid" alt="portfolio-1-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-2.png') }}" class="img-fluid" alt="portfolio-2-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-3.png') }}" class="img-fluid" alt="portfolio-3-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-4.png') }}" class="img-fluid" alt="portfolio-4-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-5.png') }}" class="img-fluid" alt="portfolio-5-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-6.png') }}" class="img-fluid" alt="portfolio-6-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-7.png') }}" class="img-fluid" alt="portfolio-7-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-8.png') }}" class="img-fluid" alt="portfolio-8-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-9.png') }}" class="img-fluid" alt="portfolio-9-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-10.png') }}" class="img-fluid"
                                alt="portfolio-10-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-1.png') }}" class="img-fluid" alt="portfolio-11-image">
                        </div>
                    </div>
                    <div class="image-wrapper col-lg-4 col-md-6">
                        <div class="image-container">
                            <img src="{{ asset('images/portfolio-7.png') }}" class="img-fluid" alt="portfolio-12-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END portfolio section -->

        <!-- START testimonials section -->
        <section class="testimonials" id="testimonials">
            <div class="container pb-5">
                <div class="text-center pb-5">
                    <h1 class="text-primary">Testimonials</h1>
                </div>
                <div class="container row px-lg-5 mx-5">
                    <div class="col-12 col-lg-2 col-md-3 d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('images/testimonial-1.png') }}"
                            class="img-fluid rounded-circle testimonial-img" alt="testimonial-1-image">
                    </div>
                    <div class="col-12 col-lg-10 col-md-9">
                        <h5 class="font-weight-bold">John Doe</h5>
                        <p class="mb-1 text-light"> Manager </p>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Curabitur
                            faucibus leo ac scelerisque sagittis.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END testimonials section -->

        <!-- START team section -->
        <section class="team" id="team">
            <div class="container pb-5">
                <div class="text-center pb-5">
                    <h1 class="text-primary">Team</h1>
                    <p class="mx-5 px-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris dapibus
                        lorem id ante ornare, vehicula luctus sem interdum. Phasellus maximus, turpis vel cursus
                        aliquam, ante ligula tristique ipsum, eget dictum nisi massa sit amet est.
                    </p>
                </div>
                <div class="container row px-lg-5 mx-5">
                    <div class="col-12 col-md-4 col-lg-3  mb-4 mb-lg-0">
                        <img src="{{ asset('images/team-1.png') }}" class="img-fluid rounded-circle team-img"
                            alt="team-1-image">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3  mb-4 mb-lg-0">
                        <img src="{{ asset('images/team-2.png') }}" class="img-fluid rounded-circle team-img"
                            alt="team-2-image">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3  mb-4 mb-lg-0">
                        <img src="{{ asset('images/team-3.png') }}" class="img-fluid rounded-circle team-img"
                            alt="team-3-image">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3  mb-4 mb-lg-0">
                        <img src="{{ asset('images/team-4.png') }}" class="img-fluid rounded-circle team-img"
                            alt="team-4-image">
                    </div>
                </div>
            </div>
        </section>
        <!-- END team section -->

        <!-- START clients section -->
        <section class="clients" id="clients">
            <div class="container pb-5">
                <div class="text-center pb-5">
                    <h1 class="text-primary">Our Clients</h1>
                    <p class="mx-5 px-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae tempus justo. Mauris dapibus
                        lorem id ante ornare, vehicula luctus sem interdum.
                    </p>
                </div>
                <div class="row">
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                    <div class="image-container col-12 col-md-4 col-lg-3">
                        <img src="{{ asset('images/client-1.png') }}" class="img-fluid rounded client-img"
                            alt="client-1-image">
                    </div>
                </div>
            </div>
        </section>
        <!-- END client section -->

        <!-- START contact-us section -->
        <section class="contact-us" id="contact-us">
            <div class="container pb-5">
                <div class="text-center pb-5">
                    <h1 class="text-primary">Contact Us</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col">
                            <div class="row mb-3 d-flex flex-row align-items-center">
                                <i class="fa fa-map-marker"></i>
                                <p>24622 Unit N Sunrise Park, Chitungwiza, Harare, 1234</p>
                            </div>
                            <div class="row mb-3 d-flex flex-row align-items-center">
                                <i class="fa fa-envelope"></i>
                                <p>hchirozvah@outlook.com</p>
                            </div>
                            <div class="row mb-3 d-flex flex-row align-items-center">
                                <i class="fa fa-phone"></i>
                                <p>+263 778 923 516</p>
                            </div>
                        </div>
                        <div class="form-container mt-5">
                            <form action="/" method="POST" class="form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-block btn-secondary text-light px-3 py-1">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END contact-us section -->

        <!-- START footer -->
        <footer class="footer" id="footer">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-uppercase font-weight-bolder">NEWBIZ</h3>
                        <p>Vestibulum semper nunc commodo est molestie, non auctor mauris rutrum. Curabitur in
                            ornare tortor. Ut ac hendrerit ipsum. Orci varius natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Aenean sed euismod diam. Nunc vel magna eros.
                            Pellentesque imperdiet interdum lectus, in lobortis mauris.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 justify-content-center">
                        <h6 class="text-uppercase font-weight-bolder">Useful Links</h6>
                        <ul class="pl-3">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h6 class="text-uppercase font-weight-bolder">Contact Us</h6>
                        <p>
                            24622 Unit N Sunrise Park <br> Chitungwiza, Harare 1234<br> Zimbabwe <br>
                            <strong>Phone:</strong> +263 778 923 516<br>
                            <strong>Email:</strong> hchirozvah@outlook.com<br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h6 class="text-uppercase font-weight-bolder">Our Newsletter</h6>
                        <p>Vestibulum semper nunc commodo est molestie, non auctor mauris rutrum. Curabitur in
                            ornare tortor. Ut ac hendrerit ipsum. Orci varius natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
            </div>
            <div class="text-center bg-secondary text-light py-3 w-100">
                <p class="mb-0">© Copyright <strong>NEWBIZ</strong>. All Rights Reserved</p>
                <p class="mb-0">Designed by Honest Chirozva</p>
            </div>
        </footer>
        <!-- END footer -->

    </body>

</html>