@extends('layouts.main')

@section('title', 'Our Products - Ahavor Foods')

@section('content')
    <!-- Products Hero Section -->
    <section class="bg-ahavor-green/10 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Our Products</h1>
                <p class="text-lg text-gray-700 mb-8">
                    Discover our range of nutritious and delicious products made with love and light.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="bg-ahavor-green text-white py-2 px-6 rounded-full text-sm font-medium hover:bg-ahavor-green/90 transition-colors">
                        All Products
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Oats
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Tom Brown
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Cereals
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        New Arrivals
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-100">
                    <div class="relative">
                        <img src="{{ asset('images/product-oats.jpg') }}" alt="Ahavor Oats" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-ahavor-green text-white text-sm font-medium py-1 px-3 rounded-full">
                            Best Seller
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Premium Oats</h3>
                        <p class="text-gray-700 mb-4">
                            Our premium oats are packed with nutrients and fiber, perfect for a healthy breakfast or snack.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$12.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-150">
                    <div class="relative">
                        <img src="{{ asset('images/product-tombrown.jpg') }}" alt="Ahavor Tom Brown" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-ahavor-gold text-white text-sm font-medium py-1 px-3 rounded-full">
                            New
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Tom Brown Mix</h3>
                        <p class="text-gray-700 mb-4">
                            A nutritious blend of roasted corn, millet, and groundnuts, perfect for the whole family.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$15.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-200">
                    <div class="relative">
                        <img src="{{ asset('images/product-cereal.jpg') }}" alt="Ahavor Cereal" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Grain Cereal</h3>
                        <p class="text-gray-700 mb-4">
                            A delicious multi-grain cereal that provides essential nutrients for your daily needs.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$14.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-250">
                    <div class="relative">
                        <img src="{{ asset('images/product-millet.jpg') }}" alt="Ahavor Millet" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Organic Millet</h3>
                        <p class="text-gray-700 mb-4">
                            Nutrient-rich millet grains that are gluten-free and easy to digest.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$11.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-300">
                    <div class="relative">
                        <img src="{{ asset('images/product-granola.jpg') }}" alt="Ahavor Granola" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-ahavor-orange text-white text-sm font-medium py-1 px-3 rounded-full">
                            Popular
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Crunchy Granola</h3>
                        <p class="text-gray-700 mb-4">
                            A delicious blend of oats, nuts, and honey for a perfect breakfast or snack.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$16.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-350">
                    <div class="relative">
                        <img src="{{ asset('images/product-quinoa.jpg') }}" alt="Ahavor Quinoa" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Organic Quinoa</h3>
                        <p class="text-gray-700 mb-4">
                            High-protein quinoa that's perfect for salads, bowls, and as a rice alternative.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$18.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 7 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-400">
                    <div class="relative">
                        <img src="{{ asset('images/product-breakfast-mix.jpg') }}" alt="Ahavor Breakfast Mix" class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-ahavor-gold text-white text-sm font-medium py-1 px-3 rounded-full">
                            New
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Breakfast Mix</h3>
                        <p class="text-gray-700 mb-4">
                            A convenient all-in-one breakfast mix with oats, fruits, and nuts.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$17.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product 8 -->
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-450">
                    <div class="relative">
                        <img src="{{ asset('images/product-rice.jpg') }}" alt="Ahavor Rice" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Brown Rice</h3>
                        <p class="text-gray-700 mb-4">
                            Nutritious brown rice that's rich in fiber and essential minerals.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-ahavor-green">$13.99</span>
                            <button class="bg-ahavor-orange hover:bg-ahavor-gold text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-12">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="py-2 px-4 bg-ahavor-green border border-ahavor-green text-sm font-medium text-white">
                        1
                    </a>
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="py-2 px-4 bg-white border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
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