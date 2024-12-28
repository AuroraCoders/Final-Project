@extends('layout')

@section('title', 'Your Cart')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Expressions of Creativity</title>
    <!-- Google Fonts and FontAwesome CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Cart Container */
        .cart-container {
            padding: 40px 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 50px auto;
            font-size: 1.1rem;
        }

        /* Centering the h2 Heading */
        h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 2rem;
            font-weight: 600;
            color: #333;
        }

        /* Cart Items Wrapper */
        .cart-items-wrapper {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
        }

        /* Cart Items */
        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }

        .cart-item {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: #fafafa;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            width: 100%;
            padding: 20px;
        }

        .cart-item:hover {
            transform: scale(1.02);
        }

        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
        }

        .cart-item-description {
            font-size: 1rem;
            color: #777;
            margin: 10px 0;
        }

        .cart-item-price {
            font-size: 1.2rem;
            color: #e74c3c;
            font-weight: 600;
        }

        .remove-item {
            background-color: transparent;
            color: #e74c3c;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .remove-item:hover {
            color: #c0392b;
        }

        .total-price {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin-top: 30px;
            color: #333;
        }

        .checkout-btn {
            background-color: #2C3E50;
            color: white;
            padding: 12px 20px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 30px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #34495e;
        }

        /* Custom Scrollbar */
        .cart-items-wrapper::-webkit-scrollbar {
            width: 10px;
        }

        .cart-items-wrapper::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .cart-items-wrapper::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cart-item img {
                height: 80px;
                width: 80px;
            }

            .cart-item-details {
                padding-left: 15px;
            }
        }
    </style>
</head>

<body>
<h2 style="margin-top:20px;">Your Cart</h2>

<div class="container cart-container">
    
    @if ($cartItems->isEmpty())
        <p class="text-center">Your cart is empty. Add some items to your cart!</p>
    @else
        <div class="cart-items-wrapper">
            <div class="cart-items">
                @foreach($cartItems as $cartItem)
                <div class="cart-item">
                    <!-- Product Image -->
                    <img src="{{ asset('images/' . $cartItem->product_image) }}" alt="Product Image">

                    <div class="cart-item-details">
                        <p class="cart-item-name">{{ $cartItem->product_name }}</p>
                        <p class="cart-item-description">{{ $cartItem->product_description }}</p>
                        <p class="cart-item-price">PKR {{ number_format($cartItem->product_price, 2) }}</p>
                    </div>

                    <!-- Remove Item Button (Cross Icon) -->
                    <form action="{{ route('removeFromCart', ['id' => $cartItem->id]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="remove-item"><i class="fas fa-times"></i></button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

        
    @endif
</div>
<div class="total-price">
            <p>Subtotal: PKR {{ number_format($totalPrice, 2) }}</p>
        </div>

        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <center>
            <button type="submit" class="checkout-btn" style="width:300px;margin-bottom:20px;">Proceed to Checkout</button>
            </center>
            
        </form>
</body>
@endsection
