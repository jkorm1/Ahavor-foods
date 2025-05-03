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

<!-- Newsletter Section (Connected to the Database) -->
<section class="py-16 bg-ahavor-orange/10">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Stay Updated</h2>
            <p class="text-lg text-gray-700 mb-8">
                Subscribe to our newsletter to receive updates on new products.
            </p>
            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                @csrf
                <input type="email" name="email" placeholder="Your Email Address" class="flex-1 px-4 py-3 rounded-md border border-gray-300">
                <button type="submit" class="bg-ahavor-orange hover:bg-ahavor-gold text-white font-medium py-3 px-6 rounded-md">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
