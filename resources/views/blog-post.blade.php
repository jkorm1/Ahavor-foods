@extends('layouts.main')

@section('title', 'The Benefits of Whole Grains - Ahavor Foods')

@section('content')
    <!-- Blog Post Hero Section -->
    <section class="bg-ahavor-green/5 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto animate-fadeIn">
                <div class="flex items-center text-sm text-gray-600 mb-4">
                    <a href="{{ route('blog') }}" class="flex items-center text-ahavor-green hover:text-ahavor-orange transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        <span>Back to Blog</span>
                    </a>
                    <span class="mx-3">|</span>
                    <span>June 15, 2023</span>
                    <span class="mx-2">•</span>
                    <span>Nutrition</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">The Benefits of Whole Grains in Your Diet</h1>
                <div class="flex items-center mb-8">
                    <img src="{{ asset('images/author.jpg') }}" alt="Author" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-gray-900">Sarah Mensah</h4>
                        <p class="text-sm text-gray-600">Nutritionist at Ahavor Foods</p>
                    </div>
                </div>
                <img src="{{ asset('images/blog-1-full.jpg') }}" alt="Whole Grains" class="rounded-lg shadow-lg w-full h-auto mb-8">
            </div>
        </div>
    </section>

    <!-- Blog Post Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <article class="prose prose-lg max-w-none animate-fadeIn">
                        <p>
                            Whole grains have been a staple of human diets for thousands of years, providing essential nutrients and energy. In recent decades, however, refined grains have become more common in many diets, leading to a decrease in the consumption of whole grains. This shift has coincided with an increase in various health issues, prompting nutritionists and health experts to emphasize the importance of incorporating whole grains back into our daily meals.
                        </p>
                        
                        <h2>What Are Whole Grains?</h2>
                        <p>
                            Whole grains contain all three parts of the grain kernel: the bran, the germ, and the endosperm. The bran is the outer layer that contains fiber, B vitamins, and minerals. The germ is the embryo of the seed, which contains B vitamins, vitamin E, antioxidants, and healthy fats. The endosperm is the largest part of the grain, containing carbohydrates and proteins.
                        </p>
                        <p>
                            In contrast, refined grains have had the bran and germ removed during processing, leaving only the endosperm. This process strips away many of the grain's nutrients and fiber, resulting in a product that is less nutritious.
                        </p>
                        
                        <h2>Health Benefits of Whole Grains</h2>
                        <p>
                            Research has consistently shown that consuming whole grains as part of a balanced diet offers numerous health benefits:
                        </p>
                        
                        <h3>1. Heart Health</h3>
                        <p>
                            Whole grains have been linked to a reduced risk of heart disease. The fiber in whole grains helps lower cholesterol levels, while other nutrients like potassium and magnesium help regulate blood pressure.
                        </p>
                        
                        <h3>2. Digestive Health</h3>
                        <p>
                            The fiber in whole grains promotes healthy digestion by adding bulk to stool and preventing constipation. It also feeds beneficial gut bacteria, supporting a healthy microbiome.
                        </p>
                        
                        <h3>3. Weight Management</h3>
                        <p>
                            Whole grains are more filling than refined grains due to their higher fiber content. This can help control appetite and prevent overeating, making them a valuable component of a weight management plan.
                        </p>
                        
                        <h3>4. Blood Sugar Control</h3>
                        <p>
                            Unlike refined grains, which can cause rapid spikes in blood sugar, whole grains are digested more slowly, leading to a more gradual rise in blood sugar levels. This makes them a better choice for people with diabetes or those at risk of developing the condition.
                        </p>
                        
                        <h3>5. Reduced Risk of Certain Cancers</h3>
                        <p>
                            Some studies suggest that regular consumption of whole grains may reduce the risk of certain types of cancer, particularly colorectal cancer. The fiber, antioxidants, and other compounds in whole grains may contribute to this protective effect by promoting healthy cell growth and reducing inflammation.

                        <h2>Common Types of Whole Grains</h2>
                        <p>
                            There are many delicious whole grains to choose from, each with its own unique flavor profile and nutritional benefits:
                        </p>
                        
                        <ul>
                            <li><strong>Oats:</strong> High in soluble fiber, particularly beta-glucan, which is known for its cholesterol-lowering properties.</li>
                            <li><strong>Brown Rice:</strong> A versatile grain that contains more fiber and nutrients than white rice.</li>
                            <li><strong>Quinoa:</strong> A complete protein source that contains all nine essential amino acids.</li>
                            <li><strong>Barley:</strong> Rich in fiber and particularly effective at lowering cholesterol and improving blood sugar control.</li>
                            <li><strong>Millet:</strong> Naturally gluten-free and a good source of magnesium, phosphorus, and antioxidants.</li>
                            <li><strong>Buckwheat:</strong> Despite its name, it's not related to wheat and is gluten-free. It's rich in antioxidants and minerals.</li>
                            <li><strong>Whole Wheat:</strong> Contains more fiber, vitamins, and minerals than refined wheat products.</li>
                        </ul>
                        
                        <h2>How to Incorporate More Whole Grains Into Your Diet</h2>
                        <p>
                            Making the switch to whole grains doesn't have to be difficult. Here are some simple ways to increase your whole grain consumption:
                        </p>
                        
                        <h3>Start Your Day with Whole Grains</h3>
                        <p>
                            Begin your morning with a bowl of Ahavor Premium Oats or whole grain cereal. You can also try whole grain toast or pancakes made with whole grain flour.
                        </p>
                        
                        <h3>Make Simple Substitutions</h3>
                        <p>
                            Replace refined grains with whole grain alternatives in your favorite recipes. Use brown rice instead of white rice, whole wheat pasta instead of regular pasta, and whole wheat flour in baking.
                        </p>
                        
                        <h3>Try New Grains</h3>
                        <p>
                            Experiment with different types of whole grains to add variety to your meals. Quinoa makes a great base for salads, while barley adds heartiness to soups and stews.
                        </p>
                        
                        <h3>Choose Whole Grain Snacks</h3>
                        <p>
                            Opt for whole grain crackers, popcorn (a whole grain!), or granola bars made with whole oats for nutritious snacking options.
                        </p>
                        
                        <h2>Ahavor's Commitment to Whole Grains</h2>
                        <p>
                            At Ahavor Foods, we believe in the power of whole grains to nourish both body and soul. Our products, from our Premium Oats to our Grain Cereal, are crafted with high-quality whole grains to provide you with the nutrition you need to thrive.
                        </p>
                        <p>
                            We source our grains from trusted local farmers who share our commitment to quality and sustainability. Through careful processing methods, we preserve the natural goodness of the whole grain, ensuring that you receive all the benefits nature intended.
                        </p>
                        
                        <h2>Conclusion</h2>
                        <p>
                            Incorporating whole grains into your diet is one of the simplest yet most effective steps you can take to improve your health. From supporting heart health to aiding digestion and weight management, the benefits of whole grains are numerous and well-documented.
                        </p>
                        <p>
                            As you explore the world of whole grains, remember that variety is key. Different grains offer different nutritional profiles, so aim to include a diverse selection in your meals. With Ahavor Foods' range of whole grain products, enjoying the benefits of whole grains has never been easier or more delicious.
                        </p>
                        <p>
                            Here's to your health and wellbeing, nourished by the goodness of whole grains!
                        </p>
                    </article>
                    
                    <!-- Share and Tags -->
                    <div class="mt-12 pt-8 border-t border-gray-200 animate-fadeIn">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                            <div class="mb-4 sm:mb-0">
                                <h4 class="font-bold text-gray-900 mb-2">Share this article:</h4>
                                <div class="flex space-x-4">
                                    <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-ahavor-orange transition-colors">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">Tags:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                        Nutrition
                                    </a>
                                    <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                        Whole Grains
                                    </a>
                                    <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                        Health
                                    </a>
                                    <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                        Diet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Author Bio -->
                    <div class="mt-12 bg-gray-50 p-6 rounded-lg animate-fadeIn">
                        <div class="flex flex-col sm:flex-row items-center sm:items-start">
                            <img src="{{ asset('images/author.jpg') }}" alt="Author" class="w-20 h-20 rounded-full mb-4 sm:mb-0 sm:mr-6">
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Sarah Mensah</h4>
                                <p class="text-gray-600 mb-4">
                                    Sarah is a certified nutritionist with over 10 years of experience in the field of nutrition and health. She is passionate about educating people on the importance of whole foods and helping them make informed dietary choices.
                                </p>
                                <div class="flex space-x-4">
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
                    
                    <!-- Related Posts -->
                    <div class="mt-12 animate-fadeIn">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Related Articles</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Related Post 1 -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ asset('images/blog-6.jpg') }}" alt="Related Post" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h4 class="font-bold text-gray-900 mb-2">The Importance of Fiber in Your Diet</h4>
                                    <a href="{{ route('blog.show', 6) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Related Post 2 -->
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ asset('images/blog-4.jpg') }}" alt="Related Post" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h4 class="font-bold text-gray-900 mb-2">How to Build a Balanced Breakfast</h4>
                                    <a href="{{ route('blog.show', 4) }}" class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comments Section -->
                    <div class="mt-12 animate-fadeIn">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Comments (3)</h3>
                        
                        <!-- Comment 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                            <div class="flex items-start">
                                <img src="{{ asset('images/comment-1.jpg') }}" alt="Commenter" class="w-12 h-12 rounded-full mr-4">
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-2">
                                        <h4 class="font-bold text-gray-900">John Doe</h4>
                                        <span class="text-sm text-gray-600">June 16, 2023</span>
                                    </div>
                                    <p class="text-gray-700 mb-4">
                                        Great article! I've been trying to incorporate more whole grains into my diet, and this information is really helpful. I especially appreciate the tips on how to make simple substitutions.
                                    </p>
                                    <button class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                                        Reply
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                            <div class="flex items-start">
                                <img src="{{ asset('images/comment-2.jpg') }}" alt="Commenter" class="w-12 h-12 rounded-full mr-4">
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-2">
                                        <h4 class="font-bold text-gray-900">Jane Smith</h4>
                                        <span class="text-sm text-gray-600">June 17, 2023</span>
                                    </div>
                                    <p class="text-gray-700 mb-4">
                                        I've been using Ahavor's Premium Oats for a while now, and I can definitely attest to the benefits of whole grains. My energy levels have improved, and I feel more satisfied after meals. Thanks for the informative article!
                                    </p>
                                    <button class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                                        Reply
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                            <div class="flex items-start">
                                <img src="{{ asset('images/comment-3.jpg') }}" alt="Commenter" class="w-12 h-12 rounded-full mr-4">
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-2">
                                        <h4 class="font-bold text-gray-900">Michael Johnson</h4>
                                        <span class="text-sm text-gray-600">June 18, 2023</span>
                                    </div>
                                    <p class="text-gray-700 mb-4">
                                        I had no idea there were so many different types of whole grains! I've only ever used oats and brown rice, but now I'm excited to try some of the others mentioned in this article. Does Ahavor plan to expand its whole grain product line in the future?
                                    </p>
                                    <button class="text-ahavor-orange hover:text-ahavor-gold font-medium transition-colors">
                                        Reply
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment Form -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Leave a Comment</h4>
                            <form action="{{ route('comment.submit') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="post_id" value="1">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                        <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required>
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required>
                                    </div>
                                </div>
                                <div>
                                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Your Comment</label>
                                    <textarea id="comment" name="comment" rows="4" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="bg-ahavor-green hover:bg-ahavor-green/90 text-white font-medium py-2 px-6 rounded-md transition-colors">
                                        Post Comment
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Search -->
                    <div class="bg-white p-6 rounded-lg shadow-sm mb-8 animate-fadeIn">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Search</h3>
                        <form action="{{ route('blog.search') }}" method="GET" class="flex">
                            <input type="text" name="query" placeholder="Search articles..." class="flex-1 px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange">
                            <button type="submit" class="bg-ahavor-green hover:bg-ahavor-green/90 text-white px-4 py-2 rounded-r-md transition-colors">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    
                    <!-- Categories -->
                    <div class="bg-white p-6 rounded-lg shadow-sm mb-8 animate-fadeIn delay-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-ahavor-orange transition-colors">
                                    <span>Nutrition</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-ahavor-orange transition-colors">
                                    <span>Recipes</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-ahavor-orange transition-colors">
                                    <span>Health Tips</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs">6</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-ahavor-orange transition-colors">
                                    <span>Company News</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center text-gray-700 hover:text-ahavor-orange transition-colors">
                                    <span>Product Spotlight</span>
                                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Recent Posts -->
                    <div class="bg-white p-6 rounded-lg shadow-sm mb-8 animate-fadeIn delay-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Recent Posts</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <img src="{{ asset('images/blog-1-thumb.jpg') }}" alt="Recent Post" class="w-16 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">The Benefits of Whole Grains in Your Diet</h4>
                                    <p class="text-sm text-gray-600">June 15, 2023</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <img src="{{ asset('images/blog-2-thumb.jpg') }}" alt="Recent Post" class="w-16 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">5 Delicious Recipes Using Ahavor Oats</h4>
                                    <p class="text-sm text-gray-600">June 8, 2023</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <img src="{{ asset('images/blog-3-thumb.jpg') }}" alt="Recent Post" class="w-16 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Ahavor Foods Launches New Product Line</h4>
                                    <p class="text-sm text-gray-600">June 1, 2023</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <img src="{{ asset('images/blog-4-thumb.jpg') }}" alt="Recent Post" class="w-16 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">How to Build a Balanced Breakfast</h4>
                                    <p class="text-sm text-gray-600">May 25, 2023</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Tags -->
                    <div class="bg-white p-6 rounded-lg shadow-sm mb-8 animate-fadeIn delay-300">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Nutrition
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Whole Grains
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Health
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Diet
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Recipes
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Breakfast
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Oats
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Fiber
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Organic
                            </a>
                            <a href="#" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm transition-colors">
                                Natural
                            </a>
                        </div>
                    </div>
                    
                    <!-- Newsletter -->
                    <div class="bg-ahavor-green/10 p-6 rounded-lg shadow-sm animate-fadeIn delay-400">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Subscribe to Our Newsletter</h3>
                        <p class="text-gray-700 mb-4">
                            Stay updated with our latest articles and news.
                        </p>
                        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-4">
                            @csrf
                            <input type="email" name="email" placeholder="Your Email Address" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-ahavor-orange">
                            <button type="submit" class="w-full bg-ahavor-green hover:bg-ahavor-green/90 text-white font-medium py-2 px-4 rounded-md transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection