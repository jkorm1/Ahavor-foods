<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahavor Foods - @yield('title', 'Home')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --deep-green: #0A5F38;
            --light-green: #1A7D4E;
            --yellow-gold: #F2C94C;
            --orange: #F2994A;
            --light-orange: #FFEAD5;
            --dark: #1E1E1E;
            --light: #F9F9F9;
            --gray: #6B7280;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header.scrolled {
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            transition: all 0.3s ease;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            transition: all 0.3s ease;
        }
        
        .header.scrolled .logo img {
            height: 40px;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--deep-green);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--yellow-gold);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .nav-links a.active {
            color: var(--deep-green);
        }
        
        .nav-links a.active::after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--dark);
        }
        
        .cta-button {
            background-color: var(--deep-green);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(10, 95, 56, 0.2);
        }
        
        .cta-button:hover {
            background-color: var(--light-green);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(10, 95, 56, 0.3);
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            margin-top: 0;
            padding-top: 80px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4));
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 600px;
        }
        
        .hero-subtitle {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            font-weight: 500;
            color: var(--yellow-gold);
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        .hero-title {
            font-size: 60px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: white;
        }
        
        .hero-description {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
        }
        
        .secondary-button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .secondary-button:hover {
            background-color: white;
            color: var(--deep-green);
            transform: translateY(-3px);
        }
        
        /* Section Styles */
        .section {
            padding: 100px 0;
            position: relative;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-subtitle {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: var(--deep-green);
            margin-bottom: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        .section-title {
            font-size: 42px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--yellow-gold);
        }
        
        .section-description {
            font-size: 18px;
            line-height: 1.6;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Products Section */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            z-index: 1;
        }
        
        .product-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(10, 95, 56, 0), rgba(10, 95, 56, 0.8));
            opacity: 0;
            transition: all 0.5s ease;
            z-index: 1;
            pointer-events: none;
        }
        
        .product-card:hover::before {
            opacity: 1;
        }
        
        .product-image {
            height: 250px;
            width: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .product-card:hover .product-image {
            transform: scale(1.1);
        }
        
        .product-image-container {
            position: relative;
            overflow: hidden;
        }
        
        .product-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--yellow-gold);
            color: var(--dark);
            padding: 8px 15px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 14px;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .product-content {
            padding: 25px;
            position: relative;
            z-index: 2;
        }
        
        .product-category {
            font-size: 14px;
            color: var(--deep-green);
            font-weight: 500;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .product-title {
            font-size: 22px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .product-card:hover .product-title {
            color: var(--yellow-gold);
        }
        
        .product-description {
            font-size: 15px;
            color: var(--gray);
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .product-price {
            font-size: 20px;
            font-weight: 700;
            color: var(--deep-green);
            margin-bottom: 20px;
        }
        
        .product-button {
            background-color: var(--deep-green);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }
        
        .product-button:hover {
            background-color: var(--light-green);
            transform: translateY(-3px);
        }
        
        /* About Section */
        .about-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }
        
        .about-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background-color: rgba(242, 201, 76, 0.1);
            z-index: 0;
        }
        
        .about-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background-color: rgba(10, 95, 56, 0.05);
            z-index: 0;
        }
        
        .about-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        .about-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .about-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .about-image-container:hover .about-image {
            transform: scale(1.05);
        }
        
        .about-content {
            padding: 30px;
        }
        
        .about-subtitle {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: var(--deep-green);
            margin-bottom: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        .about-title {
            font-size: 42px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .about-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: var(--yellow-gold);
        }
        
        .about-description {
            font-size: 16px;
            line-height: 1.8;
            color: var(--gray);
            margin-bottom: 30px;
        }
        
        .about-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .about-feature {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(10, 95, 56, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--deep-green);
            font-size: 20px;
            flex-shrink: 0;
        }
        
        .feature-text {
            font-weight: 500;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }
        
        .testimonials-container {
            position: relative;
            z-index: 1;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 30px;
            left: 30px;
            font-size: 120px;
            font-family: 'Playfair Display', serif;
            color: rgba(10, 95, 56, 0.1);
            line-height: 0;
            z-index: -1;
        }
        
        .testimonial-content {
            font-size: 16px;
            line-height: 1.8;
            color: var(--gray);
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .author-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--yellow-gold);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .author-info {
            display: flex;
            flex-direction: column;
        }
        
        .author-name {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .author-title {
            font-size: 14px;
            color: var(--gray);
        }
        
        .testimonial-rating {
            display: flex;
            gap: 5px;
            margin-top: 10px;
            color: var(--yellow-gold);
        }
        
        /* CTA Section */
        .cta-section {
            position: relative;
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(10, 95, 56, 0.9), rgba(10, 95, 56, 0.7));
            z-index: 1;
        }
        
        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .cta-title {
            font-size: 42px;
            margin-bottom: 20px;
        }
        
        .cta-description {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .cta-button-white {
            background-color: white;
            color: var(--deep-green);
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .cta-button-white:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--deep-green), var(--yellow-gold), var(--orange));
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 50px;
        }
        
        .footer-logo {
            margin-bottom: 20px;
        }
        
        .footer-logo img {
            height: 50px;
        }
        
        .footer-about {
            font-size: 15px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-link:hover {
            background-color: var(--yellow-gold);
            color: var(--dark);
            transform: translateY(-5px);
        }
        
        .footer-title {
            font-size: 20px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--yellow-gold);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .footer-links a:hover {
            color: var(--yellow-gold);
            transform: translateX(5px);
        }
        
        .footer-links a i {
            font-size: 14px;
        }
        
        .contact-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .contact-icon {
            color: var(--yellow-gold);
            font-size: 18px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            font-size: 14px;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 48px;
            }
            
            .section-title, .about-title, .cta-title {
                font-size: 36px;
            }
            
            .about-container {
                grid-template-columns: 1fr;
            }
            
            .about-image-container {
                order: -1;
            }
            
            .about-image {
                height: 400px;
            }
        }
        
        @media (max-width: 768px) {
            .header-inner {
                padding: 15px 0;
            }
            
            .nav-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-title {
                font-size: 36px;
            }
            
            .hero-description {
                font-size: 16px;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .section-title, .about-title, .cta-title {
                font-size: 30px;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
            
            .about-features {
                grid-template-columns: 1fr;
            }
        }
        
        /* Animation Classes */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .fade-in {
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        
        .fade-in.active {
            opacity: 1;
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .slide-in-left.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .slide-in-right.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .scale-in.active {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Blur Effect */
        .blur-load {
            filter: blur(10px);
            transition: filter 0.6s ease;
        }
        
        .blur-load.loaded {
            filter: blur(0);
        }
        
        /* Floating Animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .float {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Pulse Animation */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .pulse {
            animation: pulse 2s ease-in-out infinite;
        }
    </style>
    
    @yield('additional_styles')
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Ahavor Foods Logo">
                </div>
                
                <nav class="nav-links">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Products</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </nav>
                
                <a href="{{ route('products') }}" class="cta-button">Shop Now</a>
                
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-column">
                    <div class="footer-logo">
                        <img src="{{ asset('images/ahavor-logo-white.png') }}" alt="Ahavor Foods Logo">
                    </div>
                    <p class="footer-about">Ahavor Foods combines the Hebrew words for "love" and "light" to bring you nutritious, delicious food products made with care and passion.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="{{ route('products') }}"><i class="fas fa-chevron-right"></i> Products</a></li>
                        <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="{{ route('blog') }}"><i class="fas fa-chevron-right"></i> Blog</a></li>
                        <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Products</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Oat Products</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Tom Brown</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Cereal Mixes</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Nutritional Supplements</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Special Offers</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Contact Us</h3>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>123 Main Street, Accra, Ghana</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>+233 123 456 7890</div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>info@ahavorfoods.com</div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Ahavor Foods. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Header scroll effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.header').addClass('scrolled');
            } else {
                $('.header').removeClass('scrolled');
            }
        });
        
        // Mobile menu toggle
        $('.mobile-menu-btn').click(function() {
            $('.nav-links').slideToggle();
        });
        
        // Blur load effect for images
        document.addEventListener('DOMContentLoaded', function() {
            const blurImages = document.querySelectorAll('.blur-load');
            
            blurImages.forEach(img => {
                img.onload = function() {
                    img.classList.add('loaded');
                }
                
                if (img.complete) {
                    img.classList.add('loaded');
                }
            });
        });
    </script>
    
    @yield('additional_scripts')
</body>
</html>