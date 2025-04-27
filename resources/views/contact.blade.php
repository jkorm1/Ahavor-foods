@extends('layouts.main')

@section('title', 'Contact Us - Ahavor Foods')

@section('content')
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1 class="contact-hero-title">Get In Touch</h1>
                <p class="contact-hero-description">
                    We'd love to hear from you! Reach out with questions, feedback, or partnership opportunities.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p>123 Nutrition Avenue<br>Accra, Ghana</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary">Get Directions</a>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p>+233 20 123 4567<br>+233 30 987 6543</p>
                        <a href="tel:+233201234567" class="btn btn-outline-primary">Call Now</a>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p>info@ahavor.com<br>support@ahavor.com</p>
                        <a href="mailto:info@ahavor.com" class="btn btn-outline-primary">Send Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section class="contact-form-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="contact-form-card">
                        <h3>Send Us a Message</h3>
                        <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                        
                        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="department" name="department">
                                        <option selected disabled>Select a department</option>
                                        <option value="customer-service">Customer Service</option>
                                        <option value="sales">Sales & Orders</option>
                                        <option value="partnerships">Business Partnerships</option>
                                        <option value="careers">Careers</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="department">Department</label>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 150px" required></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="privacy" required>
                                <label class="form-check-label" for="privacy">I agree to the <a href="#">privacy policy</a></label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                            
                            @if(session('success'))
                            <div class="form-response success">
                                {{ session('success') }}
                            </div>
                            @endif
                            
                            @if($errors->any())
                            <div class="form-response error">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-map-card">
                        <h3>Find Us</h3>
                        <p>Visit our headquarters in Accra, Ghana</p>
                        
                        <div class="map-container">
                            <div class="ratio ratio-4x3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254202.94314521635!2d-0.2661034249999999!3d5.5912034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra%2C%20Ghana!5e0!3m2!1sen!2sus!4v1650000000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        
                        <div class="office-hours">
                            <h4>Office Hours</h4>
                            <ul>
                                <li><strong>Monday - Friday:</strong> 8:00 AM - 5:00 PM</li>
                                <li><strong>Saturday:</strong> 9:00 AM - 1:00 PM</li>
                                <li><strong>Sunday:</strong> Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">FAQ</p>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-description">Find answers to common questions about our products and services</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where can I purchase Ahavor Foods products?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our products are available at major supermarkets and retail stores across Ghana, including Shoprite, Melcom, and Game. You can also purchase directly from our online store with delivery options available in select areas.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are your products suitable for people with dietary restrictions?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Many of our products are gluten-free, vegan, and made without artificial preservatives. Each product is clearly labeled with allergen information and dietary suitability. If you have specific dietary concerns, please check the product packaging or contact our customer service team for detailed information.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How should I store your products?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our products should be stored in a cool, dry place away from direct sunlight. Once opened, please reseal the package tightly and consume within the recommended timeframe. For specific storage instructions, please refer to the packaging of each product.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="social-media-section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Social Media</p>
                <h2 class="section-title">Connect With Us</h2>
                <p class="section-description">Follow us on social media for updates, recipes, and more</p>
            </div>
            
            <div class="social-grid">
                <div class="row g-3">
                    <!-- Social Media 1 -->
                    <div class="col-md-4 col-6" data-aos="zoom-in">
                        <a href="#" class="social-card facebook">
                            <div class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <h4>Facebook</h4>
                            <p>@AhavorFoods</p>
                        </a>
                    </div>
                    
                    <!-- Social Media 2 -->
                    <div class="col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
                        <a href="#" class="social-card instagram">
                            <div class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <h4>Instagram</h4>
                            <p>@AhavorFoods</p>
                        </a>
                    </div>
                    
                    <!-- Social Media 3 -->
                    <div class="col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
                        <a href="#" class="social-card twitter">
                            <div class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <h4>Twitter</h4>
                            <p>@AhavorFoods</p>
                        </a>
                    </div>
                    
                    <!-- Social Media 4 -->
                    <div class="col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
                        <a href="#" class="social-card youtube">
                            <div class="social-icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <h4>YouTube</h4>
                            <p>Ahavor Foods Channel</p>
                        </a>
                    </div>
                    
                    <!-- Social Media 5 -->
                    <div class="col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
                        <a href="#" class="social-card linkedin">
                            <div class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                            <h4>LinkedIn</h4>
                            <p>Ahavor Foods Ltd</p>
                        </a>
                    </div>
                    
                    <!-- Social Media 6 -->
                    <div class="col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
                        <a href="#" class="social-card pinterest">
                            <div class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </div>
                            <h4>Pinterest</h4>
                            <p>@AhavorFoods</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2 class="newsletter-title">Subscribe to Our Newsletter</h2>
                <p class="newsletter-description">Stay updated with our latest products, recipes, and special offers.</p>
                
                <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="email" class="newsletter-input" name="email" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-button">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
@endsection 