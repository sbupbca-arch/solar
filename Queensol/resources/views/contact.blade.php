@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Details Cards Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-4 rounded-3 border h-100 text-center">
                        <div class="btn-square bg-white rounded-circle mx-auto border mb-3 shadow-sm" style="width: 70px; height: 70px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy mb-2">Corporate Office</h4>
                        <p class="text-muted small mb-0">Sector 45, Gurgaon,<br>Haryana - 122003</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light p-4 rounded-3 border h-100 text-center">
                        <div class="btn-square bg-white rounded-circle mx-auto border mb-3 shadow-sm" style="width: 70px; height: 70px;">
                            <i class="fa fa-building fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy mb-2">Regional Office</h4>
                        <p class="text-muted small mb-0">HSR Layout, Sector 2, Bangalore,<br>Karnataka - 560102</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light p-4 rounded-3 border h-100 text-center">
                        <div class="btn-square bg-white rounded-circle mx-auto border mb-3 shadow-sm" style="width: 70px; height: 70px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-navy mb-2">Support Desk</h4>
                        <p class="text-muted small mb-0">Email: info@queensolenergy.in<br>Phone: +91 98765 43210</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Details Cards End -->


    <!-- Quote / Contact Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="quote-form-grid wow fadeInUp" data-wow-delay="0.1s">
                <div class="quote-form-content">
                    <div class="quote-form-header text-center">
                        <h6 class="text-primary text-uppercase fw-bold mb-2">Request A Quote</h6>
                        <h1 class="mb-3 text-dark fw-bold" style="font-size: 32px;">Submit Sizing & Product Requirements</h1>
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


    <!-- Interactive Map Section Start -->
    <div class="container-fluid p-0 my-5" style="height: 450px;">
        <iframe class="w-100 h-100 border-0" 
            src="https://maps.google.com/maps?q=Sector%2045%20Gurugram%20Haryana%20India&t=&z=14&ie=UTF8&iwloc=&output=embed" 
            allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- Interactive Map Section End -->

    <!-- Pre-selection form mapping script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const productParam = urlParams.get('product');
            if (productParam) {
                const productSelect = document.querySelector('select[name="product"]');
                if (productSelect) {
                    const lower = productParam.toLowerCase();
                    if (lower.includes("inverter")) {
                        productSelect.value = "Solar Inverter";
                    } else if (lower.includes("module") || lower.includes("panel")) {
                        productSelect.value = "Solar Panel";
                    } else if (lower.includes("bos") || lower.includes("accessory")) {
                        productSelect.value = "BOS Accessories";
                    }
                }
                const messageText = document.querySelector('textarea[name="message"]');
                if (messageText) {
                    messageText.value = `I am interested in requesting pricing/technical documentation for: ${productParam}.`;
                }
            }
            
            const serviceParam = urlParams.get('service');
            if (serviceParam) {
                const supportSelect = document.querySelector('select[name="support"]');
                if (supportSelect) {
                    if (serviceParam === 'after-sales') {
                        supportSelect.value = "After Sales Service Support";
                    } else {
                        supportSelect.value = "Technical Support";
                    }
                }
                const messageText = document.querySelector('textarea[name="message"]');
                if (messageText) {
                    messageText.value = `I need engineering support for the service: ${serviceParam}.`;
                }
            }
        });
    </script>
@endsection
