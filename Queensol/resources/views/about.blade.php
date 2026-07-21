@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Mission Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/gallery-2.jpg') }}" alt="Our Mission" style="object-fit: cover; aspect-ratio: 4/3; width: 100%;">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Mission</h6>
                    <h1 class="mb-4">Enabling Clean Energy Across India</h1>
                    <p class="mb-4 lead text-secondary">To become a trusted solar energy partner for customers, businesses, project developers, installers, and communities.</p>
                    <p class="text-muted">We deliver reliable Tier-1 products, deep technical consulting, and sustainable solar solutions that empower India's clean energy transition, making clean power accessible and viable for everyone.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Section End -->


    <!-- Vision Section Start -->
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Vision</h6>
                    <h1 class="mb-4">A Sustainable, Solar-Powered Future</h1>
                    <p class="mb-4 lead text-secondary">To lead the transition to renewable energy by enabling, enhancing, and ensuring clean energy possibilities across the entire solar value chain.</p>
                    <p class="text-muted">We envision a future where clean, reliable, and affordable solar power is accessible to every community and industry, paving the way for a decarbonized global economy.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/gallery-3.jpg') }}" alt="Our Vision" style="object-fit: cover; aspect-ratio: 4/3; width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Vision Section End -->


    <!-- Core Values Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-3 p-4 bg-white rounded shadow-sm border">
                        <div class="col-6 col-sm-4 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-shield-alt"></i></div>
                            <div class="small fw-bold text-navy">Accountability</div>
                        </div>
                        <div class="col-6 col-sm-4 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-award"></i></div>
                            <div class="small fw-bold text-navy">Excellence</div>
                        </div>
                        <div class="col-6 col-sm-4 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-users"></i></div>
                            <div class="small fw-bold text-navy">Customer Focus</div>
                        </div>
                        <div class="col-6 col-sm-4 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-heart"></i></div>
                            <div class="small fw-bold text-navy">Integrity</div>
                        </div>
                        <div class="col-6 col-sm-4 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-graduation-cap"></i></div>
                            <div class="small fw-bold text-navy">Learning</div>
                        </div>
                        <div class="col-6 col-sm-4 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-handshake"></i></div>
                            <div class="small fw-bold text-navy">Respect</div>
                        </div>
                        <div class="col-12 text-center p-3">
                            <div class="mb-2" style="color: var(--primary); font-size: 28px;"><i class="fa fa-leaf"></i></div>
                            <div class="small fw-bold text-navy">Sustainability</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Core Values</h6>
                    <h1 class="mb-4">Driven by Integrity, Guided by Principles</h1>
                    <p class="mb-4 lead text-secondary">We believe in building relationships based on trust, excellence, and shared responsibility. Our core values guide every interaction, quote, and project installation.</p>
                    <p class="text-muted">Whether dealing with global Tier-1 manufacturing partners, small local installers, or large EPC firms, we hold ourselves to the highest ethical and professional standards.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Values Section End -->


    <!-- Future Plans Section Start -->
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Future Plans</h6>
                    <h1 class="mb-4">Scaling India's Clean Grid</h1>
                    <p class="mb-4 lead text-secondary">We are actively expanding our warehousing footprint to 25+ stocking locations across India, ensuring faster local supply and lower logistics costs.</p>
                    <p class="text-muted">Our roadmap includes investing in smart balance-of-system (BOS) innovations, boosting technical support infrastructure, and enabling 5 GW+ of high-efficiency solar installations by 2030.</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/carousel-1.jpg') }}" alt="Our Future Plans" style="object-fit: cover; aspect-ratio: 4/3; width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Future Plans Section End -->


    <!-- How Did We Originate Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/carousel-2.jpg') }}" alt="How Did We Originate" style="object-fit: cover; aspect-ratio: 4/3; width: 100%;">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-2">How Did We Originate</h6>
                    <h1 class="mb-4">Born from Passion and Technical Expertise</h1>
                    <p class="mb-4 lead text-secondary">Queensol was founded by a team of passionate solar engineering pioneers who realized that developers and installers needed a single, highly reliable partner in the supply chain.</p>
                    <p class="text-muted">Starting from a single regional office, we have grown into a leading Tier-1 solar product distributor, EPC consulting, and support powerhouse with stocking hubs and warehousing networks across the nation.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- How Did We Originate Section End -->


    <!-- Leadership Section Start -->
    <div class="container-fluid py-5 border-top border-bottom border-light bg-light">
        <div class="container mb-5">
            <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Leadership</h6>
            <h1 class="mb-4">Meet Our Leaders</h1>
        </div>

        <!-- Continuous Marquee Slider -->
        <div class="leader-marquee-container">
            <div class="leader-marquee-track">
                <!-- First Set of Leaders -->
                <div class="leader-marquee-slide">
                    <!-- Leader 1 -->
                    <div class="leader-slider-card">
                        <div class="leader-card-info">
                            <h3 class="leader-card-name">Manish Asija</h3>
                            <h4 class="leader-card-role text-primary">Founder Director and CEO</h4>
                            <p class="leader-card-bio text-muted small">Manish is a professional with entrepreneurial flair and brings with him experience of seventeen years in Indian power sector. He has served in two successful energy startups in leadership capacity and with Tata Power DDL in their strategy team in past. He has served in critical business functions like formulating and executing business strategies, incubating and growing strategic initiatives, leading new business lines, delivering mission critical projects and managing complex commercial processes. He is the growth propeller at Queensol Energy.</p>
                        </div>
                        <div class="leader-card-img-wrapper">
                            <div class="w-100 h-100 bg-white d-flex align-items-center justify-content-center text-primary rounded-circle border shadow-sm" style="min-height: 100px;">
                                <i class="fa fa-user fa-4x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Leader 2 -->
                    <div class="leader-slider-card">
                        <div class="leader-card-info">
                            <h3 class="leader-card-name">Anmol Sharma</h3>
                            <h4 class="leader-card-role text-primary">Co-Founder and Chief Operating Officer</h4>
                            <p class="leader-card-bio text-muted small">Anmol brings over 12 years of core experience in supply chain optimization, engineering procurement, and operations within the solar sector. He oversees Queensol's pan-India logistics network, managing our strategic stocking hubs to ensure last-mile speed, secure warehouse handling, and flawless commissioning for industrial-scale EPC projects.</p>
                        </div>
                        <div class="leader-card-img-wrapper">
                            <div class="w-100 h-100 bg-white d-flex align-items-center justify-content-center text-primary rounded-circle border shadow-sm" style="min-height: 100px;">
                                <i class="fa fa-user fa-4x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Leader 3 -->
                    <div class="leader-slider-card">
                        <div class="leader-card-info">
                            <h3 class="leader-card-name">Dr. Rajesh Iyer</h3>
                            <h4 class="leader-card-role text-primary">Chief Technical Consultant</h4>
                            <p class="leader-card-bio text-muted small">Rajesh is a leading voice in photovoltaic technology and grid-integration systems, with a PhD in Renewable Energy. He directs Queensol's pre-feasibility, detailed project reports (DPRs), and lender engineering workflows, ensuring that every solar array is optimized for maximum lifetime yield and bankability.</p>
                        </div>
                        <div class="leader-card-img-wrapper">
                            <div class="w-100 h-100 bg-white d-flex align-items-center justify-content-center text-primary rounded-circle border shadow-sm" style="min-height: 100px;">
                                <i class="fa fa-user fa-4x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Set of Leaders (Duplicated for Continuous Scroll) -->
                <div class="leader-marquee-slide">
                    <!-- Leader 1 -->
                    <div class="leader-slider-card">
                        <div class="leader-card-info">
                            <h3 class="leader-card-name">Manish Asija</h3>
                            <h4 class="leader-card-role text-primary">Founder Director and CEO</h4>
                            <p class="leader-card-bio text-muted small">Manish is a professional with entrepreneurial flair and brings with him experience of seventeen years in Indian power sector. He has served in two successful energy startups in leadership capacity and with Tata Power DDL in their strategy team in past. He has served in critical business functions like formulating and executing business strategies, incubating and growing strategic initiatives, leading new business lines, delivering mission critical projects and managing complex commercial processes. He is the growth propeller at Queensol Energy.</p>
                        </div>
                        <div class="leader-card-img-wrapper">
                            <div class="w-100 h-100 bg-white d-flex align-items-center justify-content-center text-primary rounded-circle border shadow-sm" style="min-height: 100px;">
                                <i class="fa fa-user fa-4x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Leader 2 -->
                    <div class="leader-slider-card">
                        <div class="leader-card-info">
                            <h3 class="leader-card-name">Anmol Sharma</h3>
                            <h4 class="leader-card-role text-primary">Co-Founder and Chief Operating Officer</h4>
                            <p class="leader-card-bio text-muted small">Anmol brings over 12 years of core experience in supply chain optimization, engineering procurement, and operations within the solar sector. He oversees Queensol's pan-India logistics network, managing our strategic stocking hubs to ensure last-mile speed, secure warehouse handling, and flawless commissioning for industrial-scale EPC projects.</p>
                        </div>
                        <div class="leader-card-img-wrapper">
                            <div class="w-100 h-100 bg-white d-flex align-items-center justify-content-center text-primary rounded-circle border shadow-sm" style="min-height: 100px;">
                                <i class="fa fa-user fa-4x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Leader 3 -->
                    <div class="leader-slider-card">
                        <div class="leader-card-info">
                            <h3 class="leader-card-name">Dr. Rajesh Iyer</h3>
                            <h4 class="leader-card-role text-primary">Chief Technical Consultant</h4>
                            <p class="leader-card-bio text-muted small">Rajesh is a leading voice in photovoltaic technology and grid-integration systems, with a PhD in Renewable Energy. He directs Queensol's pre-feasibility, detailed project reports (DPRs), and lender engineering workflows, ensuring that every solar array is optimized for maximum lifetime yield and bankability.</p>
                        </div>
                        <div class="leader-card-img-wrapper">
                            <div class="w-100 h-100 bg-white d-flex align-items-center justify-content-center text-primary rounded-circle border shadow-sm" style="min-height: 100px;">
                                <i class="fa fa-user fa-4x opacity-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leadership Section End -->
@endsection
