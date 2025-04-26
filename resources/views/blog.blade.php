@extends('layouts.main')

@section('title', 'Blog - Ahavor Foods')

@section('content')
    <!-- Blog Hero Section -->
    <section class="bg-ahavor-green/10 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Our Blog</h1>
                <p class="text-lg text-gray-700 mb-8">
                    Stay updated with the latest news, recipes, and health tips from Ahavor Foods.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="bg-ahavor-green text-white py-2 px-6 rounded-full text-sm font-medium hover:bg-ahavor-green/90 transition-colors">
                        All Posts
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Recipes
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Nutrition
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Company News
                    </button>
                    <button class="bg-white text-gray-700 py-2 px-6 rounded-full text-sm font-medium hover:bg-gray-100 transition-colors">
                        Health Tips
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Post Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center animate-fadeIn">
                <div>
                    <img src="{{ asset('images/blog-featured.jpg') }}" alt="Featured Blog Post" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div>
                    <div class="flex items-center text-sm text-gray-600 mb-2">
                        <span class="bg-ahavor-orange/10 text-ahavor-orange px-3 py-1 rounded-full text-xs font-medium">Featured</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-calendar-alt mr-2"></i>
                        <span>June 20, 2023</span>
                        <span class="mx-2">•</span>
                        <span>Nutrition</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">The Power of Whole Grains: Why They Should Be Part of Your Diet</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Whole grains are an essential part of a balanced diet, providing numerous health benefits from heart health to digestive wellness. In this comprehensive guide, we explore the science behind whole grains and how to incorporate them into your daily meals.
                    </p>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/author.jpg') }}" alt="Author" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold text-gray-900">Sarah Mensah</h4>
                            <p class="text-sm text-gray-600">Nutritionist</p>
                        </div>
                    </div>
                    <a href="{{ route('blog.show', 1) }}" class="inline-block bg-ahavor-green hover:bg-ahavor-green/90 text-white font-medium py-3 px-8 rounded-md transition-colors">
                        Read Full Article
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center animate-fadeIn">Latest Articles</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-100">
                    <img src="{{ asset('images/blog-1.jpg') }}" alt="Blog Post" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>June 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span>Nutrition</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">The Benefits of Whole Grains in Your Diet</h3>
                        <p class="text-gray-700 mb-4">
                            Discover why whole grains are essential for a balanced diet and how they can improve your overall health.
                        </p>
                        <a href="{{ route('blog.show', 1) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                            Read More →
                        </a>
                    </div>
                </div>
                
                <!-- Blog Post 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-150">
                    <img src="{{ asset('images/blog-2.jpg') }}" alt="Blog Post" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>June 8, 2023</span>
                            <span class="mx-2">•</span>
                            <span>Recipes</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">5 Delicious Recipes Using Ahavor Oats</h3>
                        <p class="text-gray-700 mb-4">
                            Try these simple yet delicious recipes that transform our Premium Oats into mouthwatering meals.
                        </p>
                        <a href="{{ route('blog.show', 2) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                            Read More →
                        </a>
                    </div>
                </div>
                
                <!-- Blog Post 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-200">
                    <img src="{{ asset('images/blog-3.jpg') }}" alt="Blog Post" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>June 1, 2023</span>
                            <span class="mx-2">•</span>
                            <span>Company News</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ahavor Foods Launches New Product Line</h3>
                        <p class="text-gray-700 mb-4">
                            We're excited to announce our new line of organic products coming soon to stores near you.
                        </p>
                        <a href="{{ route('blog.show', 3) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                            Read More →
                        </a>
                    </div>
                </div>
                
                <!-- Blog Post 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-250">
                    <img src="{{ asset('images/blog-4.jpg') }}" alt="Blog Post" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>May 25, 2023</span>
                            <span class="mx-2">•</span>
                            <span>Health Tips</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">How to Build a Balanced Breakfast</h3>
                        <p class="text-gray-700 mb-4">
                            Learn the key components of a nutritious breakfast that will fuel your day and support your health goals.
                        </p>
                        <a href="{{ route('blog.show', 4) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                            Read More →
                        </a>
                    </div>
                </div>
                
                <!-- Blog Post 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-300">
                    <img src="{{ asset('images/blog-5.jpg') }}" alt="Blog Post" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>May 18, 2023</span>
                            <span class="mx-2">•</span>
                            <span>Recipes</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Healthy Snack Ideas for Busy Days</h3>
                        <p class="text-gray-700 mb-4">
                            Quick and nutritious snack recipes using Ahavor products to keep you energized throughout the day.
                        </p>
                        <a href="{{ route('blog.show', 5) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                            Read More →
                        </a>
                    </div>
                </div>
                
                <!-- Blog Post 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-350">
                    <img src="{{ asset('images/blog-6.jpg') }}" alt="Blog Post" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-600 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>May 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>Nutrition</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">The Importance of Fiber in Your Diet</h3>
                        <p class="text-gray-700 mb-4">
                            Understanding the role of dietary fiber and how Ahavor products can help you meet your daily needs.
                        </p>
                        <a href="{{ route('blog.show', 6) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                            Read More →
                        </a>
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

    <!-- Newsletter Section -->
    <section class="py-16 bg-ahavor-orange/10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Subscribe to Our Newsletter</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Get the latest articles, recipes, and health tips delivered directly to your inbox.
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