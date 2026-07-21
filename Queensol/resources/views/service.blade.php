@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Showcase Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
                <h1 class="mb-4 text-navy">Renewable Energy Solutions Tailored For You</h1>
                <p class="text-muted">From initial resource sizing studies to long-term operations, Queensol is your supply chain and engineering partner.</p>
            </div>
            
            <div class="row g-4">
                <!-- Service 1: Solar Consulting -->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" id="service-consulting">
                    <div class="p-4 p-md-5 rounded-3 shadow-sm border mb-4 bg-white service-detail-wrapper" style="transition: all 0.3s ease;">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 80px; height: 80px;">
                                    <i class="fa fa-compass fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-navy">Solar Consulting</h4>
                            </div>
                            <div class="col-md-9 border-start ps-md-4">
                                <p class="lead text-secondary font-weight-bold">Pre-feasibility, DPRs, energy-yield estimates and bankable engineering studies.</p>
                                <p class="text-muted small">Our consulting team supports developers and C&I consumers in analyzing project feasibility, choosing optimal sizing configurations, and validating yield bankability.</p>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Pre-feasibility report</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Detailed project report (DPR)</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Energy yield estimation (PVsyst)</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Grid connectivity & code compliance</div>
                                </div>
                                <a href="/contact?service=consulting" class="btn btn-outline-primary btn-sm mt-3 px-4 py-2">Consult an Engineer ➔</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Project EPC -->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s" id="service-epc">
                    <div class="p-4 p-md-5 rounded-3 shadow-sm border mb-4 bg-white service-detail-wrapper" style="transition: all 0.3s ease;">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 80px; height: 80px;">
                                    <i class="fa fa-tools fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-navy">Project EPC Services</h4>
                            </div>
                            <div class="col-md-9 border-start ps-md-4">
                                <p class="lead text-secondary font-weight-bold">End-to-end design, procurement, installation, commissioning and O&M.</p>
                                <p class="text-muted small">We coordinate procurement of premium panels, high-efficiency string inverters, certified mounting accessories, and lead full on-site electrical installation up to grid integration.</p>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>System design & drawings</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Tier-1 equipment procurement</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Installation & commissioning support</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>DISCOM approvals coordination</div>
                                </div>
                                <a href="/contact?service=epc" class="btn btn-outline-primary btn-sm mt-3 px-4 py-2">Inquire EPC Package ➔</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Management Consulting -->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s" id="service-management">
                    <div class="p-4 p-md-5 rounded-3 shadow-sm border mb-4 bg-white service-detail-wrapper" style="transition: all 0.3s ease;">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 80px; height: 80px;">
                                    <i class="fa fa-briefcase fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-navy">Management Consulting</h4>
                            </div>
                            <div class="col-md-9 border-start ps-md-4">
                                <p class="lead text-secondary font-weight-bold">Bid management, vendor selection, due diligence and lender engineering.</p>
                                <p class="text-muted small">We guide businesses in executing bid tenders, inspecting vendor specifications, conducting rigorous due diligence audits, and evaluating bankability risk parameters.</p>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>EPC bid management</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Technical due diligence</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Lender engineering audits</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Plant performance assessments</div>
                                </div>
                                <a href="/contact?service=management" class="btn btn-outline-primary btn-sm mt-3 px-4 py-2">Consult with us ➔</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: After Sales Service -->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s" id="service-after-sales">
                    <div class="p-4 p-md-5 rounded-3 shadow-sm border mb-4 bg-white service-detail-wrapper" style="transition: all 0.3s ease;">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 80px; height: 80px;">
                                    <i class="fa fa-life-ring fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-navy">After Sales Service</h4>
                            </div>
                            <div class="col-md-9 border-start ps-md-4">
                                <p class="lead text-secondary font-weight-bold">Pre and post-commissioning support, warranty handling and troubleshooting.</p>
                                <p class="text-muted small">Enjoy absolute peace of mind. We are the direct service partner for Tier-1 brands, ensuring rapid warranty replacements, inverter troubleshooting, and periodic audits.</p>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Direct warranty support</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Site troubleshooting & audits</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Pre/post-commissioning tests</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Annual Maintenance Contracts (AMC)</div>
                                </div>
                                <a href="/contact?service=after-sales" class="btn btn-outline-primary btn-sm mt-3 px-4 py-2">File Service Case ➔</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: System Integrator Services -->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s" id="service-integrator">
                    <div class="p-4 p-md-5 rounded-3 shadow-sm border mb-4 bg-white service-detail-wrapper" style="transition: all 0.3s ease;">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-3 text-center">
                                <div class="btn-square bg-light rounded-circle mx-auto border mb-3" style="width: 80px; height: 80px;">
                                    <i class="fa fa-project-diagram fa-2x text-primary"></i>
                                </div>
                                <h4 class="text-navy">System Integrator</h4>
                            </div>
                            <div class="col-md-9 border-start ps-md-4">
                                <p class="lead text-secondary font-weight-bold">Inverter, BOS and monitoring integration with end-to-end commissioning.</p>
                                <p class="text-muted small">We integrate complex inverter configurations, string monitoring terminals, meteorological sensors, and balance-of-system cables into a cohesive system layout.</p>
                                <div class="row g-2 mt-2">
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Inverter integration</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>BOS & cabling optimization</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>Smart monitoring configuration</div>
                                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i>End-to-end commissioning support</div>
                                </div>
                                <a href="/contact?service=integrator" class="btn btn-outline-primary btn-sm mt-3 px-4 py-2">Integrate System ➔</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Showcase End -->


    <!-- Service Process Start -->
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-4">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase font-weight-bold mb-2">Our Process</h6>
                <h1 class="mb-4 text-navy">Our Service Process</h1>
                <p class="text-muted">From feasibility to lifetime O&M - a transparent six-step journey.</p>
            </div>
            
            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-4 bg-white rounded-3 shadow-sm border position-relative h-100" style="padding-top: 2.5rem !important;">
                        <div class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center rounded fw-bold" style="width: 40px; height: 40px; top: -20px; left: 25px; font-size: 18px; box-shadow: 0 4px 10px rgba(185, 7, 16, 0.25);">1</div>
                        <h4 class="mt-2 text-navy">Discovery</h4>
                        <p class="text-muted small mb-0 mt-3">Site visit, load profile study, and initial grid feasibility assessment.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="p-4 bg-white rounded-3 shadow-sm border position-relative h-100" style="padding-top: 2.5rem !important;">
                        <div class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center rounded fw-bold" style="width: 40px; height: 40px; top: -20px; left: 25px; font-size: 18px; box-shadow: 0 4px 10px rgba(185, 7, 16, 0.25);">2</div>
                        <h4 class="mt-2 text-navy">Design</h4>
                        <p class="text-muted small mb-0 mt-3">Bankable engineering, single-line diagrams (SLDs), and detailed energy yield modeling.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="p-4 bg-white rounded-3 shadow-sm border position-relative h-100" style="padding-top: 2.5rem !important;">
                        <div class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center rounded fw-bold" style="width: 40px; height: 40px; top: -20px; left: 25px; font-size: 18px; box-shadow: 0 4px 10px rgba(185, 7, 16, 0.25);">3</div>
                        <h4 class="mt-2 text-navy">Procurement</h4>
                        <p class="text-muted small mb-0 mt-3">Bill of Materials (BOM) finalization and Tier-1 product sourcing from warehouses.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="p-4 bg-white rounded-3 shadow-sm border position-relative h-100" style="padding-top: 2.5rem !important;">
                        <div class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center rounded fw-bold" style="width: 40px; height: 40px; top: -20px; left: 25px; font-size: 18px; box-shadow: 0 4px 10px rgba(185, 7, 16, 0.25);">4</div>
                        <h4 class="mt-2 text-navy">Installation</h4>
                        <p class="text-muted small mb-0 mt-3">Mechanical structural mounting and electrical layout execution by certified project teams.</p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="p-4 bg-white rounded-3 shadow-sm border position-relative h-100" style="padding-top: 2.5rem !important;">
                        <div class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center rounded fw-bold" style="width: 40px; height: 40px; top: -20px; left: 25px; font-size: 18px; box-shadow: 0 4px 10px rgba(185, 7, 16, 0.25);">5</div>
                        <h4 class="mt-2 text-navy">Commissioning</h4>
                        <p class="text-muted small mb-0 mt-3">Final safety testing, inspection, coordination with DISCOM inspectors, and go-live sync.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="p-4 bg-white rounded-3 shadow-sm border position-relative h-100" style="padding-top: 2.5rem !important;">
                        <div class="position-absolute bg-primary text-white d-flex align-items-center justify-content-center rounded fw-bold" style="width: 40px; height: 40px; top: -20px; left: 25px; font-size: 18px; box-shadow: 0 4px 10px rgba(185, 7, 16, 0.25);">6</div>
                        <h4 class="mt-2 text-navy">O&M</h4>
                        <p class="text-muted small mb-0 mt-3">Lifetime remote maintenance, active yield diagnostics, and AMC support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Process End -->


    <!-- Quote / Contact Section Start -->
    <div class="container-xxl py-5" style="margin-top: 5rem;">
        <div class="container">
            <div class="quote-form-grid wow fadeInUp" data-wow-delay="0.1s">
                <div class="quote-form-content">
                    <div class="quote-form-header text-center">
                        <h6 class="text-primary text-uppercase fw-bold mb-2">Request A Quote</h6>
                        <h1 class="mb-3 text-dark fw-bold" style="font-size: 32px;">Request Pricing & Engineering Support</h1>
                        <p class="text-muted mx-auto" style="max-width: 650px; font-size: 14px;">
                            Complete control over products allows us to ensure our customers receive the best quality, prices and service. Submit your requirements and our team will get back to you shortly.
                        </p>
                    </div>
                    
                    <form class="quote-form-fields-container mt-4" id="queensolQuoteForm" onsubmit="event.preventDefault(); alert('Quote request submitted successfully!');">
                        <!-- Name & Phone -->
                        <div class="quote-form-row">
                            <input type="text" name="name" required placeholder="Name *" class="quote-input-field">
                            <input type="text" name="phone" required placeholder="Contact Number *" class="quote-input-field">
                        </div>
                        
                        <!-- Email & Company -->
                        <div class="quote-form-row mt-3">
                            <input type="email" name="email" required placeholder="Email *" class="quote-input-field">
                            <input type="text" name="company" placeholder="Company Name" class="quote-input-field">
                        </div>
                        
                        <!-- Message -->
                        <div class="mt-3">
                            <textarea name="message" required placeholder="Message *" rows="4" class="quote-input-field quote-textarea-field"></textarea>
                        </div>
                        
                        <!-- Contact Info Strip (Lighter grey panel) -->
                        <div class="quote-contact-info-strip mt-4">
                            <div class="quote-contact-info-item">
                                <span class="quote-contact-info-label">Call Us</span>
                                <span class="quote-contact-info-val"><a href="tel:+919876543210">+91 98765 43210</a></span>
                            </div>
                            <div class="quote-contact-info-item">
                                <span class="quote-contact-info-label">Office Time</span>
                                <span class="quote-contact-info-val">Monday - Saturday (09:30 AM - 06:00 PM)</span>
                            </div>
                            <div class="quote-contact-info-item">
                                <span class="quote-contact-info-label">Quick Contact</span>
                                <span class="quote-contact-info-val">Email: <a href="mailto:info@queensolenergy.in">info@queensolenergy.in</a></span>
                            </div>
                        </div>
                        
                        <!-- Dropdown Select Grids -->
                        <div class="quote-form-row mt-4">
                            <div class="quote-choice-group">
                                <span class="quote-checkbox-group-title">Select Product *</span>
                                <select name="product" required class="quote-input-field">
                                    <option value="" disabled selected>Select Product *</option>
                                    <option value="Solar Panel">Solar Panel</option>
                                    <option value="Solar Inverter">Solar Inverter</option>
                                    <option value="BOS Accessories">BOS Accessories</option>
                                </select>
                            </div>
                            
                            <div class="quote-choice-group">
                                <span class="quote-checkbox-group-title">Support Needed *</span>
                                <select name="support" required class="quote-input-field">
                                    <option value="" disabled selected>Select Support Type *</option>
                                    <option value="Technical Support">Technical Support</option>
                                    <option value="Price Quotation">Price Quotation</option>
                                    <option value="After Sales Service Support">After Sales Service Support</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="quote-form-row mt-3">
                            <div class="quote-choice-group">
                                <span class="quote-checkbox-group-title">Preferred Stock Location *</span>
                                <select name="location" required class="quote-input-field">
                                    <option value="" disabled selected>Select Location *</option>
                                    <option value="Karad">Karad Warehouse</option>
                                    <option value="Pune">Pune Warehouse</option>
                                    <option value="Muktainagar">Muktainagar Warehouse</option>
                                </select>
                            </div>
                            
                            <div class="quote-choice-group">
                                <span class="quote-checkbox-group-title">Select Nearest Warehouse *</span>
                                <select name="warehouse" required class="quote-input-field">
                                    <option value="" disabled selected>Select Warehouse *</option>
                                    <option value="Karad">Karad (Western India)</option>
                                    <option value="Pune">Pune (Central/West India)</option>
                                    <option value="Muktainagar">Muktainagar (North/West India)</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Google reCAPTCHA mock widget -->
                        <div class="mt-4">
                            <div class="quote-recaptcha-widget">
                                <div class="quote-recaptcha-left-side">
                                    <input type="checkbox" required class="quote-recaptcha-checkbox-box">
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
                        
                        <!-- Submit -->
                        <div class="mt-4 text-center">
                            <button type="submit" class="quote-submit-btn-element">
                                Submit Request
                                <svg style="width: 16px; height: 16px; margin-left: 6px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote / Contact Section End -->

    <!-- Dynamic Service Parameter Highlighting Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const serviceParam = urlParams.get('service');
            if (serviceParam) {
                const targetElement = document.getElementById('service-' + serviceParam);
                if (targetElement) {
                    setTimeout(() => {
                        targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        // Add highlight border outline effect
                        const detailCard = targetElement.querySelector('.service-detail-wrapper');
                        if (detailCard) {
                            detailCard.style.borderColor = 'var(--primary)';
                            detailCard.style.boxShadow = '0 10px 30px rgba(185, 7, 16, 0.15)';
                            detailCard.style.transform = 'scale(1.02)';
                            
                            setTimeout(() => {
                                detailCard.style.borderColor = '';
                                detailCard.style.boxShadow = '';
                                detailCard.style.transform = '';
                            }, 3000);
                        }
                    }, 600);
                }
            }
        });
    </script>
@endsection
