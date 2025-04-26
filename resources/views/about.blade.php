@extends('layouts.main')

@section('title', 'About Us - Ahavor Foods')

@section('content')
    <!-- About Hero Section -->
    <section class="bg-ahavor-green/10 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">About Ahavor Foods</h1>
                <p class="text-lg text-gray-700 mb-8">
                    Learn about our story, mission, values, and the people behind Ahavor Foods.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="animate-fadeIn">
                    <img src="{{ asset('images/about-story.jpg') }}" alt="Our Story" class="rounded-lg shadow-lg w-full h-auto">
                </div>
                <div class="animate-fadeIn delay-200">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        The name AHAVOR is a Hebrew word, it is the combination of two Hebrew words; 'AHAVAH' and 'OR', which means love and light respectively.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Ahavor Foods was born out of a passion to provide nutritious, high-quality food products that nourish both body and soul. Our journey began with a simple vision: to become a leading force in Ghana and beyond, empowering young entrepreneurs through innovation, excellence, and impact.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        What started as a small operation has grown into a beloved brand that touches the lives of thousands of customers. We take pride in our commitment to quality, sustainability, and community development.
                    </p>
                    <div class="flex items-center">
                        <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('images/ceo.jpg') }}" alt="CEO" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">John Ahavor</h4>
                            <p class="text-gray-600">Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12 animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Vision & Mission</h2>
                <p class="text-lg text-gray-700">
                    Guided by our core values, we strive to make a positive impact in the world through our products and actions.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Vision -->
                <div class="bg-white p-8 rounded-lg shadow-md animate-fadeIn delay-100">
                    <div class="w-16 h-16 bg-ahavor-orange/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-2xl text-ahavor-orange"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        To become a leading force in Ghana and beyond, empowering young entrepreneurs through innovation, excellence, and impact.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Creating sustainable food solutions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Promoting healthy eating habits</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Building a global brand with local roots</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Mission -->
                <div class="bg-white p-8 rounded-lg shadow-md animate-fadeIn delay-200">
                    <div class="w-16 h-16 bg-ahavor-green/10 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-2xl text-ahavor-green"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        To provide high-quality, nutritious food products that enhance the well-being of our customers while creating opportunities for growth and development in our communities.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-ahavor-orange mt-1 mr-3"></i>
                            <span class="text-gray-700">Delivering exceptional product quality</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-ahavor-orange mt-1 mr-3"></i>
                            <span class="text-gray-700">Supporting local farmers and suppliers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-ahavor-orange mt-1 mr-3"></i>
                            <span class="text-gray-700">Empowering young entrepreneurs</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12 animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                <p class="text-lg text-gray-700">
                    These principles guide everything we do at Ahavor Foods.
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="bg-gray-50 p-6 rounded-lg animate-fadeIn delay-100">
                    <div class="w-12 h-12 bg-ahavor-orange/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-crown text-xl text-ahavor-orange"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kingdom-Minded</h3>
                    <p class="text-gray-700">
                        We operate with a higher purpose, seeking to make a positive impact that extends beyond profit.
                    </p>
                </div>
                
                <!-- Value 2 -->
                <div class="bg-gray-50 p-6 rounded-lg animate-fadeIn delay-150">
                    <div class="w-12 h-12 bg-ahavor-green/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-award text-xl text-ahavor-green"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Excellence as Our Standard</h3>
                    <p class="text-gray-700">
                        We strive for excellence in everything we do, from product quality to customer service.
                    </p>
                </div>
                
                <!-- Value 3 -->
                <div class="bg-gray-50 p-6 rounded-lg animate-fadeIn delay-200">
                    <div class="w-12 h-12 bg-ahavor-gold/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-flag text-xl text-ahavor-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mission-Driven</h3>
                    <p class="text-gray-700">
                        We are guided by our mission to provide nutritious food and create opportunities for growth.
                    </p>
                </div>
                
                <!-- Value 4 -->
                <div class="bg-gray-50 p-6 rounded-lg animate-fadeIn delay-250">
                    <div class="w-12 h-12 bg-ahavor-orange/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-xl text-ahavor-orange"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Rooted in Love</h3>
                    <p class="text-gray-700">
                        Love is at the core of our brand name and our approach to business and relationships.
                    </p>
                </div>
                
                <!-- Value 5 -->
                <div class="bg-gray-50 p-6 rounded-lg animate-fadeIn delay-300">
                    <div class="w-12 h-12 bg-ahavor-green/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-hand-holding-heart text-xl text-ahavor-green"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Impact-Driven</h3>
                    <p class="text-gray-700">
                        We measure our success not just by profit, but by the positive impact we make in communities.
                    </p>
                </div>
                
                <!-- Value 6 -->
                <div class="bg-gray-50 p-6 rounded-lg animate-fadeIn delay-350">
                    <div class="w-12 h-12 bg-ahavor-gold/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-xl text-ahavor-gold"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation</h3>
                    <p class="text-gray-700">
                        We continuously seek new ways to improve our products and processes to better serve our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12 animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-lg text-gray-700">
                    The dedicated people behind Ahavor Foods who work tirelessly to bring love and light to your table.
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-100">
                    <img src="{{ asset('images/ceo.jpg') }}" alt="John Ahavor" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">John Ahavor</h3>
                        <p class="text-ahavor-orange font-medium mb-4">Founder & CEO</p>
                        <p class="text-gray-700 mb-4">
                            Visionary leader with a passion for nutrition and community development.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-150">
                    <img src="{{ asset('images/team-2.jpg') }}" alt="Sarah Mensah" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Sarah Mensah</h3>
                        <p class="text-ahavor-green font-medium mb-4">Operations Director</p>
                        <p class="text-gray-700 mb-4">
                            Ensures smooth operations and maintains our high quality standards.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-200">
                    <img src="{{ asset('images/team-3.jpg') }}" alt="David Owusu" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">David Owusu</h3>
                        <p class="text-ahavor-gold font-medium mb-4">Product Development</p>
                        <p class="text-gray-700 mb-4">
                            Creates innovative recipes and ensures nutritional excellence.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden animate-fadeIn delay-250">
                    <img src="{{ asset('images/team-4.jpg') }}" alt="Grace Addo" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Grace Addo</h3>
                        <p class="text-ahavor-orange font-medium mb-4">Marketing Manager</p>
                        <p class="text-gray-700 mb-4">
                            Spreads the word about our mission and connects with our community.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Projects Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12 animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Future Projects</h2>
                <p class="text-lg text-gray-700">
                    The future of Ahavor is filled with exciting and impactful projects designed to inspire growth and create lasting change.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-ahavor-green/5 p-8 rounded-lg animate-fadeIn delay-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Expanding Our Product Line</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        We're developing new nutritious products to meet the evolving needs of our customers and provide more options for healthy eating.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Organic snack options</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Ready-to-eat meal solutions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Specialty health products</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-ahavor-orange/5 p-8 rounded-lg animate-fadeIn delay-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Building New Brands</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        We're creating new brands with the purpose of generating wealth and opportunities for our communities.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-orange mt-1 mr-3"></i>
                            <span class="text-gray-700">Youth entrepreneurship programs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-orange mt-1 mr-3"></i>
                            <span class="text-gray-700">Community development initiatives</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-orange mt-1 mr-3"></i>
                            <span class="text-gray-700">Educational partnerships</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-ahavor-gold/5 p-8 rounded-lg animate-fadeIn delay-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Exploring New Markets</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        We're expanding our reach to new regions and countries to share our products and mission with more people.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-gold mt-1 mr-3"></i>
                            <span class="text-gray-700">Regional expansion across Africa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-gold mt-1 mr-3"></i>
                            <span class="text-gray-700">International market entry</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-gold mt-1 mr-3"></i>
                            <span class="text-gray-700">E-commerce growth</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-ahavor-green/5 p-8 rounded-lg animate-fadeIn delay-400">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sustainability Initiatives</h3>
                    <p class="text-lg text-gray-700 mb-6">
                        We're implementing eco-friendly practices throughout our operations to minimize our environmental impact.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Sustainable packaging solutions</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Reduced carbon footprint</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-arrow-right text-ahavor-green mt-1 mr-3"></i>
                            <span class="text-gray-700">Support for sustainable farming</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-ahavor-green text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Join Us on Our Journey</h2>
                <p class="text-xl mb-8">
                    Be a part of our mission to bring love and light to every meal and create positive change in our communities.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-ahavor-green font-medium py-3 px-8 rounded-md transition-colors inline-block">
                        Contact Us
                    </a>
                    <a href="{{ route('products') }}" class="bg-transparent hover:bg-white/10 text-white border border-white font-medium py-3 px-8 rounded-md transition-colors inline-block">
                        Explore Our Products
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection