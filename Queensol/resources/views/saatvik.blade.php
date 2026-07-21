@extends('layouts.app')

@section('title', 'Saatvik Solar Panels | Queensol Energy India')

@section('content')
    <!-- Page Header Start (Hero Banner) -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(26, 42, 54, 0.75), rgba(26, 42, 54, 0.85)), url('{{ asset('img/carousel-1.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Saatvik Green Energy</h1>
            <p class="fs-5 text-white-50 mb-4 pb-2 max-w-2xl">Mono PERC and TOPCon panels engineered specifically for Indian climatic conditions.</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/products">Products</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Saatvik Solar</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Overview Section Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 align-items-center">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded-3 overflow-hidden shadow-sm">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/solar-panel.jpg') }}" style="object-fit: cover;" alt="Saatvik Solar Panels Overview">
                        <div class="position-absolute bottom-0 start-0 m-4 welcome-badge bg-white p-3 rounded border-start border-4 border-primary shadow" style="max-width: 260px; z-index: 5;">
                            <h6 class="text-secondary fw-bold mb-1"><i class="fa fa-solar-panel text-primary me-2"></i>Saatvik Authorized</h6>
                            <span class="text-dark font-medium" style="font-size: 13px;">Pan-India Ready Stock Availability</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary text-uppercase fw-bold mb-2">Solar Panels</h6>
                        <h1 class="mb-4">Brand Overview</h1>
                        <p class="mb-4">Saatvik Green Energy is a leading Indian solar PV module manufacturer, providing high-efficiency Mono PERC and TOPCon panels built to withstand demanding Indian weather conditions. Distributed through Queensol Energy India's extensive warehouse network.</p>
                        <h5 class="text-secondary mb-3"><i class="fa fa-list-check text-primary me-2"></i>Key Features & Support</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Authorized distributor warranty</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Pan-India stock availability</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Engineering & sizing support</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Certification on request</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Competitive landed pricing</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Lifetime technical assistance</p>
                            </div>
                        </div>
                        <a href="/contact#queensolQuoteForm" class="btn btn-primary rounded-pill py-3 px-5">Get Wholesale Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Overview Section End -->


    <!-- Key Highlights / Why Choose Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Why Choose Saatvik</h6>
                <h1 class="mb-4">Key Brand Highlights</h1>
                <p>Designed for maximum yield, durable mechanical strength, and bankable long-term performance.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-4 h-100 border border-1 border-light shadow-sm hover-shadow transition-all">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="btn btn-square btn-primary rounded-circle fw-bold fs-5">1</span>
                            <i class="fa fa-industry text-secondary fs-3"></i>
                        </div>
                        <h5 class="mb-3">Made in India</h5>
                        <p class="text-secondary small mb-0">State-of-the-art automated PV module manufacturing facilities operating with international quality benchmarks.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-4 h-100 border border-1 border-light shadow-sm hover-shadow transition-all">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="btn btn-square btn-primary rounded-circle fw-bold fs-5">2</span>
                            <i class="fa fa-sun text-secondary fs-3"></i>
                        </div>
                        <h5 class="mb-3">Engineered for India</h5>
                        <p class="text-secondary small mb-0">High-efficiency Mono PERC & TOPCon modules optimized for extreme heat, dust, and humidity resistance.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded p-4 h-100 border border-1 border-light shadow-sm hover-shadow transition-all">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="btn btn-square btn-primary rounded-circle fw-bold fs-5">3</span>
                            <i class="fa fa-certificate text-secondary fs-3"></i>
                        </div>
                        <h5 class="mb-3">BIS & PID Certified</h5>
                        <p class="text-secondary small mb-0">Full compliance with Indian DISCOM & ALMM standards, PID-free cells, and anti-reflective glass coating.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light rounded p-4 h-100 border border-1 border-light shadow-sm hover-shadow transition-all">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="btn btn-square btn-primary rounded-circle fw-bold fs-5">4</span>
                            <i class="fa fa-chart-line text-secondary fs-3"></i>
                        </div>
                        <h5 class="mb-3">High Efficiency</h5>
                        <p class="text-secondary small mb-0">Available in 535-545 Wp+ power ratings with module efficiencies up to 21.5% and linear performance warranty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Key Highlights / Why Choose End -->


    <!-- Download Datasheet Section Start -->
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-4">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Technical Specifications & Docs</h6>
                <h1 class="mb-3">Download Technical Datasheets</h1>
                <p>Access official product specification sheets, warranty documentation, and engineering data.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ asset('uploads/SWELECT_580WP_TOPCON_New Data sheet_144X.pdf') }}" target="_blank" rel="noopener noreferrer" class="card border-0 shadow-sm p-4 rounded-3 h-100 d-flex flex-row align-items-center justify-content-between text-decoration-none hover-shadow transition-all bg-white">
                        <div class="d-flex align-items-center me-3">
                            <div class="btn-square btn-primary rounded-3 me-3 flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fa fa-file-pdf text-white fs-4"></i>
                            </div>
                            <div>
                                <small class="text-primary fw-bold text-uppercase d-block" style="font-size: 11px;">PDF Datasheet</small>
                                <span class="h6 mb-0 text-dark fw-bold">Saatvik 580Wp TOPCON</span>
                            </div>
                        </div>
                        <i class="fa fa-arrow-right text-primary fs-5"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{ asset('uploads/SWELECT_585WP_GG_TOPCON_144X.pdf') }}" target="_blank" rel="noopener noreferrer" class="card border-0 shadow-sm p-4 rounded-3 h-100 d-flex flex-row align-items-center justify-content-between text-decoration-none hover-shadow transition-all bg-white">
                        <div class="d-flex align-items-center me-3">
                            <div class="btn-square btn-primary rounded-3 me-3 flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fa fa-file-pdf text-white fs-4"></i>
                            </div>
                            <div>
                                <small class="text-primary fw-bold text-uppercase d-block" style="font-size: 11px;">PDF Datasheet</small>
                                <span class="h6 mb-0 text-dark fw-bold">Saatvik 585Wp GG TOPCON</span>
                            </div>
                        </div>
                        <i class="fa fa-arrow-right text-primary fs-5"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ asset('uploads/SWELECT_550WP_Mono facial P-Type_144X.pdf') }}" target="_blank" rel="noopener noreferrer" class="card border-0 shadow-sm p-4 rounded-3 h-100 d-flex flex-row align-items-center justify-content-between text-decoration-none hover-shadow transition-all bg-white">
                        <div class="d-flex align-items-center me-3">
                            <div class="btn-square btn-primary rounded-3 me-3 flex-shrink-0" style="width: 48px; height: 48px;">
                                <i class="fa fa-file-pdf text-white fs-4"></i>
                            </div>
                            <div>
                                <small class="text-primary fw-bold text-uppercase d-block" style="font-size: 11px;">PDF Datasheet</small>
                                <span class="h6 mb-0 text-dark fw-bold">Saatvik 550Wp Mono PERC</span>
                            </div>
                        </div>
                        <i class="fa fa-arrow-right text-primary fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Download Datasheet Section End -->


    <!-- Brand Strengths Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Strengths</h6>
                <h1 class="mb-4">Saatvik Brand Strengths</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-sm p-4 text-center rounded-3 bg-white h-100">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-flag fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Made in India</h5>
                        <p class="text-secondary small mb-0">Indigenous manufacturing supporting Make in India initiative.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm p-4 text-center rounded-3 bg-white h-100">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-3"></i>
                        </div>
                        <h5 class="fw-bold">BIS Certified</h5>
                        <p class="text-secondary small mb-0">Bureau of Indian Standards certified for DISCOM grid connection.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card border-0 shadow-sm p-4 text-center rounded-3 bg-white h-100">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-bolt fs-3"></i>
                        </div>
                        <h5 class="fw-bold">PID Resistant</h5>
                        <p class="text-secondary small mb-0">Anti-PID cell technology ensures minimal degradation over lifetime.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="card border-0 shadow-sm p-4 text-center rounded-3 bg-white h-100">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-sun fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Low Light Performance</h5>
                        <p class="text-secondary small mb-0">Superior energy generation during early morning, dusk, and cloudy days.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Strengths End -->


    <!-- Product Details & Specs Section Start -->
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase fw-bold mb-2">Product Details</h6>
                    <h1 class="mb-4">Saatvik Solar Modules Specs</h1>
                    <p class="mb-4">Engineered with multi-busbar (MBB) cell architecture and anti-reflective tempered glass to maximize solar absorption and mechanical load resistance under heavy wind and snow loads.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm p-4 rounded-3 bg-white h-100">
                                <h5 class="text-dark fw-bold mb-3"><i class="fa fa-shield-alt text-primary me-2"></i>Features</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Made in India manufacturing</li>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Mono PERC and TOPCon</li>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>535-545 Wp power range</li>
                                    <li class="mb-0"><i class="fa fa-check text-primary me-2"></i>Up to 21.5% efficiency</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm p-4 rounded-3 bg-white h-100">
                                <h5 class="text-dark fw-bold mb-3"><i class="fa fa-certificate text-primary me-2"></i>Certifications</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>IEC 61215 & 61730</li>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>BIS Certified</li>
                                    <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>TÜV Certified</li>
                                    <li class="mb-0"><i class="fa fa-check text-primary me-2"></i>Anti-PID Certified</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative rounded-3 overflow-hidden shadow">
                        <img class="img-fluid w-100" src="{{ asset('img/about.jpg') }}" alt="Saatvik Solar Technical Installation">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details & Specs Section End -->


    <!-- Available Product Ranges Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase fw-bold mb-2">Product Range</h6>
                <h1 class="mb-4">Available Product Ranges</h1>
                <p>Explore high-performance modules engineered for commercial, industrial, and residential projects.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-light h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="badge bg-secondary text-white text-uppercase tracking-wider mb-2">SGV Series</span>
                            <h4 class="fw-bold mb-3">Saatvik Mono PERC Solar Module</h4>
                            <p class="text-secondary small mb-4">Premium monocrystalline PERC solar panels optimized for Indian climates with high thermal stability.</p>
                        </div>
                        <div class="border-top pt-3 d-flex flex-wrap gap-2">
                            <span class="badge bg-primary text-white">535-545 Wp</span>
                            <span class="badge bg-primary text-white">21.2% Efficiency</span>
                            <span class="badge bg-primary text-white">PID Free</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Available Product Ranges End -->


    <!-- Request Quote CTA Section Start -->
    <div class="container-fluid bg-primary text-white py-5 my-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-4">
            <h2 class="text-white display-5 fw-bold mb-3">Get the Best Price on Saatvik Solar Modules</h2>
            <p class="fs-5 text-white-50 max-w-2xl mx-auto mb-4">Talk to Queensol energy specialists for tailored wholesale quotations and immediate warehouse stock confirmation.</p>
            <a href="/contact#queensolQuoteForm" class="btn btn-dark rounded-pill py-3 px-5 shadow">Request a Quotation <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </div>
    <!-- Request Quote CTA Section End -->


    <!-- Featured Solar Products Slider Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
                <div>
                    <h6 class="text-primary text-uppercase fw-bold mb-2">Solar Catalogue</h6>
                    <h1 class="mb-0">Featured Tier-1 Solar Products</h1>
                </div>
                <a href="/products" class="btn btn-outline-primary rounded-pill py-2 px-4 mt-3 mt-md-0">View All Products <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
            
            <div class="owl-carousel product-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                <!-- Product 1 -->
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden m-2 h-100">
                    <img class="img-fluid" src="{{ asset('img/solar-panel.jpg') }}" alt="SWELECT Solar Panel">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-primary border border-primary">Solar Module</span>
                            <small class="text-muted fw-bold">SWELECT</small>
                        </div>
                        <h5 class="fw-bold mb-2">SWELECT HH Series</h5>
                        <p class="text-secondary small mb-3">High-efficiency half-cut mono PV modules engineered for durability.</p>
                        <a href="/products?brand=swelect" class="btn btn-link text-primary p-0 fw-bold">Explore Product <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden m-2 h-100">
                    <img class="img-fluid" src="{{ asset('img/solar-inverter.jpg') }}" alt="Solis Inverter">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-primary border border-primary">Inverter</span>
                            <small class="text-muted fw-bold">SOLIS</small>
                        </div>
                        <h5 class="fw-bold mb-2">Solis Grid-Tied Inverter</h5>
                        <p class="text-secondary small mb-3">Triple-MPPT utility inverters designed for commercial rooftop systems.</p>
                        <a href="/products?brand=solis" class="btn btn-link text-primary p-0 fw-bold">Explore Product <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden m-2 h-100">
                    <img class="img-fluid" src="{{ asset('img/battery-storage.jpg') }}" alt="Jinko Solar Panel">
                    <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-light text-primary border border-primary">Solar Module</span>
                            <small class="text-muted fw-bold">JINKO</small>
                        </div>
                        <h5 class="fw-bold mb-2">Jinko Tiger Neo N-Type</h5>
                        <p class="text-secondary small mb-3">Leading-edge N-type technology with outstanding low-light performance.</p>
                        <a href="/products?brand=jinko" class="btn btn-link text-primary p-0 fw-bold">Explore Product <i class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Solar Products Slider End -->
@endsection
