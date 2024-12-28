@extends('layout') <!-- Assuming you have a main layout file -->

@section('content') <!-- This section will be populated with content for this page -->
<link href="{{ asset('css/category.css') }}" rel="stylesheet">

<!-- Header Section -->
<header>
    <div class="header-content">
        <small class="collection-title">Our Collections</small>
        <h1 class="main-title">VASES</h1>
        <small class="collection-title">"Enhance your space with our stylish, thoughtfully designed Vases."</small>
    </div>
</header>

<!-- Product Section -->
<div class="product-section">
    <!-- Product 1 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V1.jpeg') }}" alt="Majestic Stag">
        </div>
        <div class="product-details">
            <small>Glass Aesthetic vase</small>
            <p class="product-price">PKR 5,000</p>
            <button class="product-button"><a href="{{'v1'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V2.jpeg') }}" alt="Harmony in Flight">
        </div>
        <div class="product-details">
            <small>White Ceramic Vase</small>
            <p class="product-price">PKR 5,500</p>
            <button class="product-button"><a href="{{'v2'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V3.jpeg') }}" alt="Expressions of Creativity">
        </div>
        <div class="product-details">
            <small>Azure Bloom</small>
            <p class="product-price">PKR 1,700</p>
            <button class="product-button"><a href="{{'v3'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V4.jpeg') }}" alt="Eternal Circles">
        </div>
        <div class="product-details">
            <small>Obsidian Grace</small>
            <p class="product-price">PKR 5,000</p>
            <button class="product-button"><a href="{{'S4'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V5.jpeg') }}" alt="Bonded Figures">
        </div>
        <div class="product-details">
            <small>Unity Trio</small>
            <p class="product-price">PKR 3,500</p>
            <button class="product-button" onclick="window.open('{{ url('S5') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 6 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V6.jpeg') }}" alt="Noble Antlers">
        </div>
        <div class="product-details">
            <small>Verdant Majesty</small>
            <p class="product-price">PKR 4,500</p>
            <button class="product-button" onclick="window.open('{{ url('S7') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V7.jpeg') }}" alt="Petal Grasp">
        </div>
        <div class="product-details">
            <small>Minimal Muse</small>
            <p class="product-price">PKR 3,000</p>
            <button class="product-button" onclick="window.open('{{ url('S8') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V8.jpeg') }}" alt="Blooming Thoughts">
        </div>
        <div class="product-details">
            <small>Echoing Elegance</small>
            <p class="product-price">PKR 9,000</p>
            <button class="product-button" onclick="window.open('{{ url('S9') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 9 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V9.jpeg') }}" alt="Botanical Embrace">
        </div>
        <div class="product-details">
            <small>Blush Serenity</small>
            <p class="product-price">PKR 7,000</p>
            <button class="product-button" onclick="window.open('{{ url('S10') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 10 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V10.jpeg') }}" alt="Golden Embrace">
        </div>
        <div class="product-details">
            <small>Amber Whisper</small>
            <p class="product-price">PKR 6,000</p>
            <button class="product-button" onclick="window.open('{{ url('S11') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 11 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V11.jpeg') }}" alt="Wings of Purity">
        </div>
        <div class="product-details">
            <small>Lily Cascade</small>
            <p class="product-price">PKR 4,000</p>
            <button class="product-button" onclick="window.open('{{ url('S12') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 12 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/V12.jpeg') }}" alt="Spiral Elegance">
        </div>
        <div class="product-details">
            <small>Cerulean Charm</small>
            <p class="product-price">PKR 6,000</p>
            <button class="product-button" onclick="window.open('{{ url('S13') }}', '_blank')">View Product</button>
        </div>
    </div>
</div>
<footer class="footer" style="height: 300px;" >
    <div class="footer-left">
        <img src="{{ asset('images/logo.png') }}" alt="Home Decor Logo" class="footer-logo" style="height: 150px;">
    </div>
    <div class="footer-center">
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('shop') }}">Shop</a> 
    </div>
    <div class="footer-right">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a>
        <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
</footer>
@endsection
