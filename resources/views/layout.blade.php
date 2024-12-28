<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Middle Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-middle py-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="VintageVibes Logo"> VintageVibes
        </a>

        <div class="collapse navbar-collapse" id="navbarNav" style="margin-right:50px">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link highlight" href="{{ url('/') }}" id="mid_headinds">
                        <i class="fa-solid fa-house" style="margin-right:2px"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('shop') }}" id="mid_headinds">
                        <i class="fa-solid fa-shop" style="margin-right:2px"></i>Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}" id="mid_headinds">
                        <i class="fa-solid fa-address-book" style="margin-right:2px"></i>Contact Us
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                @if(Auth::check()) <!-- Check if the user is logged in -->
                    <span style="margin-right: 20px; color: black;">
                        Welcome, {{ Auth::user()->name }}
                    </span>
                    <a href="{{ route('logout') }}" 
                       style="margin-right: 20px; color: black;" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-sign-out-alt"></i> Logout
                    </a>
                    <!-- Logout Form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ url('register') }}" style="margin-right: 20px; color: black;">
                        <i class="fa-solid fa-user"></i> Register
                    </a>
                    <a href="{{ url('login') }}" style="margin-right: 20px; color: black;">
                        <i class="fa-solid fa-sign-in-alt"></i> Login
                    </a>
                @endif
                <a href="{{ url('cart') }}" style="margin-right: 5px; color: black;">
                    <i class="fa-solid fa-cart-plus"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
