@extends('layout') <!-- Assuming you have a main layout file -->

@section('content') <!-- This section will be populated with content for this page -->
<link href="{{ asset('css/category.css') }}" rel="stylesheet">

<!-- Header Section -->
<header>
    <div class="header-content">
        <small class="collection-title">Our Collections</small>
        <h1 class="main-title">Sculptures</h1>
        <small class="collection-title">"Enhance your space with our stylish, thoughtfully designed sculptures."</small>
    </div>
</header>

<!-- Product Section -->
<div class="product-section">
    <!-- Product 1 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s1.jpeg') }}" alt="Majestic Stag">
        </div>
        <div class="product-details">
            <small>Majestic Stag</small>
            <p class="product-price">PKR 15,000</p>
            <button class="product-button"><a href="{{'S1'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s2.jpeg') }}" alt="Harmony in Flight">
        </div>
        <div class="product-details">
            <small>Harmony in Flight</small>
            <p class="product-price">PKR 13,000</p>
            <button class="product-button"><a href="{{'S2'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s3.jpeg') }}" alt="Expressions of Creativity">
        </div>
        <div class="product-details">
            <small>Expressions of Creativity</small>
            <p class="product-price">PKR 13,700</p>
            <button class="product-button"><a href="{{'S3'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s6.jpeg') }}" alt="Eternal Circles">
        </div>
        <div class="product-details">
            <small>Eternal Circles</small>
            <p class="product-price">PKR 50,000</p>
            <button class="product-button"><a href="{{'S4'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s5.jpeg') }}" alt="Bonded Figures">
        </div>
        <div class="product-details">
            <small>Bonded Figures</small>
            <p class="product-price">PKR 30,000</p>
            <button class="product-button" onclick="window.open('{{ url('S5') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 6 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s7.jpeg') }}" alt="Noble Antlers">
        </div>
        <div class="product-details">
            <small>Noble Antlers</small>
            <p class="product-price">PKR 40,500</p>
            <button class="product-button" onclick="window.open('{{ url('S7') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s8.jpeg') }}" alt="Petal Grasp">
        </div>
        <div class="product-details">
            <small>Petal Grasp</small>
            <p class="product-price">PKR 10,000</p>
            <button class="product-button" onclick="window.open('{{ url('S8') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s9.jpeg') }}" alt="Blooming Thoughts">
        </div>
        <div class="product-details">
            <small>Blooming Thoughts</small>
            <p class="product-price">PKR 9,000</p>
            <button class="product-button" onclick="window.open('{{ url('S9') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 9 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s10.jpeg') }}" alt="Botanical Embrace">
        </div>
        <div class="product-details">
            <small>Botanical Embrace</small>
            <p class="product-price">PKR 17,000</p>
            <button class="product-button" onclick="window.open('{{ url('S10') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 10 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s11.jpeg') }}" alt="Golden Embrace">
        </div>
        <div class="product-details">
            <small>Golden Embrace</small>
            <p class="product-price">PKR 11,000</p>
            <button class="product-button" onclick="window.open('{{ url('S11') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 11 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s12.jpeg') }}" alt="Wings of Purity">
        </div>
        <div class="product-details">
            <small>Wings of Purity</small>
            <p class="product-price">PKR 12,000</p>
            <button class="product-button" onclick="window.open('{{ url('S12') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 12 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/s13.jpeg') }}" alt="Spiral Elegance">
        </div>
        <div class="product-details">
            <small>Spiral Elegance</small>
            <p class="product-price">PKR 16,000</p>
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
