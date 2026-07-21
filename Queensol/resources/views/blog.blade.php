@extends('layouts.app')

@section('title', 'Latest Blog & News')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Latest Blog & News</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Main Section Start -->
    <div class="container-xxl py-5">
        <!-- Index Layout View -->
        <div class="container animate-fade-in" id="blog-index-view">
            <div class="row g-5">
                <!-- Sidebar Filters -->
                <div class="col-lg-3">
                    <div class="bg-light p-4 rounded-3 border mb-4">
                        <h4 class="mb-4 text-navy fw-bold"><i class="fa fa-search text-primary me-2"></i>Search</h4>
                        <div class="position-relative mb-4">
                            <input type="text" id="blog-search" class="form-control" placeholder="Search articles...">
                            <i class="fa fa-search position-absolute text-muted" style="right: 15px; top: 12px;"></i>
                        </div>

                        <h4 class="mb-3 text-navy fw-bold"><i class="fa fa-tags text-primary me-2"></i>Tags</h4>
                        <div class="d-flex flex-wrap gap-2" id="blog-tags">
                            <button class="btn btn-sm btn-primary blog-tag-btn" data-tag="All">All Posts</button>
                            <button class="btn btn-sm btn-outline-secondary blog-tag-btn" data-tag="Technology">Technology</button>
                            <button class="btn btn-sm btn-outline-secondary blog-tag-btn" data-tag="Policy">Policy</button>
                            <button class="btn btn-sm btn-outline-secondary blog-tag-btn" data-tag="Commercial Solar">Commercial</button>
                            <button class="btn btn-sm btn-outline-secondary blog-tag-btn" data-tag="Maintenance">Maintenance</button>
                        </div>
                    </div>
                </div>

                <!-- Blog List Grid -->
                <div class="col-lg-9">
                    <div class="row g-4" id="blog-grid">
                        <!-- Dynamic index cards rendered by JS -->
                    </div>

                    <!-- Client-side Pagination -->
                    <div class="d-flex justify-content-center align-items-center gap-3 mt-5" id="blog-pagination">
                        <button class="btn btn-outline-primary px-3 py-2 rounded-circle" id="prev-page-btn" onclick="changePage(-1)"><i class="fa fa-arrow-left"></i></button>
                        <span id="page-indicator" class="fw-bold text-dark">Page 1 of 3</span>
                        <button class="btn btn-outline-primary px-3 py-2 rounded-circle" id="next-page-btn" onclick="changePage(1)"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Post Reader Layout View -->
        <div class="container d-none" id="blog-reader-view">
            <div class="row g-5">
                <!-- Reader Body -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm border">
                        <button class="btn btn-outline-primary mb-4" onclick="closeBlogReader()"><i class="fa fa-arrow-left me-2"></i>Back to Blog Index</button>
                        
                        <div class="mb-4">
                            <span id="reader-category" class="badge bg-primary text-uppercase px-3 py-2 mb-3">Technology</span>
                            <h1 id="reader-title" class="text-navy fw-bold mb-3" style="font-size: 38px;">Blog Title</h1>
                            <div class="d-flex gap-3 text-muted small">
                                <span><i class="fa fa-user text-primary me-2"></i>Queensol Engineering Desk</span>
                                <span><i class="fa fa-calendar-alt text-primary me-2"></i><span id="reader-date">Date</span></span>
                            </div>
                        </div>

                        <img id="reader-img" class="img-fluid rounded mb-4" src="" alt="Post banner" style="width:100%; aspect-ratio:16/9; object-fit:cover;">

                        <div class="reader-content" id="reader-body">
                            <!-- Article body inserted via JS -->
                        </div>
                    </div>
                </div>

                <!-- Reader Sidebar -->
                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded-3 border">
                        <h4 class="mb-4 text-navy fw-bold">Recent Insights</h4>
                        <div class="d-flex flex-column gap-3" id="recent-insights-sidebar">
                            <!-- Recent links -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Main Section End -->

    <!-- Interactive Blog System JS -->
    <script>
        const blogPosts = [
            {
                slug: "understanding-topcon-modules",
                title: "Understanding TOPCon Solar Modules",
                category: "Technology",
                date: "July 10, 2026",
                desc: "An in-depth look at Tunnel Oxide Passivated Contact (TOPCon) solar cell architecture and why it is surpassing traditional Mono PERC panels.",
                image: "{{ asset('img/gallery-1.jpg') }}",
                body: `
                    <p>The solar photovoltaic industry is witnessing a major transition as N-Type TOPCon (Tunnel Oxide Passivated Contact) cell technology becomes the mainstream choice, replacing P-type PERC cells. This article analyzes the physics, efficiency parameters, and operational benefits of TOPCon modules.</p>
                    
                    <h2>What is TOPCon Technology?</h2>
                    <p>TOPCon is an advanced silicon cell technology that adds a thin tunnel oxide layer and a highly-doped polycrystalline silicon layer to the rear side of a standard N-type silicon wafer. This passivation layer reduces recombination losses at the metal contacts, significantly raising the cell's maximum potential efficiency.</p>
                    
                    <div class="reader-blockquote">
                        "TOPCon represents a natural evolutionary step for solar cell manufacturing, unlocking efficiencies above 22.5% with minor adjustments to existing production lines."
                    </div>

                    <h2>Key Benefits of N-Type TOPCon Panels</h2>
                    <ul>
                        <li><strong>Higher Efficiency:</strong> Average module efficiencies reach 22.0% - 22.6%, providing more power per square meter.</li>
                        <li><strong>Lower Temperature Coefficient:</strong> TOPCon cells maintain better output in hot climates compared to Mono PERC modules.</li>
                        <li><strong>Minimal LID/LeTID:</strong> N-type wafers are inherently immune to Light Induced Degradation, maintaining long-term yield.</li>
                        <li><strong>Higher Bifaciality:</strong> Standard bifaciality factor rises to 80-85%, capturing more reflection power from the ground.</li>
                    </ul>
                    
                    <h3>Conclusion</h3>
                    <p>For industrial and commercial project developers looking to maximize long-term energy yields, investing in TOPCon panels ensures high performance and slower year-on-year module degradation.</p>
                `
            },
            {
                slug: "almm-policy-updates-india",
                title: "ALMM Policy Updates in India",
                category: "Policy",
                date: "June 25, 2026",
                desc: "Understanding the Ministry of New & Renewable Energy's Approved List of Models and Manufacturers (ALMM) regulations for domestic solar deployment.",
                image: "{{ asset('img/gallery-2.jpg') }}",
                body: `
                    <p>The Approved List of Models and Manufacturers (ALMM) regulation, administered by the Ministry of New and Renewable Energy (MNRE), plays a critical role in structuring India's domestic solar manufacturing landscape.</p>
                    
                    <h2>What is the ALMM Regulation?</h2>
                    <p>Originally introduced to ensure high equipment standards and promote local manufacturing, the ALMM mandate requires that only approved solar PV models and manufacturers listed under the official index can be used in government-supported and grid-connected solar power projects in India.</p>
 
                    <div class="reader-blockquote">
                        "Compliance with the ALMM is crucial for developers seeking net-metering approval or bidding for government utility tenders."
                    </div>

                    <h2>Implications for Project Developers</h2>
                    <p>Under the active mandate, projects receiving net-metering approvals or government subsidies are legally required to source panels from registered ALMM manufacturing facilities. This restriction directs developers toward domestic Tier-1 brands like SWELECT, Saatvik Green Energy, and Vikram Solar, securing high structural quality and localized grid compliance.</p>
                `
            },
            {
                slug: "roi-of-commercial-rooftop-solar",
                title: "ROI of Commercial Rooftop Solar",
                category: "Commercial Solar",
                date: "May 18, 2026",
                desc: "Calculating payback period, depreciation benefits, and operational savings of commercial solar grid installations in India.",
                image: "{{ asset('img/gallery-3.jpg') }}",
                body: `
                    <p>For Commercial and Industrial (C&I) enterprises, electricity represents one of the highest operational costs. Rooftop solar offers an excellent opportunity to reduce electricity bills and claim direct financial benefits.</p>
                    
                    <h2>Key Financial Drivers</h2>
                    <ul>
                        <li><strong>Direct Tariff Savings:</strong> Industrial grids charge ₹8-₹11 per unit, while solar generation costs averages ₹2.5-₹3.0 per unit.</li>
                        <li><strong>Accelerated Depreciation:</strong> Indian tax laws allow up to 40% depreciation in the first year of installation, lowering corporate tax liabilities.</li>
                        <li><strong>Short Payback Cycles:</strong> Average commercial systems achieve full capital payback in 3.5 to 4.5 years, followed by 20 years of free green power.</li>
                    </ul>
                `
            },
            {
                slug: "tips-for-maintaining-solar-inverters",
                title: "Tips for Maintaining Solar Inverters",
                category: "Maintenance",
                date: "April 30, 2026",
                desc: "Practical steps to ensure string inverters achieve maximum service life, high cooling efficiency, and error-free operation.",
                image: "{{ asset('img/gallery-4.jpg') }}",
                body: `
                    <p>While solar panels get all the attention, the solar inverter is the true heart of your system. Maintaining your string or hybrid inverter is vital to preventing site outages.</p>
                    
                    <h2>Daily Care and Audits</h2>
                    <p>Always inspect heat sink grids for dust build-up. Blocking heat exhaust ports causes thermal derating, reducing the daily yield. Periodically inspect the DC and AC cables for secure connections to prevent terminal overheating.</p>
                `
            },
            {
                slug: "net-metering-regulations-guide",
                title: "Net Metering Regulations Guide",
                category: "Policy",
                date: "March 12, 2026",
                desc: "A comprehensive state-by-state net metering and gross metering guideline update for C&I consumers.",
                image: "{{ asset('img/gallery-5.jpg') }}",
                body: `
                    <p>Net metering allows consumers to feed surplus solar energy back into the state electricity grid, offseting their utility bills. We review the active limits and state policies across India.</p>
                `
            },
            {
                slug: "why-bifacial-panels-are-gaining-traction",
                title: "Why Bifacial Panels are Gaining Traction",
                category: "Technology",
                date: "Feb 22, 2026",
                desc: "Analyzing double-sided solar module power gains and optimal layout configurations for maximum ground reflection.",
                image: "{{ asset('img/gallery-6.jpg') }}",
                body: `
                    <p>Bifacial solar panels generate power from both the front and rear sides. Utilizing ground albedo reflection yields up to 10% to 25% extra power compared to monofacial panels.</p>
                `
            }
        ];

        let activeTag = "All";
        let searchQuery = "";
        let currentPage = 1;
        const postsPerPage = 2;

        const searchInput = document.getElementById("blog-search");
        const tagsContainer = document.getElementById("blog-tags");
        const blogGrid = document.getElementById("blog-grid");
        const indexView = document.getElementById("blog-index-view");
        const readerView = document.getElementById("blog-reader-view");
        const pageIndicator = document.getElementById("page-indicator");

        function init() {
            // Check query params for single post routing
            const urlParams = new URLSearchParams(window.location.search);
            const postParam = urlParams.get('post');

            if (postParam) {
                openBlogReader(postParam);
            } else {
                renderBlogIndex();
            }

            // Tag Filter Bind
            tagsContainer.addEventListener("click", (e) => {
                const btn = e.target.closest("button");
                if (!btn) return;

                activeTag = btn.getAttribute("data-tag");
                currentPage = 1; // Reset to page 1

                const allTagBtns = tagsContainer.querySelectorAll("button");
                allTagBtns.forEach(b => {
                    if (b.getAttribute("data-tag") === activeTag) {
                        b.className = "btn btn-sm btn-primary blog-tag-btn";
                    } else {
                        b.className = "btn btn-sm btn-outline-secondary blog-tag-btn";
                    }
                });

                renderBlogIndex();
            });

            // Search input Bind
            searchInput.addEventListener("input", (e) => {
                searchQuery = e.target.value.toLowerCase();
                currentPage = 1;
                renderBlogIndex();
            });
        }

        function renderBlogIndex() {
            blogGrid.innerHTML = "";

            // Filter items
            const filtered = blogPosts.filter(p => {
                const matchesSearch = p.title.toLowerCase().includes(searchQuery) || p.desc.toLowerCase().includes(searchQuery);
                const matchesTag = activeTag === "All" || p.category.toLowerCase() === activeTag.toLowerCase();
                return matchesSearch && matchesTag;
            });

            // Pagination calculations
            const totalPosts = filtered.length;
            const totalPages = Math.ceil(totalPosts / postsPerPage) || 1;

            if (currentPage > totalPages) currentPage = totalPages;

            const startIndex = (currentPage - 1) * postsPerPage;
            const endIndex = startIndex + postsPerPage;
            const paginatedPosts = filtered.slice(startIndex, endIndex);

            // Render posts
            if (paginatedPosts.length === 0) {
                blogGrid.innerHTML = `
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-newspaper fa-3x text-muted mb-3"></i>
                        <h4 class="text-navy">No Articles Found</h4>
                        <p class="text-muted">Try clearing the search query or selecting another tag.</p>
                    </div>
                `;
                document.getElementById("blog-pagination").classList.add("d-none");
                return;
            }

            document.getElementById("blog-pagination").classList.remove("d-none");
            pageIndicator.innerText = `Page ${currentPage} of ${totalPages}`;

            // Toggle prev/next button disabled state
            document.getElementById("prev-page-btn").disabled = (currentPage === 1);
            document.getElementById("next-page-btn").disabled = (currentPage === totalPages);

            paginatedPosts.forEach((post, idx) => {
                const card = document.createElement("div");
                card.className = "col-md-6 wow fadeInUp";
                card.style.animationDelay = `${idx * 0.1}s`;
                card.innerHTML = `
                    <div class="blog-card border shadow-sm h-100 d-flex flex-column justify-content-between">
                        <div class="position-relative aspect-[16/9] overflow-hidden">
                            <img class="img-fluid w-100 h-100 object-cover" src="${post.image}" alt="${post.title}">
                            <span class="badge bg-primary position-absolute top-0 start-0 m-3">${post.category}</span>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column justify-content-between">
                            <div>
                                <small class="text-muted"><i class="fa fa-calendar-alt text-primary me-2"></i>${post.date}</small>
                                <h4 class="text-navy fw-bold mt-2 mb-3">${post.title}</h4>
                                <p class="text-muted small line-clamp-3">${post.desc}</p>
                            </div>
                            <div class="mt-4 pt-3 border-t">
                                <a href="javascript:void(0)" onclick="openBlogReader('${post.slug}')" class="btn btn-sm btn-outline-primary rounded-pill px-4">Read Article ➔</a>
                            </div>
                        </div>
                    </div>
                `;
                blogGrid.appendChild(card);
            });
        }

        function changePage(direction) {
            currentPage += direction;
            renderBlogIndex();
            window.scrollTo({ top: 400, behavior: 'smooth' });
        }

        function openBlogReader(slug) {
            const post = blogPosts.find(p => p.slug === slug);
            if (!post) return;

            // Fill reader
            document.getElementById("reader-category").innerText = post.category;
            document.getElementById("reader-title").innerText = post.title;
            document.getElementById("reader-date").innerText = post.date;
            document.getElementById("reader-img").src = post.image;
            document.getElementById("reader-img").alt = post.title;
            document.getElementById("reader-body").innerHTML = post.body;

            // Render Recent Insights list in sidebar
            const sidebar = document.getElementById("recent-insights-sidebar");
            sidebar.innerHTML = "";
            blogPosts.filter(p => p.slug !== slug).slice(0, 4).forEach(p => {
                const item = document.createElement("a");
                item.href = `javascript:void(0)`;
                item.onclick = () => openBlogReader(p.slug);
                item.className = "d-flex align-items-center gap-3 text-decoration-none py-2 border-bottom";
                item.innerHTML = `
                    <img src="${p.image}" alt="" class="rounded" style="width: 60px; height: 60px; object-fit: cover; flex-shrink: 0;">
                    <div>
                        <h6 class="text-navy fw-bold small mb-1 line-clamp-2">${p.title}</h6>
                        <small class="text-muted" style="font-size: 10px;">${p.date}</small>
                    </div>
                `;
                sidebar.appendChild(item);
            });

            // Toggle view
            indexView.classList.add("d-none");
            readerView.classList.remove("d-none");

            // Update URL hash
            const url = new URL(window.location);
            url.searchParams.set('post', slug);
            window.history.pushState({}, '', url);

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function closeBlogReader() {
            readerView.classList.add("d-none");
            indexView.classList.remove("d-none");

            // Clear param
            const url = new URL(window.location);
            url.searchParams.delete('post');
            window.history.pushState({}, '', url);

            renderBlogIndex();
        }

        // Initialize on ready
        document.addEventListener("DOMContentLoaded", init);
    </script>
@endsection
