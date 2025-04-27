@extends('layouts.main')

@section('title', 'Our Products - Ahavor Foods')

@section('content')
    <!-- Products Hero Section -->
    <section class="products-hero">
        <div class="container">
            <div class="products-hero-content">
                <h1 class="products-hero-title">Our Products</h1>
                <p class="products-hero-description">
                    Discover our range of nutritious and delicious products made with love and light.
                </p>
                <div class="products-filter">
                    <button class="filter-button active">All Products</button>
                    <button class="filter-button">Oats</button>
                    <button class="filter-button">Tom Brown</button>
                    <button class="filter-button">Cereals</button>
                    <button class="filter-button">New Arrivals</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid Section -->
    <section class="section">
        <div class="container">
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-oats.jpg') }}" alt="Ahavor Oats" class="product-image blur-load">
                        <div class="product-badge">Best Seller</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Oat Products</p>
                        <h3 class="product-title">Premium Oats</h3>
                        <p class="product-description">
                            Our premium oats are packed with nutrients and fiber, perfect for a healthy breakfast or snack.
                        </p>
                        <p class="product-price">$12.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-tombrown.jpg') }}" alt="Ahavor Tom Brown" class="product-image blur-load">
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Tom Brown</p>
                        <h3 class="product-title">Tom Brown Mix</h3>
                        <p class="product-description">
                            A nutritious blend of roasted corn, millet, and groundnuts, perfect for the whole family.
                        </p>
                        <p class="product-price">$15.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-cereal.jpg') }}" alt="Ahavor Cereal" class="product-image blur-load">
                    </div>
                    <div class="product-content">
                        <p class="product-category">Cereal Mixes</p>
                        <h3 class="product-title">Grain Cereal</h3>
                        <p class="product-description">
                            A delicious multi-grain cereal that provides essential nutrients for your daily needs.
                        </p>
                        <p class="product-price">$14.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-millet.jpg') }}" alt="Ahavor Millet" class="product-image blur-load">
                    </div>
                    <div class="product-content">
                        <p class="product-category">Grains</p>
                        <h3 class="product-title">Organic Millet</h3>
                        <p class="product-description">
                            Nutrient-rich millet grains that are gluten-free and easy to digest.
                        </p>
                        <p class="product-price">$11.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-granola.jpg') }}" alt="Ahavor Granola" class="product-image blur-load">
                        <div class="product-badge">Popular</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Breakfast</p>
                        <h3 class="product-title">Crunchy Granola</h3>
                        <p class="product-description">
                            A delicious blend of oats, nuts, and honey for a perfect breakfast or snack.
                        </p>
                        <p class="product-price">$16.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="350">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-quinoa.jpg') }}" alt="Ahavor Quinoa" class="product-image blur-load">
                    </div>
                    <div class="product-content">
                        <p class="product-category">Grains</p>
                        <h3 class="product-title">Organic Quinoa</h3>
                        <p class="product-description">
                            High-protein quinoa that's perfect for salads, bowls, and as a rice alternative.
                        </p>
                        <p class="product-price">$18.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 7 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-breakfast-mix.jpg') }}" alt="Ahavor Breakfast Mix" class="product-image blur-load">
                        <div class="product-badge">New</div>
                    </div>
                    <div class="product-content">
                        <p class="product-category">Breakfast</p>
                        <h3 class="product-title">Breakfast Mix</h3>
                        <p class="product-description">
                            A convenient all-in-one breakfast mix with oats, fruits, and nuts.
                        </p>
                        <p class="product-price">$17.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 8 -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="450">
                    <div class="product-image-container">
                        <img src="{{ asset('images/product-rice.jpg') }}" alt="Ahavor Rice" class="product-image blur-load">
                    </div>
                    <div class="product-content">
                        <p class="product-category">Grains</p>
                        <h3 class="product-title">Brown Rice</h3>
                        <p class="product-description">
                            Nutritious brown rice that's rich in fiber and essential minerals.
                        </p>
                        <p class="product-price">$13.99</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-fadeIn delay-100">
                    <div class="w-16 h-16 bg-ahavor-orange/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl text-ahavor-orange"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">100% Natural</h3>
                    <p class="text-gray-700">
                        All our products are made with natural ingredients, free from artificial additives.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-fadeIn delay-200">
                    <div class="w-16 h-16 bg-ahavor-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-ahavor-green"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Nutritious</h3>
                    <p class="text-gray-700">
                        Packed with essential nutrients to support your health and wellbeing.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-fadeIn delay-300">
                    <div class="w-16 h-16 bg-ahavor-gold/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-2xl text-ahavor-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Delivery</h3>
                    <p class="text-gray-700">
                        We ensure quick delivery to bring our products to your doorstep.
                    </p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white p-6 rounded-lg shadow-sm text-center animate-fadeIn delay-400">
                    <div class="w-16 h-16 bg-ahavor-orange/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-2xl text-ahavor-orange"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Quality Guaranteed</h3>
                    <p class="text-gray-700">
                        We stand behind the quality of our products with a satisfaction guarantee.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-ahavor-orange/10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Stay Updated</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Subscribe to our newsletter to receive updates on new products, special offers, and healthy recipes.
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                    @csrf
                    <input type="email" name="email" placeholder="Your Email Address" class="flex-1 px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange">
                    <button type="submit" class="bg-ahavor-orange hover:bg-ahavor-gold text-white font-medium py-3 px-6 rounded-md transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection