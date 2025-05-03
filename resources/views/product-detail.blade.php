@extends('layouts.main')

@section('title', '{{ $product->name }} - Ahavor Foods')

@section('content')
<!-- Product Detail Hero -->
<section class="product-detail-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Product Detail Main -->
<section class="product-detail-main">
    <div class="container">
        <div class="row">
            <!-- Product Images -->
            <div class="col-lg-6">
                <img id="main-product-image" src="{{ asset($product->image_path) }}" class="img-fluid">
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <h1 class="product-title">{{ $product->name }}</h1>
                <p class="product-category">{{ $product->category->name }}</p>
                <p class="product-price">₵{{ $product->sale_price ?? $product->regular_price }}</p>
                <p class="product-description">{{ $product->description }}</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="related-products">
    <div class="container">
        <h2 class="section-title">You May Also Like</h2>
        <div class="row">
            @foreach($relatedProducts as $related)
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset($related->image_path) }}" class="card-img-top">
                    <div class="card-body">
                        <h5><a href="{{ route('product.detail', $related->slug) }}">{{ $related->name }}</a></h5>
                        <p>₵{{ $related->regular_price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter Section (Connected to Database) -->
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
