@extends('layout') <!-- Assuming you have a main layout file -->

@section('content') <!-- This section will be populated with content for this page -->
<link href="{{ asset('css/category.css') }}" rel="stylesheet">

<!-- Header Section -->
<header>
    <div class="header-content">
        <small class="collection-title">Our Collections</small>
        <h1 class="main-title">Furniture</h1>
        <small class="collection-title">"Enhance your space with our stylish, thoughtfully designed Furniture."</small>
    </div>
</header>

<!-- Product Section -->
<div class="product-section">
    <!-- Product 1 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f1.jpeg') }}" alt="Pink Velvet Armchair">
        </div>
        <div class="product-details">
            <small>Pink Velvet Armchair</small>
            <p class="product-price">PKR 25,000</p>
            <button class="product-button" ><a href="{{'F1'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f2.jpeg') }}" alt="Orange Modern Lounge Chair">
        </div>
        <div class="product-details">
            <small >Orange Lounge Chair</small>
            <p class="product-price">PKR 43,000</p>
            <button class="product-button" ><a href="{{'F2'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f3.jpeg') }}" alt="Wooden Nesting Coffee Tables">
        </div>
        <div class="product-details">
            <small >Wooden Coffee Tables</small>
            <p class="product-price">PKR 13,700</p>
            <button class="product-button" ><a href="{{'F3'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f4.jpeg') }}" alt="Wooden Side Table">
        </div>
        <div class="product-details">
            <small>Wooden Side Table</small>
            <p class="product-price">PKR 50,000</p>
            <button class="product-button" ><a href="{{'F4'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f5.jpeg') }}" alt="Blue Upholstered Armchairs">
        </div>
        <div class="product-details">
            <small>Blue Upholstered Armchairs</small>
            <p class="product-price">PKR 30,000</p>
            <button class="product-button" onclick="window.open('{{ url('F5') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 6 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f6.jpeg') }}" alt="Modular Cream Sofa">
        </div>
        <div class="product-details">
            <small>Modular Cream Sofa</small>
            <p class="product-price">PKR 200,500</p>
            <button class="product-button" onclick="window.open('{{ url('F6') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f7.jpeg') }}" alt="Round Pedestal Table">
        </div>
        <div class="product-details">
            <small>Round Pedestal Table</small>
            <p class="product-price">PKR 10,000</p>
            <button class="product-button" onclick="window.open('{{ url('F7') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f8.jpeg') }}" alt="Lower Coffee Table">
        </div>
        <div class="product-details">
            <small>Lower Coffee Table</small>
            <p class="product-price">PKR 9,000</p>
            <button class="product-button" onclick="window.open('{{ url('F8') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 9 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f9.jpeg') }}" alt="Hanging Chair">
        </div>
        <div class="product-details">
            <small>Hanging Chair</small>
            <p class="product-price">PKR 17,000</p>
            <button class="product-button" onclick="window.open('{{ url('F9') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 10 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f10.jpeg') }}" alt="Light-colored Armchair">
        </div>
        <div class="product-details">
            <small>Light-colored Armchair</small>
            <p class="product-price">PKR 11,000</p>
            <button class="product-button" onclick="window.open('{{ url('F10') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 11 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f11.jpeg') }}" alt="Dark Cabinet">
        </div>
        <div class="product-details">
            <small>Dark Cabinet</small>
            <p class="product-price">PKR 12,000</p>
            <button class="product-button" onclick="window.open('{{ url('F11') }}', '_blank')">View Product</button>
        </div>
    </div>

    <!-- Product 12 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/f12.jpeg') }}" alt="White Console Table">
        </div>
        <div class="product-details">
            <small>White Console Table</small>
            <p class="product-price">PKR 30,000</p>
            <button class="product-button" onclick="window.open('{{ url('F12') }}', '_blank')">View Product</button>
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
