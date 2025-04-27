@extends('layouts.main')

@section('title', 'Product Details - Ahavor Foods')

@section('content')
    <!-- Product Detail Hero -->
    <section class="product-detail-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb" data-aos="fade-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Detail Main -->
    <section class="product-detail-main">
        <div class="container">
            <div class="row">
                <!-- Product Images -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="product-images" data-aos="fade-right">
                        <div class="product-main-image">
                            <img id="main-product-image" src="{{ asset('images/product-detail-main.jpg') }}" alt="{{ $product->name }}" class="img-fluid">
                            <div class="image-overlay">
                                <a href="{{ asset('images/product-detail-main.jpg') }}" data-fancybox="product-gallery">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-thumbnails">
                            <div class="row">
                                <div class="col-3">
                                    <div class="thumbnail active" data-image="{{ asset('images/product-detail-main.jpg') }}">
                                        <img src="{{ asset('images/product-detail-thumb-1.jpg') }}" alt="Thumbnail 1" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnail" data-image="{{ asset('images/product-detail-thumb-2.jpg') }}">
                                        <img src="{{ asset('images/product-detail-thumb-2.jpg') }}" alt="Thumbnail 2" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnail" data-image="{{ asset('images/product-detail-thumb-3.jpg') }}">
                                        <img src="{{ asset('images/product-detail-thumb-3.jpg') }}" alt="Thumbnail 3" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnail" data-image="{{ asset('images/product-detail-thumb-4.jpg') }}">
                                        <img src="{{ asset('images/product-detail-thumb-4.jpg') }}" alt="Thumbnail 4" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-info" data-aos="fade-left">
                        <span class="product-category">{{ $product->category }}</span>
                        <h1 class="product-title">{{ $product->name }}</h1>
                        
                        <div class="product-rating">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span class="rating-count">(42 reviews)</span>
                        </div>
                        
                        <div class="product-price">
                            @if($product->sale_price)
                                <span class="regular-price">₵{{ $product->regular_price }}</span>
                                <span class="sale-price">₵{{ $product->sale_price }}</span>
                            @else
                                <span class="current-price">₵{{ $product->regular_price }}</span>
                            @endif
                        </div>
                        
                        <div class="product-description">
                            <p>{{ $product->description }}</p>
                        </div>
                        
                        <div class="product-features">
                            <h4>Key Benefits</h4>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> High in fiber and protein</li>
                                <li><i class="bi bi-check-circle-fill"></i> No artificial preservatives</li>
                                <li><i class="bi bi-check-circle-fill"></i> Source of essential vitamins and minerals</li>
                                <li><i class="bi bi-check-circle-fill"></i> Supports digestive health</li>
                            </ul>
                        </div>
                        
                        <div class="product-meta">
                            <div class="row">
                                <div class="col-6">
                                    <div class="meta-item">
                                        <span class="meta-title">Weight:</span>
                                        <span class="meta-value">500g</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="meta-item">
                                        <span class="meta-title">SKU:</span>
                                        <span class="meta-value">AHV-{{ $product->id }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="meta-item">
                                        <span class="meta-title">Availability:</span>
                                        <span class="meta-value in-stock">In Stock</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="meta-item">
                                        <span class="meta-title">Dietary:</span>
                                        <span class="meta-value">Vegan, Gluten-Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="product-actions">
                            <div class="quantity-selector">
                                <button class="quantity-btn minus"><i class="bi bi-dash"></i></button>
                                <input type="number" class="quantity-input" value="1" min="1" max="99">
                                <button class="quantity-btn plus"><i class="bi bi-plus"></i></button>
                            </div>
                            
                            <button class="btn btn-primary add-to-cart">
                                <i class="bi bi-cart-plus"></i> Add to Cart
                            </button>
                            
                            <button class="btn btn-outline-secondary wishlist-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                        
                        <div class="product-share">
                            <span>Share:</span>
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Product Tabs -->
    <section class="product-tabs">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nutrition-tab" data-bs-toggle="tab" data-bs-target="#nutrition" type="button" role="tab" aria-controls="nutrition" aria-selected="false">Nutrition Facts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (42)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping" aria-selected="false">Shipping & Returns</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="productTabsContent">
                        <!-- Description Tab -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-description-content">
                                <h3>Product Description</h3>
                                <p>Our Premium Instant Oats are carefully selected and processed to preserve all the natural goodness of whole grain oats. Rich in fiber and protein, they make for a nutritious and satisfying breakfast that keeps you energized throughout the day.</p>
                                
                                <p>Unlike other instant oats on the market, our product contains no artificial preservatives, flavors, or colors. We believe in keeping things natural, just as nature intended.</p>
                                
                                <h4>How to Prepare</h4>
                                <p>Simply add hot water or milk to the oats, stir, and let sit for 2-3 minutes. For a creamier texture, you can microwave for an additional 30 seconds. Customize your bowl with your favorite toppings like fresh fruits, nuts, or a drizzle of honey.</p>
                                
                                <h4>Storage Instructions</h4>
                                <p>Store in a cool, dry place. Once opened, consume within 3 months for optimal freshness.</p>
                            </div>
                        </div>
                        
                        <!-- Nutrition Tab -->
                        <div class="tab-pane fade" id="nutrition" role="tabpanel" aria-labelledby="nutrition-tab">
                            <div class="nutrition-facts">
                                <h3>Nutrition Facts</h3>
                                <p class="serving-info">Serving Size: 50g (approximately 1/2 cup dry)</p>
                                
                                <table class="nutrition-table">
                                    <tr>
                                        <th colspan="2">Amount Per Serving</th>
                                    </tr>
                                    <tr>
                                        <td><strong>Calories</strong></td>
                                        <td>190</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><div class="nutrition-divider"></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Fat</strong></td>
                                        <td>3.5g</td>
                                    </tr>
                                    <tr>
                                        <td class="nutrition-sub">Saturated Fat</td>
                                        <td>0.5g</td>
                                    </tr>
                                    <tr>
                                        <td class="nutrition-sub">Trans Fat</td>
                                        <td>0g</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cholesterol</strong></td>
                                        <td>0mg</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sodium</strong></td>
                                        <td>0mg</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Carbohydrate</strong></td>
                                        <td>32g</td>
                                    </tr>
                                    <tr>
                                        <td class="nutrition-sub">Dietary Fiber</td>
                                        <td>5g</td>
                                    </tr>
                                    <tr>
                                        <td class="nutrition-sub">Total Sugars</td>
                                        <td>1g</td>
                                    </tr>
                                    <tr>
                                        <td class="nutrition-sub">Includes Added Sugars</td>
                                        <td>0g</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Protein</strong></td>
                                        <td>7g</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><div class="nutrition-divider"></div></td>
                                    </tr>
                                    <tr>
                                        <td>Vitamin D</td>
                                        <td>0mcg</td>
                                    </tr>
                                    <tr>
                                        <td>Calcium</td>
                                        <td>20mg</td>
                                    </tr>
                                    <tr>
                                        <td>Iron</td>
                                        <td>1.8mg</td>
                                    </tr>
                                    <tr>
                                        <td>Potassium</td>
                                        <td>150mg</td>
                                    </tr>
                                </table>
                                
                                <p class="nutrition-disclaimer">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs.</p>
                            </div>
                        </div>
                        
                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-reviews">
                                <h3>Customer Reviews</h3>
                                
                                <div class="review-summary">
                                    <div class="overall-rating">
                                        <div class="rating-number">4.5</div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <div class="rating-count">Based on 42 reviews</div>
                                    </div>
                                    
                                    <div class="rating-bars">
                                        <div class="rating-bar-item">
                                            <div class="rating-label">5 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-count">32</div>
                                        </div>
                                        <div class="rating-bar-item">
                                            <div class="rating-label">4 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-count">6</div>
                                        </div>
                                        <div class="rating-bar-item">
                                            <div class="rating-label">3 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-count">3</div>
                                        </div>
                                        <div class="rating-bar-item">
                                            <div class="rating-label">2 stars</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-count">1</div>
                                        </div>
                                        <div class="rating-bar-item">
                                            <div class="rating-label">1 star</div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-count">0</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Individual Reviews -->
                                <div class="reviews-list">
                                    <!-- Review 1 -->
                                    <div class="review-item">
                                        <div class="review-header">
                                            <div class="reviewer-info">
                                                <img src="{{ asset('images/reviewer-1.jpg') }}" alt="Reviewer" class="reviewer-avatar">
                                                <div>
                                                    <h5 class="reviewer-name">Sarah Johnson</h5>
                                                    <div class="review-date">Posted on May 15, 2023</div>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="review-title">Best oats I've ever tried!</div>
                                        <div class="review-content">
                                            <p>I've been trying different brands of oats for years, and these are by far the best. The texture is perfect - not too mushy, not too firm. And the taste is so much better than other brands. I love that there are no artificial ingredients. Will definitely be purchasing again!</p>
                                        </div>
                                        <div class="review-photos">
                                            <img src="{{ asset('images/review-photo-1.jpg') }}" alt="Review Photo" class="review-photo">
                                            <img src="{{ asset('images/review-photo-2.jpg') }}" alt="Review Photo" class="review-photo">
                                        </div>
                                    </div>
                                    
                                    <!-- Review 2 -->
                                    <div class="review-item">
                                        <div class="review-header">
                                            <div class="reviewer-info">
                                                <img src="{{ asset('images/reviewer-2.jpg') }}" alt="Reviewer" class="reviewer-avatar">
                                                <div>
                                                    <h5 class="reviewer-name">Michael Thompson</h5>
                                                    <div class="review-date">Posted on April 28, 2023</div>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                        </div>
                                        <div class="review-title">Great product, quick delivery</div>
                                        <div class="review-content">
                                            <p>These oats have become a staple in my morning routine. They cook quickly and taste great with just a bit of honey and some fresh fruit. The packaging is also convenient and keeps the oats fresh. The only reason I'm giving 4 stars instead of 5 is that I wish they came in a larger size option.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Review 3 -->
                                    <div class="review-item">
                                        <div class="review-header">
                                            <div class="reviewer-info">
                                                <img src="{{ asset('images/reviewer-3.jpg') }}" alt="Reviewer" class="reviewer-avatar">
                                                <div>
                                                    <h5 class="reviewer-name">Emily Rodriguez</h5>
                                                    <div class="review-date">Posted on April 10, 2023</div>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="review-title">Perfect for my health journey</div>
                                        <div class="review-content">
                                            <p>As someone who's been on a health journey for the past year, finding nutritious foods that actually taste good has been a challenge. These oats are a game-changer! They keep me full until lunch and have helped with my digestion. I also appreciate that they're locally sourced. Highly recommend!</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Write a Review Form -->
                                <div class="write-review">
                                    <h4>Write a Review</h4>
                                    <form>
                                        <div class="mb-3">
                                            <label for="reviewRating" class="form-label">Your Rating</label>
                                            <div class="rating-select">
                                                <i class="bi bi-star rating-star" data-rating="1"></i>
                                                <i class="bi bi-star rating-star" data-rating="2"></i>
                                                <i class="bi bi-star rating-star" data-rating="3"></i>
                                                <i class="bi bi-star rating-star" data-rating="4"></i>
                                                <i class="bi bi-star rating-star" data-rating="5"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewTitle" class="form-label">Review Title</label>
                                            <input type="text" class="form-control" id="reviewTitle" placeholder="Give your review a title">
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewContent" class="form-label">Review</label>
                                            <textarea class="form-control" id="reviewContent" rows="4" placeholder="Write your review here"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewPhotos" class="form-label">Add Photos (optional)</label>
                                            <input type="file" class="form-control" id="reviewPhotos" multiple>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Shipping Tab -->
                        <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                            <div class="shipping-info">
                                <h3>Shipping Information</h3>
                                <p>We want to ensure that you receive your products as quickly and efficiently as possible. Here's what you need to know about our shipping and return policies:</p>
                                
                                <h4>Shipping</h4>
                                <ul>
                                    <li><strong>Standard Shipping:</strong> 3-5 business days (₵10)</li>
                                    <li><strong>Express Shipping:</strong> 1-2 business days (₵20)</li>
                                    <li><strong>Free Shipping:</strong> Orders over ₵100</li>
                                </ul>
                                
                                <p>We ship to all regions in Ghana. For international shipping, please contact our customer service.</p>
                                
                                <h4>Returns & Refunds</h4>
                                <p>We stand behind the quality of our products. If you're not completely satisfied with your purchase, you can return it within 30 days of delivery for a full refund or exchange.</p>
                                
                                <p>To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging.</p>
                                
                                <p>To initiate a return, please contact our customer service team at <a href="mailto:returns@ahavor.com">returns@ahavor.com</a> or call us at +233 20 123 4567.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">You May Also Like</h2>
                    <div class="title-decoration mx-auto"></div>
                </div>
            </div>
            
            <div class="row mt-5">
                <!-- Related Product 1 -->
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-tumb">
                            <img src="{{ asset('images/related-product-1.jpg') }}" alt="Related Product">
                        </div>
                        <div class="product-details">
                            <span class="product-category">Cereals</span>
                            <h4><a href="#">Multigrain Breakfast Cereal</a></h4>
                            <div class="product-bottom-details">
                                <div class="product-price">₵28.75</div>
                                <div class="product-links">
                                    <a href="#"><i class="bi bi-heart"></i></a>
                                    <a href="#"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Related Product 2 -->
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card">
                        <div class="product-tumb">
                            <img src="{{ asset('images/related-product-2.jpg') }}" alt="Related Product">
                        </div>
                        <div class="product-details">
                            <span class="product-category">Tom Brown</span>
                            <h4><a href="#">Classic Tom Brown Mix</a></h4>
                            <div class="product-bottom-details">
                                <div class="product-price">₵32.50</div>
                                <div class="product-links">
                                    <a href="#"><i class="bi bi-heart"></i></a>
                                    <a href="#"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Related Product 3 -->
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card">
                        <div class="product-tumb">
                            <img src="{{ asset('images/related-product-3.jpg') }}" alt="Related Product">
                        </div>
                        <div class="product-details">
                            <span class="product-category">Healthy Snacks</span>
                            <h4><a href="#">Oat & Honey Energy Bars</a></h4>
                            <div class="product-bottom-details">
                                <div class="product-price">₵18.99</div>
                                <div class="product-links">
                                    <a href="#"><i class="bi bi-heart"></i></a>
                                    <a href="#"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Related Product 4 -->
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card">
                        <div class="product-tumb">
                            <img src="{{ asset('images/related-product-4.jpg') }}" alt="Related Product">
                        </div>
                        <div class="product-details">
                            <span class="product-category">Oats</span>
                            <h4><a href="#">Steel Cut Oats</a></h4>
                            <div class="product-bottom-details">
                                <div class="product-price">₵27.99</div>
                                <div class="product-links">
                                    <a href="#"><i class="bi bi-heart"></i></a>
                                    <a href="#"><i class="bi bi-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Product thumbnail gallery
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.getElementById('main-product-image');
        
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                // Remove active class from all thumbnails
                thumbnails.forEach(item => item.classList.remove('active'));
                
                // Add active class to clicked thumbnail
                this.classList.add('active');
                
                // Update main image
                const newImageSrc = this.getAttribute('data-image');
                
                // Apply blur effect during transition
                mainImage.style.filter = 'blur(10px)';
                
                // Change image source
                mainImage.src = newImageSrc;
                
                // Remove blur effect after image loads
                mainImage.onload = function() {
                    let blur = 10;
                    const interval = setInterval(() => {
                        blur -= 1;
                        if (blur <= 0) {
                            clearInterval(interval);
                            mainImage.style.filter = 'none';
                        } else {
                            mainImage.style.filter = `blur(${blur}px)`;
                        }
                    }, 30);
                };
            });
        });
        
        // Quantity selector
        const minusBtn = document.querySelector('.quantity-btn.minus');
        const plusBtn = document.querySelector('.quantity-btn.plus');
        const quantityInput = document.querySelector('.quantity-input');
        
        minusBtn.addEventListener('click', function() {
            const currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });
        
        plusBtn.addEventListener('click', function() {
            const currentValue = parseInt(quantityInput.value);
            if (currentValue < 99) {
                quantityInput.value = currentValue + 1;
            }
        });
        
        // Wishlist button toggle
        const wishlistBtn = document.querySelector('.wishlist-btn');
        wishlistBtn.addEventListener('click', function() {
            this.classList.toggle('active');
            const icon = this.querySelector('i');
            if (this.classList.contains('active')) {
                icon.classList.remove('bi-heart');
                icon.classList.add('bi-heart-fill');
            } else {
                icon.classList.remove('bi-heart-fill');
                icon.classList.add('bi-heart');
            }
        });
        
        // Rating selection in review form
        const ratingStars = document.querySelectorAll('.rating-star');
        ratingStars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                
                // Reset all stars
                ratingStars.forEach(s => {
                    s.classList.remove('bi-star-fill');
                    s.classList.add('bi-star');
                });
                
                // Fill stars up to selected rating
                for (let i = 0; i < rating; i++) {
                    ratingStars[i].classList.remove('bi-star');
                    ratingStars[i].classList.add('bi-star-fill');
                }
            });
            
            // Hover effect
            star.addEventListener('mouseenter', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                
                for (let i = 0; i < rating; i++) {
                    ratingStars[i].classList.add('hover');
                }
            });
            
            star.addEventListener('mouseleave', function() {
                ratingStars.forEach(s => {
                    s.classList.remove('hover');
                });
            });
        });
        
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>
@endsection