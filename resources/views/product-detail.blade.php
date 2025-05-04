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
                <div class="product-images">
                    <div class="product-main-image">
                        <img id="main-product-image" src="{{ asset($product->image_path) }}" class="img-fluid">
                        <div class="image-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>

                    <!-- Product Thumbnails -->
                    @if($product->images && $product->images->count() > 0)
                        <div class="product-thumbnails">
                            @foreach($product->images as $image)
                            <div class="thumbnail">
                                <img src="{{ asset('images/' . $image->path) }}" alt="Thumbnail">
                            </div>
                            @endforeach
                        </div>
                    @else
                        <p>No images available for this product.</p>
                    @endif

                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <h1 class="product-title">{{ $product->name }}</h1>
                <p class="product-category">{{ $product->category->name }}</p>
                <div class="product-rating">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <span class="rating-count">{{ $product->rating }} / 5</span>
                </div>
                <p class="product-price">₵{{ $product->sale_price ?? $product->regular_price }}</p>
                <p class="product-description">{{ $product->description }}</p>

                <!-- Product Meta -->
                <div class="product-meta">
                    <div class="meta-item">
                        <i class="fas fa-check-circle"></i>
                        <span class="meta-title">Availability:</span>
                        <span class="meta-value {{ $product->stock > 0 ? 'in-stock' : '' }}">{{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-weight-hanging"></i>
                        <span class="meta-title">Weight:</span>
                        <span class="meta-value">{{ $product->weight }}g</span>
                    </div>
                </div>

                <!-- Add to Cart & Wishlist -->
                <div class="product-actions">
                    <div class="quantity-selector">
                        <button class="quantity-btn">-</button>
                        <input type="number" class="quantity-input" value="1">
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="add-to-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                    <button class="wishlist-btn"><i class="fas fa-heart"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nutrition Facts -->
@if($product->nutrition)
    <div class="container">
        <h3>Nutrition Facts</h3>
        <table class="nutrition-table">
            <tr><th>Calories</th><td>{{ $product->nutrition->calories }}</td></tr>
            <tr><th>Protein</th><td>{{ $product->nutrition->protein }}g</td></tr>
            <tr><th>Carbs</th><td>{{ $product->nutrition->carbs }}g</td></tr>
            <tr><th>Fat</th><td>{{ $product->nutrition->fat }}g</td></tr>
        </table>
    </div>
@else
    <p>No nutrition information available.</p>
@endif


<!-- Customer Reviews -->
@if($product->reviews && $product->reviews->count() > 0)
    <div class="reviews-list">
        @foreach($product->reviews as $review)
        <div class="review-item">
            <div class="review-header">
                <div class="reviewer-info">
                    <img src="{{ asset('images/users/' . $review->user->avatar) }}" class="reviewer-avatar">
                    <div>
                        <p class="reviewer-name">{{ $review->user->name }}</p>
                        <p class="review-date">{{ $review->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="stars">
                    @for ($i = 0; $i < $review->rating; $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
            </div>
            <p class="review-title">{{ $review->title }}</p>
            <p class="review-content">{{ $review->content }}</p>
        </div>
        @endforeach
    </div>
@else
    <p>No reviews available for this product.</p>
@endif


<!-- Shipping Information -->
<section class="shipping-info">
    <div class="container">
        <h3>Shipping & Delivery</h3>
        <p>{{ $product->shipping_details }}</p>
        <ul>
            <li><i class="fas fa-truck"></i> Fast nationwide delivery</li>
            <li><i class="fas fa-box-open"></i> Secure packaging</li>
        </ul>
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
@endsection
