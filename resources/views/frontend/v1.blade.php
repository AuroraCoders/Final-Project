@extends('layout')

@section('title', 'Home Decor')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Expressions of Creativity</title>
    <!-- Google Fonts and FontAwesome CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        /* Centering image and text */
        .product-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px;
            text-align: center;
            margin-top:50px;
            height:700px;
            padding-bottom: 80px; /* Add extra padding at the bottom */
        }

        .product-image {
            width: 300px;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .product-title {
            font-size: 2rem;
            font-weight: 500;
            color: #2C3E50;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.6rem;
            color: rgb(174, 111, 39);
            margin: 20px 0; /* Add margin for better spacing */
        }

        .product-rating {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-rating i {
            font-size: 1.5rem;
            color: #ccc;
            margin: 0 2px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .product-rating i.active {
            color: #f39c12;
        }

        .wishlist {
            background-color: #c5400b;
            color: #fff;
            padding: 10px 20px;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px; /* Add margin for better spacing */
        }

        .wishlist:hover {
            background-color: #c20a0a;
        }
    </style>
</head>

<body>
<br>
<br>
    <!-- Product Container -->
    <div class="container product-container">
        <!-- Centered Image -->
        <img src="{{ asset('images/V1.jpeg') }}" alt="Product Image" class="product-image" id="productImage">

        <!-- Centered Text -->
        <p class="product-title">Majestic Stag</p>
        <p class="product-description" style="font-size: 1rem; color: #7F8C8D; margin-top: 10px;">
            This beautiful decor piece combines modern design with artistic flair, perfect for enhancing your living space. Its elegant finish and intricate details make it a standout addition to your home or office.
        </p>

        <!-- Rating -->
        <div class="product-rating" id="ratingContainer">
            <i class="fas fa-star" data-value="1"></i>
            <i class="fas fa-star" data-value="2"></i>
            <i class="fas fa-star" data-value="3"></i>
            <i class="fas fa-star" data-value="4"></i>
            <i class="fas fa-star" data-value="5"></i>
        </div>
        <p id="ratingValue" style="font-size: 1.2rem; color: #7F8C8D;">Rate this product</p>

        <!-- Price -->
        <p class="product-price">PKR 5,000</p>

        <!-- Add to Cart Button -->
        <form action="{{ route('addToCart') }}" method="POST">
            @csrf
            <input type="hidden" name="product_name" value="Majestic Stag">
            <input type="hidden" name="product_description" value="This beautiful decor piece combines modern design with artistic flair, perfect for enhancing your living space. Its elegant finish and intricate details make it a standout addition to your home or office.">
            <input type="hidden" name="product_price" value="15000">
            <input type="hidden" name="product_image" value="s1.jpeg">
            <button type="submit" class="wishlist">Add To Cart</button>
        </form>
    </div>
    <br>
    <br>

    <!-- Footer -->
    <footer class="footer" style="height: 300px; background-color: #2C3E50; color: white; text-align: center; padding: 20px;">
        <div class="footer-left">
            <img src="{{ asset('images/logo.png') }}" alt="Home Decor Logo" class="footer-logo" style="height: 150px;">
        </div>
        <div class="footer-center">
            <a href="{{ route('home') }}" style="color: white;">Home</a> |
            <a href="{{ route('shop') }}" style="color: white;">Shop</a>
        </div>
        <div class="footer-right">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a>
            <a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>

    <!-- JavaScript for Ratings -->
    <script>
        const stars = document.querySelectorAll(".product-rating i");
        const ratingValue = document.getElementById("ratingValue");

        stars.forEach(star => {
            star.addEventListener("click", () => {
                const rating = star.getAttribute("data-value");

                // Highlight selected stars
                stars.forEach(s => {
                    s.classList.remove("active");
                    if (s.getAttribute("data-value") <= rating) {
                        s.classList.add("active");
                    }
                });

                // Update the rating value text
                ratingValue.textContent = `You rated this product ${rating} out of 5`;
            });
        });
    </script>
</body>

@endsection
