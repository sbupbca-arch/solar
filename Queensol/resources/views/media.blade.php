@extends('layouts.app')

@section('title', 'Media Gallery')

@section('content')
    <style>
        /* Lightbox styles */
        .lightbox-modal {
            display: none;
            position: fixed;
            z-index: 99999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }
        .lightbox-modal.show {
            display: flex;
        }
        .lightbox-content {
            position: relative;
            max-width: 80%;
            max-height: 80%;
            text-align: center;
        }
        .lightbox-img {
            max-width: 100%;
            max-height: 75vh;
            border-radius: 4px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.5);
        }
        .lightbox-caption {
            color: #ffffff;
            margin-top: 15px;
            font-size: 18px;
        }
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #ffffff;
            font-size: 35px;
            cursor: pointer;
            z-index: 100000;
        }
        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #ffffff;
            font-size: 40px;
            cursor: pointer;
            user-select: none;
            z-index: 100000;
            padding: 10px;
        }
        .lightbox-prev {
            left: 30px;
        }
        .lightbox-next {
            right: 30px;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Media Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Media</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Video Showcase Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase font-weight-bold">Video Showcase</h6>
                <h1 class="mb-4 text-navy">Watch Us In Action</h1>
                <p class="text-muted">Explore our project walk-throughs, educational solar guides, and manufacturing insights.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white p-3 rounded-3 shadow-sm border h-100">
                        <div class="ratio ratio-16x9 rounded overflow-hidden border">
                            <iframe src="https://www.youtube.com/embed/0lh_UWF9FM4" title="How Solar Energy Works" allowfullscreen></iframe>
                        </div>
                        <h4 class="text-navy mt-3">How Solar Energy Works</h4>
                        <p class="text-muted small mb-0 mt-2">A clear, scientific explanation of how photovoltaic panels convert sunlight into clean electricity.</p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white p-3 rounded-3 shadow-sm border h-100">
                        <div class="ratio ratio-16x9 rounded overflow-hidden border">
                            <iframe src="https://www.youtube.com/embed/zJg5n4qQdJw" title="Solis Inverter Factory Tour" allowfullscreen></iframe>
                        </div>
                        <h4 class="text-navy mt-3">Solis Inverter Factory Tour</h4>
                        <p class="text-muted small mb-0 mt-2">A behind-the-scenes look at the high-technology manufacturing facility where Solis inverters are built and tested.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Showcase End -->


    <!-- Image Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase font-weight-bold">Project Gallery</h6>
                <h1 class="mb-4 text-navy">Events & Project Gallery</h1>
                <p class="text-muted">A glimpse of Queensol projects, events, and the teams that bring clean energy to life.</p>
            </div>

            <!-- Filter Controls -->
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" id="gallery-filters">
                <button class="btn btn-primary gallery-filter-btn" data-filter="All">All Projects</button>
                <button class="btn btn-outline-secondary gallery-filter-btn" data-filter="Installation">Installation</button>
                <button class="btn btn-outline-secondary gallery-filter-btn" data-filter="EPC Services">EPC Services</button>
                <button class="btn btn-outline-secondary gallery-filter-btn" data-filter="Residential">Residential</button>
                <button class="btn btn-outline-secondary gallery-filter-btn" data-filter="Inverters">Inverters</button>
                <button class="btn btn-outline-secondary gallery-filter-btn" data-filter="Logistics">Logistics</button>
                <button class="btn btn-outline-secondary gallery-filter-btn" data-filter="Consulting">Consulting</button>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-4" id="gallery-grid">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4 gallery-item" data-category="Installation">
                    <div class="gallery-card" onclick="openLightbox(0)">
                        <span class="gallery-badge">Installation</span>
                        <img class="img-fluid w-100 object-cover aspect-[4/3]" src="{{ asset('img/gallery-1.jpg') }}" alt="Commercial Rooftop Solar">
                        <div class="gallery-overlay">
                            <h4 class="text-white mb-2">Commercial Rooftop Solar</h4>
                            <p class="text-white-50 small">A 150kW grid-tied rooftop solar power plant installed for a manufacturing facility in Pune.</p>
                            <span class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fa fa-search-plus me-1"></i>View Image</span>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4 gallery-item" data-category="EPC Services">
                    <div class="gallery-card" onclick="openLightbox(1)">
                        <span class="gallery-badge">EPC Services</span>
                        <img class="img-fluid w-100 object-cover aspect-[4/3]" src="{{ asset('img/gallery-2.jpg') }}" alt="Industrial EPC Project">
                        <div class="gallery-overlay">
                            <h4 class="text-white mb-2">Industrial EPC Project</h4>
                            <p class="text-white-50 small">Engineering, procurement, and construction of a solar farm enabling clean power for C&I client.</p>
                            <span class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fa fa-search-plus me-1"></i>View Image</span>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4 gallery-item" data-category="Residential">
                    <div class="gallery-card" onclick="openLightbox(2)">
                        <span class="gallery-badge">Residential</span>
                        <img class="img-fluid w-100 object-cover aspect-[4/3]" src="{{ asset('img/gallery-3.jpg') }}" alt="Residential Solar PV">
                        <div class="gallery-overlay">
                            <h4 class="text-white mb-2">Residential Solar PV</h4>
                            <p class="text-white-50 small">High-efficiency mono PERC module installation on a residential rooftop for self-consumption.</p>
                            <span class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fa fa-search-plus me-1"></i>View Image</span>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4 gallery-item" data-category="Inverters">
                    <div class="gallery-card" onclick="openLightbox(3)">
                        <span class="gallery-badge">Inverters</span>
                        <img class="img-fluid w-100 object-cover aspect-[4/3]" src="{{ asset('img/gallery-4.jpg') }}" alt="Solar Inverter Commissioning">
                        <div class="gallery-overlay">
                            <h4 class="text-white mb-2">Solar Inverter Commissioning</h4>
                            <p class="text-white-50 small">Solis commercial string inverters successfully mounted and commissioned with smart monitoring.</p>
                            <span class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fa fa-search-plus me-1"></i>View Image</span>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4 gallery-item" data-category="Logistics">
                    <div class="gallery-card" onclick="openLightbox(4)">
                        <span class="gallery-badge">Logistics</span>
                        <img class="img-fluid w-100 object-cover aspect-[4/3]" src="{{ asset('img/gallery-5.jpg') }}" alt="Authorized Warehouse Stock">
                        <div class="gallery-overlay">
                            <h4 class="text-white mb-2">Authorized Warehouse Stock</h4>
                            <p class="text-white-50 small">Our stocking hubs keeping ready inventory of premium Tier-1 solar panels and accessories.</p>
                            <span class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fa fa-search-plus me-1"></i>View Image</span>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4 gallery-item" data-category="Consulting">
                    <div class="gallery-card" onclick="openLightbox(5)">
                        <span class="gallery-badge">Consulting</span>
                        <img class="img-fluid w-100 object-cover aspect-[4/3]" src="{{ asset('img/gallery-6.jpg') }}" alt="On-Site Technical Survey">
                        <div class="gallery-overlay">
                            <h4 class="text-white mb-2">On-Site Technical Survey</h4>
                            <p class="text-white-50 small">Detailed site engineering survey and feasibility study conducted by our solar experts.</p>
                            <span class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fa fa-search-plus me-1"></i>View Image</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery End -->


    <!-- Fullscreen Lightbox Modal -->
    <div class="lightbox-modal" id="lightbox-modal" onclick="closeLightbox(event)">
        <span class="lightbox-close" onclick="forceCloseLightbox()">&times;</span>
        <span class="lightbox-nav lightbox-prev" onclick="prevImage(event)">&#10094;</span>
        <span class="lightbox-nav lightbox-next" onclick="nextImage(event)">&#10095;</span>
        <div class="lightbox-content">
            <img class="lightbox-img" id="lightbox-img" src="" alt="Preview image">
            <h4 class="lightbox-caption" id="lightbox-caption">Caption</h4>
        </div>
    </div>

    <!-- Interactive Gallery Filters & Lightbox JS -->
    <script>
        const galleryItems = [
            { src: '{{ asset('img/gallery-1.jpg') }}', title: 'Commercial Rooftop Solar', desc: 'A 150kW grid-tied rooftop solar power plant installed for a manufacturing facility in Pune.' },
            { src: '{{ asset('img/gallery-2.jpg') }}', title: 'Industrial EPC Project', desc: 'Engineering, procurement, and construction of a solar farm enabling clean power for C&I client.' },
            { src: '{{ asset('img/gallery-3.jpg') }}', title: 'Residential Solar PV', desc: 'High-efficiency mono PERC module installation on a residential rooftop for self-consumption.' },
            { src: '{{ asset('img/gallery-4.jpg') }}', title: 'Solar Inverter Commissioning', desc: 'Solis commercial string inverters successfully mounted and commissioned with smart monitoring.' },
            { src: '{{ asset('img/gallery-5.jpg') }}', title: 'Authorized Warehouse Stock', desc: 'Our stocking hubs keeping ready inventory of premium Tier-1 solar panels and accessories.' },
            { src: '{{ asset('img/gallery-6.jpg') }}', title: 'On-Site Technical Survey', desc: 'Detailed site engineering survey and feasibility study conducted by our solar experts.' }
        ];

        let currentLightboxIndex = 0;
        const modal = document.getElementById("lightbox-modal");
        const modalImg = document.getElementById("lightbox-img");
        const modalCaption = document.getElementById("lightbox-caption");

        // Filter Functionality
        document.getElementById("gallery-filters").addEventListener("click", (e) => {
            const btn = e.target.closest("button");
            if (!btn) return;

            // Remove active classes
            const btns = document.querySelectorAll(".gallery-filter-btn");
            btns.forEach(b => {
                b.className = "btn btn-outline-secondary gallery-filter-btn";
            });

            // Set active class
            btn.className = "btn btn-primary gallery-filter-btn";

            const filterValue = btn.getAttribute("data-filter");
            const items = document.querySelectorAll(".gallery-item");

            items.forEach(item => {
                const itemCategory = item.getAttribute("data-category");
                if (filterValue === "All" || itemCategory === filterValue) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });

        // Lightbox Functions
        function openLightbox(index) {
            currentLightboxIndex = index;
            const item = galleryItems[index];
            modalImg.src = item.src;
            modalCaption.innerHTML = `<strong>${item.title}</strong><br><span class="text-white-50 small">${item.desc}</span>`;
            modal.classList.add("show");
        }

        function forceCloseLightbox() {
            modal.classList.remove("show");
        }

        function closeLightbox(event) {
            if (event.target === modal) {
                modal.classList.remove("show");
            }
        }

        function prevImage(event) {
            event.stopPropagation();
            currentLightboxIndex = (currentLightboxIndex - 1 + galleryItems.length) % galleryItems.length;
            updateLightboxContent();
        }

        function nextImage(event) {
            event.stopPropagation();
            currentLightboxIndex = (currentLightboxIndex + 1) % galleryItems.length;
            updateLightboxContent();
        }

        // Key Press Listener
        document.addEventListener("keydown", (e) => {
            if (!modal.classList.contains("show")) return;
            if (e.key === "Escape") forceCloseLightbox();
            if (e.key === "ArrowLeft") prevImage(e);
            if (e.key === "ArrowRight") nextImage(e);
        });

        function updateLightboxContent() {
            const item = galleryItems[currentLightboxIndex];
            modalImg.src = item.src;
            modalCaption.innerHTML = `<strong>${item.title}</strong><br><span class="text-white-50 small">${item.desc}</span>`;
        }
    </script>
@endsection
