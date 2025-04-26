@extends('layouts.main')

@section('title', 'Contact Us - Ahavor Foods')

@section('content')
    <!-- Contact Hero Section -->
    <section class="bg-ahavor-green/10 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Contact Us</h1>
                <p class="text-lg text-gray-700 mb-8">
                    We'd love to hear from you! Reach out with any questions, feedback, or inquiries.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Info -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-sm h-full animate-fadeIn">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Get In Touch</h2>
                        
                        <div class="space-y-6">
                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-ahavor-green/10 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <i class="fas fa-map-marker-alt text-xl text-ahavor-green"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Our Location</h3>
                                    <p class="text-gray-700">123 Ahavor Street, Accra, Ghana</p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-ahavor-orange/10 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <i class="fas fa-phone-alt text-xl text-ahavor-orange"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Phone Number</h3>
                                    <p class="text-gray-700">+233 123 456 789</p>
                                    <p class="text-gray-700">+233 987 654 321</p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-ahavor-gold/10 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <i class="fas fa-envelope text-xl text-ahavor-gold"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Email Address</h3>
                                    <p class="text-gray-700">info@ahavor.com</p>
                                    <p class="text-gray-700">support@ahavor.com</p>
                                </div>
                            </div>
                            
                            <!-- Working Hours -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-ahavor-green/10 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <i class="fas fa-clock text-xl text-ahavor-green"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Working Hours</h3>
                                    <p class="text-gray-700">Monday - Friday: 8:00 AM - 5:00 PM</p>
                                    <p class="text-gray-700">Saturday: 9:00 AM - 1:00 PM</p>
                                    <p class="text-gray-700">Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="mt-8">
                            <h3 class="font-bold text-gray-900 mb-4">Follow Us</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-ahavor-orange/10 rounded-full flex items-center justify-center text-ahavor-orange hover:bg-ahavor-orange hover:text-white transition-colors">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-ahavor-green/10 rounded-full flex items-center justify-center text-ahavor-green hover:bg-ahavor-green hover:text-white transition-colors">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-ahavor-gold/10 rounded-full flex items-center justify-center text-ahavor-gold hover:bg-ahavor-gold hover:text-white transition-colors">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-ahavor-orange/10 rounded-full flex items-center justify-center text-ahavor-orange hover:bg-ahavor-orange hover:text-white transition-colors">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white p-8 rounded-lg shadow-sm animate-fadeIn delay-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                        
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                    <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                                    <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required>
                                </div>
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message</label>
                                <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" class="w-full bg-ahavor-green hover:bg-ahavor-green/90 text-white font-medium py-3 px-6 rounded-md transition-colors">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12 animate-fadeIn">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Find Us</h2>
                <p class="text-lg text-gray-700">
                    Visit our headquarters or one of our retail locations.
                </p>
            </div>
            
            <div class="rounded-lg overflow-hidden shadow-lg animate-fadeIn delay-100">
                <div class="h-96 w-full">
                    <!-- Replace with actual Google Maps embed code -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254936.9394494253!2d-0.2661017242186092!3d5.594135269748262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra%2C%20Ghana!5e0!3m2!1sen!2sus!4v1650000000000!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12 animate-fadeIn">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-700">
                    Find answers to common questions about our products and services.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-50 rounded-lg p-6 animate-fadeIn delay-100">
                    <button class="flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-900">Where can I buy Ahavor products?</h3>
                        <i class="fas fa-chevron-down text-ahavor-orange"></i>
                    </button>
                    <div class="mt-4">
                        <p class="text-gray-700">
                            Ahavor products are available in major supermarkets and retail stores across Ghana. You can also purchase our products directly from our website with delivery options available.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="bg-gray-50 rounded-lg p-6 animate-fadeIn delay-150">
                    <button class="flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-900">Are your products organic?</h3>
                        <i class="fas fa-chevron-down text-ahavor-orange"></i>
                    </button>
                    <div class="mt-4">
                        <p class="text-gray-700">
                            Many of our products use organic ingredients sourced from local farmers. We are committed to providing natural, nutritious options and clearly label which products are certified organic.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="bg-gray-50 rounded-lg p-6 animate-fadeIn delay-200">
                    <button class="flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-900">Do you ship internationally?</h3>
                        <i class="fas fa-chevron-down text-ahavor-orange"></i>
                    </button>
                    <div class="mt-4">
                        <p class="text-gray-700">
                            Yes, we currently ship to select countries in Africa and are expanding our international shipping options. Please contact our customer service team for specific information about shipping to your location.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="bg-gray-50 rounded-lg p-6 animate-fadeIn delay-250">
                    <button class="flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-900">How can I become a distributor?</h3>
                        <i class="fas fa-chevron-down text-ahavor-orange"></i>
                    </button>
                    <div class="mt-4">
                        <p class="text-gray-700">
                            We're always looking for partners to help distribute our products. Please fill out the distributor application form on our website or contact our business development team at partners@ahavor.com.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="bg-gray-50 rounded-lg p-6 animate-fadeIn delay-300">
                    <button class="flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-bold text-gray-900">Do you offer bulk discounts?</h3>
                        <i class="fas fa-chevron-down text-ahavor-orange"></i>
                    </button>
                    <div class="mt-4">
                        <p class="text-gray-700">
                            Yes, we offer special pricing for bulk orders. Please contact our sales team at sales@ahavor.com for more information about bulk purchasing options.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="max-w-3xl mx-auto text-center mt-12 animate-fadeIn">
                <p class="text-lg text-gray-700 mb-6">
                    Didn't find the answer you're looking for? Contact our customer support team.
                </p>
                <a href="mailto:support@ahavor.com" class="inline-block bg-ahavor-orange hover:bg-ahavor-gold text-white font-medium py-3 px-8 rounded-md transition-colors">
                    Email Support
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-ahavor-green/10">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center animate-fadeIn">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Join Our Community</h2>
                <p class="text-lg text-gray-700 mb-8">
                    Subscribe to our newsletter to receive updates, recipes, and special offers.
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                    @csrf
                    <input type="email" name="email" placeholder="Your Email Address" class="flex-1 px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange">
                    <button type="submit" class="bg-ahavor-green hover:bg-ahavor-green/90 text-white font-medium py-3 px-6 rounded-md transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection