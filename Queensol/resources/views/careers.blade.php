@extends('layouts.app')

@section('title', 'Careers')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Careers</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Careers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Benefits Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase font-weight-bold">Why Queensol?</h6>
                <h1 class="mb-4 text-navy">Life at Queensol Energy</h1>
                <p class="text-muted">We offer a collaborative, supportive work environment designed to empower engineers, innovators, and business leaders.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="benefit-card border shadow-sm h-100 text-center">
                        <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 70px; height: 70px;">
                            <i class="fa fa-wallet fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy">Competitive Pay</h4>
                        <p class="text-muted small mb-0">Industry-leading compensation structure with performance bonuses linked to project delivery.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="benefit-card border shadow-sm h-100 text-center">
                        <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 70px; height: 70px;">
                            <i class="fa fa-user-shield fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy">Health Insurance</h4>
                        <p class="text-muted small mb-0">Comprehensive medical coverage for team members and their immediate family members.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="benefit-card border shadow-sm h-100 text-center">
                        <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 70px; height: 70px;">
                            <i class="fa fa-graduation-cap fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy">Growth Support</h4>
                        <p class="text-muted small mb-0">Financial assistance for solar certifications (e.g. PVsyst, safety programs, project management).</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="benefit-card border shadow-sm h-100 text-center">
                        <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 70px; height: 70px;">
                            <i class="fa fa-umbrella fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy">Work Culture</h4>
                        <p class="text-muted small mb-0">A transparent hierarchy, collaborative design review teams, and flexible time options.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits Section End -->


    <!-- Open Positions & Application Form Start -->
    <div class="container-xxl py-5 bg-light rounded-3 my-5">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Open Jobs list -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase font-weight-bold mb-2">Openings</h6>
                    <h1 class="mb-4 text-navy">Current Openings</h1>
                    <p class="text-muted mb-4">Select an active opening to read qualifications and apply using the registration form.</p>

                    <div class="d-flex flex-column gap-3" id="job-accordion">
                        <!-- Job 1 -->
                        <div class="job-card p-4 shadow-sm border bg-white">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <span class="badge bg-light text-primary border px-2 py-1 mb-2">Engineering</span>
                                    <h4 class="text-navy mb-1">Solar PV Design Engineer</h4>
                                    <p class="text-muted small mb-0"><i class="fa fa-map-marker-alt me-2"></i>Gurgaon Office | Full-Time</p>
                                </div>
                                <button class="btn btn-sm btn-outline-primary rounded-pill toggle-job-btn" onclick="toggleJobDetails(this)">Details ➔</button>
                            </div>
                            <div class="job-desc-content d-none mt-3 border-top pt-3">
                                <h5>Qualifications:</h5>
                                <p class="text-muted small">B.Tech/M.Tech in Electrical Engineering with 2-4 years experience in PVsyst modeling, AutoCad system layouts, structural design, and shadow analysis.</p>
                                <h5>Responsibilities:</h5>
                                <p class="text-muted small mb-0">Prepare Detailed Project Reports (DPRs), coordinate with grid engineers, and finalize bills of materials for C&I installations.</p>
                            </div>
                        </div>

                        <!-- Job 2 -->
                        <div class="job-card p-4 shadow-sm border bg-white">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <span class="badge bg-light text-primary border px-2 py-1 mb-2">Operations</span>
                                    <h4 class="text-navy mb-1">Senior Project Execution Manager</h4>
                                    <p class="text-muted small mb-0"><i class="fa fa-map-marker-alt me-2"></i>On-Site Execution (Bangalore) | Full-Time</p>
                                </div>
                                <button class="btn btn-sm btn-outline-primary rounded-pill toggle-job-btn" onclick="toggleJobDetails(this)">Details ➔</button>
                            </div>
                            <div class="job-desc-content d-none mt-3 border-top pt-3">
                                <h5>Qualifications:</h5>
                                <p class="text-muted small">5+ years experience directing heavy on-site mechanical assembly, grid synchronizations, safety compliances, and leading site sub-contractors.</p>
                                <h5>Responsibilities:</h5>
                                <p class="text-muted small mb-0">Manage project execution schedules, dispatch reports, and coordinate inspectors for DISCOM commissioning.</p>
                            </div>
                        </div>

                        <!-- Job 3 -->
                        <div class="job-card p-4 shadow-sm border bg-white">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <span class="badge bg-light text-primary border px-2 py-1 mb-2">Sales & Marketing</span>
                                    <h4 class="text-navy mb-1">Technical Sales Engineer</h4>
                                    <p class="text-muted small mb-0"><i class="fa fa-map-marker-alt me-2"></i>Pune Warehouse Hub | Full-Time</p>
                                </div>
                                <button class="btn btn-sm btn-outline-primary rounded-pill toggle-job-btn" onclick="toggleJobDetails(this)">Details ➔</button>
                            </div>
                            <div class="job-desc-content d-none mt-3 border-top pt-3">
                                <h5>Qualifications:</h5>
                                <p class="text-muted small">3+ years in C&I client management, solar distribution networks, inverter sales, or EPC bid evaluations.</p>
                                <h5>Responsibilities:</h5>
                                <p class="text-muted small mb-0">Generate corporate leads, inspect site requirements, quote products, and represent Queensol at state energy forums.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Application Form -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="careers-form-container p-4 p-md-5 bg-white shadow-sm border">
                        <h3 class="text-navy fw-bold mb-3 text-center">Submit Application</h3>
                        <p class="text-muted small text-center mb-4">Complete the fields below and attach your CV to apply directly.</p>

                        <form id="queensolCareersForm" onsubmit="handleCareersSubmit(event)">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label small text-dark fw-bold">Full Name *</label>
                                    <input type="text" id="candidateName" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-dark fw-bold">Email *</label>
                                    <input type="email" id="candidateEmail" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-dark fw-bold">Contact Number *</label>
                                    <input type="text" id="candidatePhone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small text-dark fw-bold">Target Position *</label>
                                    <select id="candidatePosition" class="form-select" required>
                                        <option value="" disabled selected>Select Position *</option>
                                        <option value="Solar PV Design Engineer">Solar PV Design Engineer</option>
                                        <option value="Senior Project Execution Manager">Senior Project Execution Manager</option>
                                        <option value="Technical Sales Engineer">Technical Sales Engineer</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small text-dark fw-bold">Upload Resume (PDF/Word) *</label>
                                    <input type="file" id="candidateResume" class="form-control" accept=".pdf,.doc,.docx" required>
                                    <div class="form-text text-muted" style="font-size: 10px;">Max file size: 5MB. Format: PDF or Word.</div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small text-dark fw-bold">Cover Message / Experience Summary</label>
                                    <textarea id="candidateMessage" class="form-control" rows="4" placeholder="Briefly describe your experience..."></textarea>
                                </div>
                                
                                <!-- Mock Google reCAPTCHA widget -->
                                <div class="col-12">
                                    <div class="quote-recaptcha-widget my-2">
                                        <div class="quote-recaptcha-left-side">
                                            <input type="checkbox" id="captchaBox" required class="quote-recaptcha-checkbox-box">
                                            <span class="quote-recaptcha-text-label">I'm not a robot</span>
                                        </div>
                                        <div class="quote-recaptcha-right-side">
                                            <svg style="width: 28px; height: 28px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round"/>
                                                <path d="M22 12C22 9.24 20.88 6.74 19.07 4.93L16.24 7.76C17.33 8.85 18 10.35 18 12C18 15.31 15.31 18 12 18C10.35 18 8.85 17.33 7.76 16.24L4.93 19.07C6.74 20.88 9.24 22 12 22C17.52 22 22 17.52 22 12Z" fill="#2563EB" opacity="0.15"/>
                                                <path d="M12 6V12L16 14" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span style="font-size: 8px; color: #4B5563; font-weight: 600; margin-top: 2px;">reCAPTCHA</span>
                                            <div class="quote-recaptcha-brand-links-block" style="font-size: 8px; display: flex; gap: 4px; margin-top: 2px;">
                                                <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" style="text-decoration: none; color: #555555;">Privacy</a>
                                                <span>-</span>
                                                <a href="https://www.google.com/intl/en/policies/terms/" target="_blank" style="text-decoration: none; color: #555555;">Terms</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-3 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 w-100 rounded-pill shadow-sm">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Positions & Application Form End -->

    <!-- Careers Client Logic Script -->
    <script>
        function toggleJobDetails(btn) {
            const card = btn.closest(".job-card");
            const details = card.querySelector(".job-desc-content");
            if (details.classList.contains("d-none")) {
                details.classList.remove("d-none");
                btn.innerText = "Hide ▴";
            } else {
                details.classList.add("d-none");
                btn.innerText = "Details ➔";
            }
        }

        function handleCareersSubmit(event) {
            event.preventDefault();
            
            const name = document.getElementById("candidateName").value.trim();
            const position = document.getElementById("candidatePosition").value;
            const fileInput = document.getElementById("candidateResume");

            if (!fileInput.files || fileInput.files.length === 0) {
                alert("Please upload your resume.");
                return;
            }

            const fileName = fileInput.files[0].name;
            const fileSize = fileInput.files[0].size / (1024 * 1024); // Size in MB

            if (fileSize > 5) {
                alert("File size exceeds 5MB. Please upload a smaller file.");
                return;
            }

            alert(`Thank you, ${name}! Your application for the position of "${position}" (Resume: ${fileName}) has been successfully submitted to Queensol HR.`);
            document.getElementById("queensolCareersForm").reset();
        }
    </script>
@endsection
