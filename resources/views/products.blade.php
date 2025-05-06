@extends('layouts.main')

@section('title', 'Our Products - Ahavor Foods')

@section('content')
<!-- Products Hero Section -->
<section class="products-hero">
    <div class="container">
        <div class="products-hero-content">
            <h1 class="products-hero-title">Our Products</h1>
            <p class="products-hero-description">Discover our range of nutritious and delicious products.</p>
            <div class="products-filter">
                <button class="filter-button active">All Products</button>
                @foreach($categories as $category)
                    <button class="filter-button">{{ $category->name }}</button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="section">
    <div class="container">
        <div class="products-grid">
            @foreach($products as $product)
            <div class="product-card" data-aos="fade-up">
                <a href="{{ route('product.detail', $product->slug) }}" class="product-link">
                    <div class="product-image-container">
                        <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="product-image blur-load">
                    </div>
                    <div class="product-content">
                        <p class="product-category">{{ $product->category->name }}</p>
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <p class="product-price">₵{{ $product->sale_price ?? $product->regular_price }}</p>
                        <button class="product-button">Add to Cart</button>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <i class="fas fa-leaf text-2xl text-ahavor-orange"></i>
                <h3 class="text-xl font-bold text-gray-900">100% Natural</h3>
                <p>All our products are made with natural ingredients.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <i class="fas fa-heart text-2xl text-ahavor-green"></i>
                <h3 class="text-xl font-bold text-gray-900">Nutritious</h3>
                <p>Packed with essential nutrients to support your health.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <i class="fas fa-truck text-2xl text-ahavor-gold"></i>
                <h3 class="text-xl font-bold text-gray-900">Fast Delivery</h3>
                <p>Quick delivery to bring our products to your doorstep.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <i class="fas fa-shield-alt text-2xl text-ahavor-orange"></i>
                <h3 class="text-xl font-bold text-gray-900">Quality Guaranteed</h3>
                <p>We stand behind the quality of our products.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2 class="newsletter-title">Stay Updated</h2>
                <p class="newsletter-description"> Subscribe to our newsletter to receive updates on new products.</p>
                
                <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="email" class="newsletter-input" name="email" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-button">Subscribe</button>
                </form>
            </div>
            @if(session('newsletter_success'))
                <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('newsletter_success') }}
                </div>
            @endif
            @if($errors->has('email'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}
                </div>
            @endif

        </div>
    </section>
@endsection
