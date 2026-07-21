<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Queensol Energy India Pvt Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Solar panels, Solar Inverters, SWELECT, Saatvik, Vikram, Jinko, JA Solar, Solis, Sungrow, Solar EPC, India" name="keywords">
    <meta content="Premium solar panels, inverters, energy storage and balance-of-system products. Pan-India EPC, consulting and after-sales services." name="description">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-envelope text-primary me-2"></small>
                    <small>info@queensolenergy.in</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Sat : 09:30 AM - 06:30 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 98765 43210</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-xl bg-white navbar-light sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-xl-5">
            <img src="{{ asset('img/Queensol Energy India Pvt Ltd logo final (1).png') }}" alt="Queensol Energy Logo" style="height: 55px; max-height: 55px;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>
                <a href="/products" class="nav-item nav-link {{ Request::is('products') ? 'active' : '' }}">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('products*') ? 'active' : '' }}" data-bs-toggle="dropdown">Solar Panel</a>
                    <div class="dropdown-menu bg-light m-0">
                        <h6 class="dropdown-header text-primary fw-bold border-bottom pb-1 mb-1">Solar Panel Brands</h6>
                        <a href="/products?brand=swelect" class="dropdown-item">SWELECT</a>
                        <a href="/products?brand=saatvik" class="dropdown-item">Saatvik Green Energy</a>
                        <a href="/products?brand=vikram" class="dropdown-item">Vikram Solar</a>
                        <a href="/products?brand=jinko" class="dropdown-item">Jinko Solar</a>
                        <a href="/products?brand=ja-solar" class="dropdown-item">JA Solar</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('products*') ? 'active' : '' }}" data-bs-toggle="dropdown">Solar Inverters</a>
                    <div class="dropdown-menu bg-light m-0">
                        <h6 class="dropdown-header text-primary fw-bold border-bottom pb-1 mb-1">Inverter Brands</h6>
                        <a href="/products?brand=solis" class="dropdown-item">Solis</a>
                        <a href="/products?brand=sungrow" class="dropdown-item">Sungrow</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="/services" class="nav-link dropdown-toggle {{ Request::is('services*') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <h6 class="dropdown-header text-primary fw-bold border-bottom pb-1 mb-1">All Services</h6>
                        <a href="/services?service=consulting" class="dropdown-item">Solar Consulting Services</a>
                        <a href="/services?service=epc" class="dropdown-item">Project EPC Services</a>
                        <a href="/services?service=management" class="dropdown-item">Management Consulting</a>
                        <a href="/services?service=after-sales" class="dropdown-item">After Sales Service</a>
                        <a href="/services?service=integrator" class="dropdown-item">System Integrator Services</a>
                    </div>
                </div>
                <a href="/media" class="nav-item nav-link {{ Request::is('media') ? 'active' : '' }}">Media</a>
                <a href="/blog" class="nav-item nav-link {{ Request::is('blog*') ? 'active' : '' }}">Blog</a>
                <a href="/careers" class="nav-item nav-link {{ Request::is('careers') ? 'active' : '' }}">Careers</a>
                <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact Us</a>
            </div>
            <a href="/contact#queensolQuoteForm" class="btn btn-primary rounded-0 py-4 px-xl-4 d-none d-xl-block">Request a Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Block -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 pb-3 overflow-hidden wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="mb-3 bg-white p-2 rounded d-inline-block">
                        <img src="{{ asset('img/Queensol Energy India Pvt Ltd logo final (1).png') }}" alt="Queensol Energy Logo" style="height: 40px; max-height: 40px;">
                    </div>
                    <p class="text-white-50 small mb-4" style="line-height: 1.6;">Our knowledge, experience, and passion to enable solar possibilities has led us to become a trusted, fast-growing solar energy partner.</p>
                    
                    <h5 class="text-white mb-3">Corporate Office</h5>
                    <p class="mb-2 text-white-50" style="font-size: 14px;"><i class="fa fa-map-marker-alt me-3 text-primary"></i>Sector 45, Gurgaon, Haryana - 122003</p>
                    <h5 class="text-white mt-4 mb-2">Regional Office</h5>
                    <p class="mb-2 text-white-50" style="font-size: 14px;"><i class="fa fa-map-marker-alt me-3 text-primary"></i>HSR Layout, Sector 2, Bangalore, Karnataka - 560102</p>
                    <p class="mb-2 text-white-50" style="font-size: 14px;"><i class="fa fa-phone-alt me-3 text-primary"></i>+91 98765 43210</p>
                    <p class="mb-2 text-white-50" style="font-size: 14px;"><i class="fa fa-envelope me-3 text-primary"></i>info@queensolenergy.in</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href="https://wa.me/919876543210" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="/contact">Contact Us</a>
                    <a class="btn btn-link" href="/services">Our Services</a>
                    <a class="btn btn-link" href="/products">Product Range</a>
                    <a class="btn btn-link" href="/careers">Careers</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('img/gallery-1.jpg') }}" alt="Gallery image 1">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('img/gallery-2.jpg') }}" alt="Gallery image 2">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('img/gallery-3.jpg') }}" alt="Gallery image 3">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('img/gallery-4.jpg') }}" alt="Gallery image 4">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('img/gallery-5.jpg') }}" alt="Gallery image 5">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('img/gallery-6.jpg') }}" alt="Gallery image 6">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p class="text-white-50">Stay updated with the latest solar market insights and Tier-1 stock notifications.</p>
                    <div class="position-relative mx-auto mb-3" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                    <div class="mt-3">
                        <a href="{{ asset('img/Queensol-Company-Profile.pdf') }}" download class="btn btn-footer-pdf rounded-pill py-2 px-3 w-100 d-inline-flex align-items-center justify-content-center" style="font-size: 14px;" title="Download Queensol Brochure PDF">
                            <i class="fa fa-file-pdf text-primary me-2 fs-5"></i> Download Brochure (PDF)
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-white-50">
                        &copy; <a href="#">Queensol Energy India Pvt Ltd</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white-50">
                        Designed and Developed by <a href="https://dddigitalsolution.com" target="_blank" rel="noopener noreferrer" class="text-white border-bottom">Darshand Digital Solution LLP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- WhatsApp Floating Button Start -->
    <a href="https://wa.me/919876543210" target="_blank" rel="noopener noreferrer" class="whatsapp-float wow fadeIn" data-wow-delay="0.5s" title="Chat on WhatsApp">
        <span class="whatsapp-pulse"></span>
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>
    <!-- WhatsApp Floating Button End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
