@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
        <div class="container">
            <div class="hero-content" data-aos="fade-right" data-aos-delay="200">
                <p class="hero-subtitle">Welcome to Ahavor Foods</p>
                <h1 class="hero-title">Nutritious & Delicious Food Products</h1>
                <p class="hero-description">Experience the perfect blend of nutrition and taste with our premium food products made from the finest ingredients.</p>
                <div class="hero-buttons">
                    <a href="{{ route('products') }}" class="cta-button pulse">Explore Products</a>
                    <a href="{{ route('about') }}" class="secondary-button">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Products Section -->
    <section class="section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <p class="section-subtitle">Our Products</p>
                <h2 class="section-title">Our Featured Products</h2>
                <p class="section-description">Discover our range of nutritious and delicious food products made with love and care.</p>
            </div>
            
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-image-container">
                        <img src="{{ asset('images/oat.jpg') }}" alt="Oat Product" class="product-image blur-load">
                        <div class="product-badge">Best Seller</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Oat Products</p>
                        <h3 class="product-title">Premium Oat Mix</h3>
                        <p class="product-description">Our premium oat mix is packed with nutrients and perfect for a healthy breakfast.</p>
                        <p class="product-price">GH₵ 20.00</p>
                        <a href="#" class="product-button">Add to Cart</a>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-image-container">
                        <img src="{{ asset('images/tombrown.jpg') }}" alt="Tom Brown" class="product-image blur-load">
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Tom Brown</p>
                        <h3 class="product-title">Tom Brown Mix</h3>
                        <p class="product-description">A nutritious blend of roasted corn, millet, and groundnuts for all ages.</p>
                        <p class="product-price">GH₵ 30.00</p>
                        <a href="#" class="product-button">Add to Cart</a>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-image-container">
                        <img src="{{ asset('images/cereal.jpg') }}" alt="Cereal Mix" class="product-image blur-load">
                    </div>
                    <div class="product-content">
                        <p class="product-category">Cereal Mixes</p>
                        <h3 class="product-title">Multi-Grain Cereal</h3>
                        <p class="product-description">A delicious mix of multiple grains for a complete nutritional breakfast.</p>
                        <p class="product-price">GH₵ 28.00</p>
                        <a href="#" class="product-button">Add to Cart</a>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-4.jpg') }}" alt="Nutritional Supplement" class="product-image blur-load">
                        <div class="product-badge">Popular</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Supplements</p>
                        <h3 class="product-title">Nutritional Supplement</h3>
                        <p class="product-description">A special blend of nutrients to supplement your daily dietary needs.</p>
                        <p class="product-price">GH₵ 35.00</p>
                        <a href="#" class="product-button">Add to Cart</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 50px;" data-aos="fade-up">
                <a href="{{ route('products') }}" class="cta-button">View All Products</a>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="section about-section">
        <div class="container">
            <div class="about-container">
                <div class="about-content" data-aos="fade-right">
                    <p class="about-subtitle">About Us</p>
                    <h2 class="about-title">Our Story</h2>
                    <p class="about-description">Ahavor Foods combines the Hebrew words for "love" and "light" to bring you nutritious, delicious food products made with care and passion. Our mission is to empower young entrepreneurs and provide healthy food options for all.</p>
                    <p class="about-description">We are committed to using only the finest ingredients and traditional methods to create products that nourish both body and soul.</p>
                    
                    <div class="about-features">
                        <div class="about-feature">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="feature-text">100% Natural Ingredients</div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="feature-text">Premium Quality</div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="feature-text">Made with Love</div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div class="feature-text">Sustainable Practices</div>
                        </div>
                    </div>
                    
                    <a href="{{ route('about') }}" class="cta-button">Learn More About Us</a>
                </div>
                
                <div class="about-image-container" data-aos="fade-left">
                    <img src="{{ asset('images/about-img.jpg') }}" alt="About Ahavor Foods" class="about-image blur-load">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="section testimonials-section">
        <div class="container testimonials-container">
            <div class="section-header" data-aos="fade-up">
                <p class="section-subtitle">Testimonials</p>
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-description">Don't just take our word for it. Here's what our satisfied customers have to say about our products.</p>
            </div>
            
            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <p class="testimonial-content">"I've been using Ahavor's Premium Oat Mix for breakfast every day for the past month, and I've noticed a significant improvement in my energy levels throughout the day. The taste is amazing too!"</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/client-1.jpeg') }}" alt="Sarah Johnson" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Joseph Korm</h4>
                            <p class="author-title">CEO of Star Pops</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <p class="testimonial-content">"As a nutritionist, I'm very particular about the products I recommend to my clients. Ahavor Foods' Tom Brown Mix is one of my top recommendations for its nutritional value and delicious taste."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/client-3.jpeg') }}" alt="Dr. Michael Owusu" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Min. Shantel</h4>
                            <p class="author-title">Nutritionist</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <p class="testimonial-content">"My children are very picky eaters, but they absolutely love Ahavor's Multi-Grain Cereal. As a mother, I'm happy that they're getting all the nutrients they need in a product they actually enjoy eating."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('images/client-2.jpeg') }}" alt="Ama Mensah" class="author-image">
                        <div class="author-info">
                            <h4 class="author-name">Christian Frimpong</h4>
                            <p class="author-title">Founder of global</p>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section" style="background-image: url('{{ asset('images/cta-bg.jpg') }}');">
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Experience the Ahavor Difference?</h2>
                <p class="cta-description">Join thousands of satisfied customers who have made Ahavor Foods a part of their healthy lifestyle.</p>
                <a href="{{ route('products') }}" class="cta-button-white">Shop Now</a>
            </div>
        </div>
    </section>
@endsection

@section('additional_scripts')
<script>
    // Product card hover effect
    document.addEventListener('DOMContentLoaded', function() {
        const productCards = document.querySelectorAll('.product-card');
        
        productCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px)';
                this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.08)';
            });
        });
    });
</script>
@endsection