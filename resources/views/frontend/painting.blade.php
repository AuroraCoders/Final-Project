@extends('layout') <!-- Assuming you have a main layout file -->

@section('content') <!-- This section will be populated with content for this page -->

<link href="{{ asset('css/category.css') }}" rel="stylesheet">
  

<!-- Header Section -->
<header>
    <div class="header-content">
        <small class="collection-title">Our Collections</small>
        <h1 class="main-title">Paintings</h1>
        <small class="collection-title">"Enhance your space with our stylish, thoughtfully designed paintings."</small>
    </div>
</header>

<!-- Product Section -->
<div class="product-section">
    <!-- Product 1 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/p1.png') }}" alt="Product 1">
        </div>
        <div class="product-details">
            <small>Lunar Whispers</small>
            <p class="product-price">PKR 15,000</p>
            <button class="product-button"><a href="{{'P1'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/p2.png') }}" alt="Product 2">
        </div>
        <div class="product-details">
            <small>Butterfly Symphony</small>
            <p class="product-price">PKR 13,000</p>
            <button class="product-button"><a href="{{'P2'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>
    <div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p4.png') }}" alt="Product 4">
    </div>
    <div class="product-details">
        <small>Lavender Dreams</small>
        <p class="product-price">PKR 50,000</p>
        <button class="product-button"><a href="{{'P3'}}" style="color:white;text-decoration:none">View Product</a></button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p5.png') }}" alt="Product 5">
    </div>
    <div class="product-details">
        <small>Azure Blossoms</small>
        <p class="product-price">PKR 30,000</p>
        <button class="product-button"><a href="{{'P4'}}" style="color:white;text-decoration:none">View Product</a></button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p6.png') }}" alt="Product 6">
    </div>
    <div class="product-details">
        <small>Golden Leaves on Midnight</small>
        <p class="product-price">PKR 40,500</p>
        <button class="product-button">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p7.png') }}" alt="Product 7">
    </div>
    <div class="product-details">
        <small>Golden Veins</small>
        <p class="product-price">PKR 10,000</p>
        <button class="product-button">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p8.png') }}" alt="Product 8">
    </div>
    <div class="product-details">
        <small>Lily Serenity</small>
        <p class="product-price">PKR 9,000</p>
        <button class="product-button">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p9.png') }}" alt="Product 9">
    </div>
    <div class="product-details">
        <small>Golden Solitude</small>
        <p class="product-price">PKR 17,000</p>
        <button class="product-button">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p10.png') }}" alt="Product 10">
    </div>
    <div class="product-details">
        <small>Majestic Companions</small>
        <p class="product-price">PKR 11,000</p>
        <button class="product-button">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p11.png') }}" alt="Product 11">
    </div>
    <div class="product-details">
        <small>Golden Bloom Elegance</small>
        <p class="product-price">PKR 12,000</p>
        <button class="product-button">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/p12.png') }}" alt="Product 12">
    </div>
    <div class="product-details">
        <small>Beauty with Flowers</small>
        <p class="product-price">PKR 16,000</p>
        <button class="product-button">View Product</button>
    </div>
</div>


    <!-- Add more products similarly -->

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

@endsection <!-- End of content section -->
