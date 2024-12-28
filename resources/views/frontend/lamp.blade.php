@extends('layout') <!-- Assuming you have a main layout file -->

@section('content') <!-- This section will be populated with content for this page -->
<link href="{{ asset('css/category.css') }}" rel="stylesheet">

<!-- Header Section -->
<header>
    <div class="header-content">
        <small class="collection-title">Our Collections</small>
        <h1 class="main-title">Lamps</h1>
        <small class="collection-title">"Enhance your space with our stylish, thoughtfully designed lamps."</small>
    </div>
</header>

<!-- Product Section -->
<div class="product-section">
    <!-- Product 1 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/l7.jpeg') }}" alt="Ferris wheel lamp">
        </div>
        <div class="product-details">
            <small>Ferris wheel lamp</small>
            <p class="product-price">PKR 15,000</p>
            <button class="product-button" ><a href="{{'L1'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/l2 (2).jpeg') }}" alt="Tree of Light Lamp">
        </div>
        <div class="product-details">
            <small>Tree of Light Lamp</small>
            <p class="product-price">PKR 13,000</p>
            <button class="product-button" ><a href="{{'L2'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="product-item">
        <div class="product-image">
            <img src="{{ asset('images/l3.jpeg') }}" alt="Cyclic Wheel Lamp">
        </div>
        <div class="product-details">
            <small>Cyclic Wheel Lamp</small>
            <p class="product-price">PKR 13,700</p>
            <button class="product-button" ><a href="{{'L3'}}" style="color:white;text-decoration:none">View Product</a></button>
        </div>
    </div>
    <div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l4.jpeg') }}" alt="Bonsai Tree Lamp">
    </div>
    <div class="product-details">
        <small>Bonsai Tree Lamp</small>
        <p class="product-price">PKR 50,000</p>
        <button class="product-button" ><a href="{{'L4'}}" style="color:white;text-decoration:none">View Product</a></button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l5.jpeg') }}" alt="Lotus Flower Lamp">
    </div>
    <div class="product-details">
        <small>Lotus Flower Lamp</small>
        <p class="product-price">PKR 30,000</p>
        <button class="product-button" onclick="window.open('{{ url('L5') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l6.jpeg') }}" alt="Birds on Branch Floor Lamp">
    </div>
    <div class="product-details">
        <small>Birds on Branch Floor Lamp</small>
        <p class="product-price">PKR 40,500</p>
        <button class="product-button" onclick="window.open('{{ url('L6') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l1.jpeg') }}" alt="Reading Lamp with Book Stand">
    </div>
    <div class="product-details">
        <small>Reading Lamp with Book Stand</small>
        <p class="product-price">PKR 10,000</p>
        <button class="product-button" onclick="window.open('{{ url('L1') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l8.jpeg') }}" alt="Vintage Streetlight Mini Lamps">
    </div>
    <div class="product-details">
        <small>Vintage Streetlight Mini Lamps</small>
        <p class="product-price">PKR 9,000</p>
        <button class="product-button" onclick="window.open('{{ url('L8') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l1 (2).jpeg') }}" alt="Glowing Moon Lamp">
    </div>
    <div class="product-details">
        <small>Glowing Moon Lamp</small>
        <p class="product-price">PKR 17,000</p>
        <button class="product-button" onclick="window.open('{{ url('L1_2') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l2.jpeg') }}" alt="Globe Lamp">
    </div>
    <div class="product-details">
        <small>Globe Lamp</small>
        <p class="product-price">PKR 11,000</p>
        <button class="product-button" onclick="window.open('{{ url('L2') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l11.jpeg') }}" alt="Cube Lamp">
    </div>
    <div class="product-details">
        <small>Cube Lamp</small>
        <p class="product-price">PKR 12,000</p>
        <button class="product-button" onclick="window.open('{{ url('L11') }}', '_blank')">View Product</button>
    </div>
</div>

<div class="product-item">
    <div class="product-image">
        <img src="{{ asset('images/l0.jpeg') }}" alt="Slatted Lamp">
    </div>
    <div class="product-details">
        <small>Slatted Lamp</small>
        <p class="product-price">PKR 16,000</p>
        <button class="product-button" onclick="window.open('{{ url('L0') }}', '_blank')">View Product</button>
    </div>
</div>

    <!-- Add more product items as needed -->

</div>

<!-- Footer Section -->
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
