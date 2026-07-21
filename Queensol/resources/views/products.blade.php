@extends('layouts.app')

@section('title', 'Product Range')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Container Start -->
    <div class="container-xxl py-5">
        <div class="container animate-fade-in" id="product-index-view">
            <div class="row g-5">
                <!-- Sidebar Filters -->
                <div class="col-lg-3">
                    <div class="bg-light p-4 rounded-3 border">
                        <h4 class="mb-4 text-navy fw-bold"><i class="fa fa-filter text-primary me-2"></i>Filters</h4>
                        
                        <!-- Search Box -->
                        <div class="mb-4">
                            <label class="form-label fw-bold text-dark">Search Catalogue</label>
                            <div class="position-relative">
                                <input type="text" id="product-search" class="form-control" placeholder="Search model or spec...">
                                <i class="fa fa-search position-absolute text-muted" style="right: 15px; top: 12px;"></i>
                            </div>
                        </div>

                        <!-- Category Filter -->
                        <div class="mb-4">
                            <label class="form-label fw-bold text-dark">Category</label>
                            <div class="d-flex flex-column gap-2" id="category-filters">
                                <button class="btn btn-sm btn-primary text-start px-3" data-category="All">All Categories</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-category="Solar Panels">Solar Panels</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-category="Solar Inverters">Solar Inverters</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-category="Energy Storage">Energy Storage</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-category="Balance of System">Balance of System</button>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div>
                            <label class="form-label fw-bold text-dark">Brand Partner</label>
                            <div class="d-flex flex-column gap-2" id="brand-filters">
                                <button class="btn btn-sm btn-primary text-start px-3" data-brand="All">All Brands</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="Solis">Solis</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="Sungrow">Sungrow</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="SWELECT">SWELECT</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="Saatvik Green Energy">Saatvik</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="Vikram Solar">Vikram Solar</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="Jinko Solar">Jinko Solar</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="JA Solar">JA Solar</button>
                                <button class="btn btn-sm btn-outline-secondary text-start px-3" data-brand="Balance of System">Balance of System</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-lg-9">
                    <div class="text-center mx-auto mb-5 wow fadeInUp text-lg-start" data-wow-delay="0.1s" style="max-width: 600px; margin-left: 0 !important;">
                        <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Catalogue</h6>
                        <h1 class="mb-4 text-navy">Authorized Solar Components</h1>
                        <p class="text-muted">High-performance solar hardware with direct warranty support from Tier-1 global partners.</p>
                    </div>

                    <div class="row g-4" id="products-grid">
                        <!-- Dynamic items rendered via JS -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Product Detail View -->
        <div class="container d-none" id="product-detail-view">
            <div class="p-4 p-md-5 bg-white rounded-3 shadow border">
                <button class="btn btn-outline-primary mb-4" onclick="closeProductDetail()"><i class="fa fa-arrow-left me-2"></i>Back to Catalogue</button>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img id="detail-img" class="img-fluid rounded shadow" src="" alt="" style="width:100%; aspect-ratio:4/3; object-fit:cover;">
                    </div>
                    <div class="col-lg-6">
                        <span id="detail-category-badge" class="badge bg-primary text-uppercase px-3 py-2 mb-3">Category</span>
                        <h1 id="detail-name" class="text-navy mb-2">Product Name</h1>
                        <h5 class="text-muted mb-4">Brand: <span id="detail-brand" class="text-primary fw-bold">Brand</span> | Model: <span id="detail-model" class="text-dark fw-bold">Model</span></h5>
                        <p id="detail-desc" class="lead text-secondary mb-4">Detailed description goes here.</p>
                        
                        <div class="mb-5">
                            <h5 class="text-dark mb-3 fw-bold">Specifications:</h5>
                            <div class="row g-2" id="detail-specs-grid">
                                <!-- Specs list -->
                            </div>
                        </div>

                        <a id="detail-quote-btn" href="/contact?product=model" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-sm">Get Sizing Quote ➔</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Container End -->

    <!-- Product Database & Rendering Script -->
    <script>
        const products = [
            {
                slug: "solis-energy-storage",
                name: "Solis Energy Storage Inverter",
                brand: "Solis",
                category: "Solar Inverters",
                model: "RHI Series",
                desc: "Hybrid energy storage inverter for residential and small commercial solar+battery systems.",
                specs: ["3-6 kW Output Range", "Dual MPPT Trackers", "IP65 Outdoor Rated", "Real-Time Wi-Fi Monitoring"],
                image: "{{ asset('img/gallery-1.jpg') }}"
            },
            {
                slug: "solis-100kw",
                name: "100-110kW Three Phase Inverter",
                brand: "Solis",
                category: "Solar Inverters",
                model: "S5-GC110K",
                desc: "High-efficiency commercial three-phase string inverter for utility scale rooftop and ground-mount plants.",
                specs: ["100-110 kW Range", "10 Independent MPPTs", "98.7% Peak Efficiency", "IP66 Protection Rating"],
                image: "{{ asset('img/gallery-2.jpg') }}"
            },
            {
                slug: "solis-80kw",
                name: "80kW Three Phase Inverter",
                brand: "Solis",
                category: "Solar Inverters",
                model: "S5-GC80K",
                desc: "Powerful three-phase inverter built for medium Commercial & Industrial (C&I) rooftop projects.",
                specs: ["80 kW Power Output", "9 MPPT Trackers", "98.6% Conversion Efficiency", "IP66 Protected Enclosure"],
                image: "{{ asset('img/gallery-3.jpg') }}"
            },
            {
                slug: "solis-20kw",
                name: "5-20kW Three Phase Inverter",
                brand: "Solis",
                category: "Solar Inverters",
                model: "S6 Series",
                desc: "Versatile three-phase inverter range for residential and small commercial properties.",
                specs: ["5-20 kW Output", "Dual MPPT Inputs", "Integrated AFCI Protection", "IP66 Ingress Rating"],
                image: "{{ asset('img/gallery-4.jpg') }}"
            },
            {
                slug: "solis-5kw",
                name: "4-5kW Single Phase Inverter",
                brand: "Solis",
                category: "Solar Inverters",
                model: "S6 Mini",
                desc: "Compact single-phase inverter for residential rooftops with limited shading.",
                specs: ["4-5 kW Single Phase", "Dual MPPT Sizing", "Smart Wi-Fi Monitoring Module", "IP66 Rated Enclosure"],
                image: "{{ asset('img/gallery-5.jpg') }}"
            },
            {
                slug: "solis-mini",
                name: "Solis Mini Series Inverter",
                brand: "Solis",
                category: "Solar Inverters",
                model: "Mini 700-3600",
                desc: "Ultra-compact single-phase string inverters designed for small residential solar grids.",
                specs: ["0.7-3.6 kW Power", "Single High-Efficiency MPPT", "Plug & Play Solar Grid Link", "IP65 Weather Resistance"],
                image: "{{ asset('img/gallery-6.jpg') }}"
            },
            {
                slug: "sungrow-hybrid",
                name: "Sungrow Hybrid Storage Inverter",
                brand: "Sungrow",
                category: "Energy Storage",
                model: "SH Series",
                desc: "High-efficiency hybrid inverter optimized for solar generation + battery backup systems.",
                specs: ["3-10 kW Output", "Dual MPPT Trackers", "Seamless Battery Backup Link", "IP65 Weatherproof"],
                image: "{{ asset('img/gallery-1.jpg') }}"
            },
            {
                slug: "swelect-mono",
                name: "Mono PERC Solar Module",
                brand: "SWELECT",
                category: "Solar Panels",
                model: "SW Series",
                desc: "Reliable made-in-India monocrystalline PERC modules engineered for tough environmental profiles.",
                specs: ["540-550 Wp Output", "21.4% Module Efficiency", "Anti-PID Resistance Certified", "25-Year Liner Power Warranty"],
                image: "{{ asset('img/gallery-2.jpg') }}"
            },
            {
                slug: "vikram-bifacial",
                name: "Bifacial Mono PERC Module",
                brand: "Vikram Solar",
                category: "Solar Panels",
                model: "Somera Grand Ultima",
                desc: "Award-winning dual-glass bifacial modules with up to 25% albedo power generation gains.",
                specs: ["545-555 Wp Output", "Bifacial Generation", "Dual Tempered Glass Setup", "30-Year Extended Warranty"],
                image: "{{ asset('img/gallery-3.jpg') }}"
            },
            {
                slug: "jinko-tiger-neo",
                name: "N-Type TOPCon Solar Module",
                brand: "Jinko Solar",
                category: "Solar Panels",
                model: "Tiger Neo",
                desc: "Next-gen N-Type TOPCon modules with ultra-low power degradation and superior temperature coefficients.",
                specs: ["575-620 Wp Power", "22.3% Premium Efficiency", "0.4% Annual Degradation Rate", "30-Year Performance Guarantee"],
                image: "{{ asset('img/gallery-4.jpg') }}"
            },
            {
                slug: "sungrow-mppt",
                name: "Multi-MPPT String Inverter",
                brand: "Sungrow",
                category: "Solar Inverters",
                model: "SG110CX",
                desc: "Utility-scale three-phase string inverter with high MPPT configuration for complex rooftop shading.",
                specs: ["110 kW Heavy Duty", "9 Independent MPPTs", "98.9% Peak Efficiency Rating", "Smart Inverter Diagnostics Engine"],
                image: "{{ asset('img/gallery-5.jpg') }}"
            },
            {
                slug: "saatvik-mono",
                name: "Saatvik Mono PERC Module",
                brand: "Saatvik Green Energy",
                category: "Solar Panels",
                model: "SGV Series",
                desc: "High-efficiency monocrystalline solar panels engineered for optimized yields under Indian conditions.",
                specs: ["535-545 Wp Rating", "21.2% Conversion Efficiency", "100% PID Free Cells", "25-Year Warranty Cover"],
                image: "{{ asset('img/gallery-6.jpg') }}"
            },
            {
                slug: "ja-solar-mono",
                name: "JA Premium Mono Solar Module",
                brand: "JA Solar",
                category: "Solar Panels",
                model: "DeepBlue 3.0",
                desc: "High-power monocrystalline PV modules trusted in commercial solar grids globally.",
                specs: ["545-555 Wp Power", "21.5% Cell Efficiency", "Multi-Busbar Technology", "Superior Shading Yields"],
                image: "{{ asset('img/gallery-3.jpg') }}"
            },
            {
                slug: "bos-accessories",
                name: "Balance of System Accessories",
                brand: "Balance of System",
                category: "Balance of System",
                model: "BOS Kit",
                desc: "Certified mounting structures, ACDB/DCDB boxes, AC/DC solar cables, MC4 connectors, and hardware.",
                specs: ["Hot-Dip Galvanized Steel", "TUV Rheinland Certified", "IP67 Protection Connectors", "Ready for Remote Monitoring"],
                image: "{{ asset('img/gallery-1.jpg') }}"
            }
        ];

        let activeCategory = "All";
        let activeBrand = "All";

        const searchInput = document.getElementById("product-search");
        const categoryFilters = document.getElementById("category-filters");
        const brandFilters = document.getElementById("brand-filters");
        const productsGrid = document.getElementById("products-grid");

        const indexView = document.getElementById("product-index-view");
        const detailView = document.getElementById("product-detail-view");

        function init() {
            // Check query parameters
            const urlParams = new URLSearchParams(window.location.search);
            const brandParam = urlParams.get('brand');
            const productParam = urlParams.get('product');

            if (productParam) {
                showProductDetail(productParam);
            } else {
                if (brandParam) {
                    activeBrand = brandParam.toLowerCase();
                    // Match brand to filter list
                    if (activeBrand === 'ja-solar') activeBrand = 'ja solar';
                    if (activeBrand === 'saatvik') activeBrand = 'saatvik green energy';
                    if (activeBrand === 'vikram') activeBrand = 'vikram solar';
                    if (activeBrand === 'jinko') activeBrand = 'jinko solar';
                    updateFilterActiveState(brandFilters, activeBrand, 'brand');
                }
                renderProducts();
            }

            // Bind filter events
            categoryFilters.addEventListener("click", (e) => {
                const btn = e.target.closest("button");
                if (!btn) return;
                activeCategory = btn.getAttribute("data-category");
                updateFilterActiveState(categoryFilters, activeCategory, 'category');
                renderProducts();
            });

            brandFilters.addEventListener("click", (e) => {
                const btn = e.target.closest("button");
                if (!btn) return;
                activeBrand = btn.getAttribute("data-brand");
                updateFilterActiveState(brandFilters, activeBrand, 'brand');
                renderProducts();
            });

            // Bind Search input
            searchInput.addEventListener("input", renderProducts);
        }

        function updateFilterActiveState(container, value, type) {
            const btns = container.querySelectorAll("button");
            btns.forEach(btn => {
                const valAttr = btn.getAttribute(`data-${type}`);
                if (valAttr.toLowerCase() === value.toLowerCase()) {
                    btn.className = "btn btn-sm btn-primary text-start px-3";
                } else {
                    btn.className = "btn btn-sm btn-outline-secondary text-start px-3";
                }
            });
        }

        function renderProducts() {
            const query = searchInput.value.toLowerCase();
            productsGrid.innerHTML = "";

            const filtered = products.filter(p => {
                const matchesSearch = p.name.toLowerCase().includes(query) || p.desc.toLowerCase().includes(query) || p.model.toLowerCase().includes(query);
                const matchesCategory = activeCategory === "All" || p.category.toLowerCase() === activeCategory.toLowerCase();
                const matchesBrand = activeBrand === "All" || p.brand.toLowerCase().includes(activeBrand.toLowerCase());
                return matchesSearch && matchesCategory && matchesBrand;
            });

            if (filtered.length === 0) {
                productsGrid.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-box-open fa-3x text-muted mb-3"></i>
                        <h4 class="text-navy">No Products Found</h4>
                        <p class="text-muted">Try clearing search keywords or choosing another brand.</p>
                    </div>
                `;
                return;
            }

            filtered.forEach((p, idx) => {
                const card = document.createElement("div");
                card.className = "col-md-6 wow fadeInUp";
                card.style.animationDelay = `${idx * 0.1}s`;
                card.innerHTML = `
                    <div class="service-item rounded overflow-hidden shadow-sm h-100 bg-white border d-flex flex-column justify-content-between">
                        <div class="position-relative overflow-hidden aspect-[4/3]">
                            <img class="img-fluid w-100 h-100 object-cover" src="${p.image}" alt="${p.name}">
                            <div class="position-absolute top-0 start-0 bg-primary text-white text-xs px-3 py-1.5 rounded-bottom-end">${p.brand}</div>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column justify-content-between">
                            <div>
                                <span class="text-primary text-uppercase font-weight-bold" style="font-size: 11px;">${p.category}</span>
                                <h4 class="mb-2 text-navy mt-1">${p.name}</h4>
                                <p class="text-muted small line-clamp-3">${p.desc}</p>
                            </div>
                            <div class="mt-3 pt-3 border-t d-flex align-items-center justify-content-between">
                                <a href="javascript:void(0)" onclick="showProductDetail('${p.slug}')" class="btn btn-outline-primary btn-sm px-3 rounded-pill">View Specs ➔</a>
                                <a href="/contact?product=${encodeURIComponent(p.name)}" class="btn btn-primary btn-sm px-3 rounded-pill">Get Quote</a>
                            </div>
                        </div>
                    </div>
                `;
                productsGrid.appendChild(card);
            });
        }

        function showProductDetail(slug) {
            const product = products.find(p => p.slug === slug);
            if (!product) return;

            // Update details view content
            document.getElementById("detail-img").src = product.image;
            document.getElementById("detail-img").alt = product.name;
            document.getElementById("detail-category-badge").innerText = product.category;
            document.getElementById("detail-name").innerText = product.name;
            document.getElementById("detail-brand").innerText = product.brand;
            document.getElementById("detail-model").innerText = product.model;
            document.getElementById("detail-desc").innerText = product.desc;

            // Generate specifications list
            const specsGrid = document.getElementById("detail-specs-grid");
            specsGrid.innerHTML = "";
            product.specs.forEach(s => {
                const specItem = document.createElement("div");
                specItem.className = "col-sm-6 d-flex align-items-center gap-2 mb-2";
                specItem.innerHTML = `<i class="fa fa-check-circle text-primary"></i> <span class="text-muted small">${s}</span>`;
                specsGrid.appendChild(specItem);
            });

            // Update Quote Button Link
            document.getElementById("detail-quote-btn").href = `/contact?product=${encodeURIComponent(product.name)}`;

            // Switch view
            indexView.classList.add("d-none");
            detailView.classList.remove("d-none");

            // Update URL hash
            const url = new URL(window.location);
            url.searchParams.set('product', slug);
            window.history.pushState({}, '', url);

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function closeProductDetail() {
            detailView.classList.add("d-none");
            indexView.classList.remove("d-none");

            // Clear parameter in URL
            const url = new URL(window.location);
            url.searchParams.delete('product');
            window.history.pushState({}, '', url);
            
            // Re-render
            renderProducts();
        }

        // Initialize on DOM ready
        document.addEventListener("DOMContentLoaded", init);
    </script>
@endsection
