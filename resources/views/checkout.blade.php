@extends('layout')

@section('title', 'Checkout')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Expressions of Creativity</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .cart-container {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            max-width: 1200px;
            margin: 50px auto;
        }

        .section-heading {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .billing-details .form-group {
            margin-bottom: 20px;
        }

        .billing-details .form-group label {
            font-weight: 600;
            color: #555;
        }

        .billing-details .form-control {
            padding: 12px;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .billing-details .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .order-summary {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .cart-items-wrapper {
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .cart-item-name {
            font-size: 1.1rem;
            font-weight: 500;
            color: #333;
        }

        .cart-item-price {
            font-size: 1.1rem;
            font-weight: 600;
            color: #e74c3c;
        }

        .order-details {
            margin-top: 20px;
        }

        .order-row {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .order-row p {
            font-size: 1rem;
            color: #333;
        }

        .payment-method select {
            padding: 12px;
            font-size: 1rem;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            width: 100%;
            margin-top: 10px;
        }

        .payment-method select:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .checkout-btn {
            background-color: #3498db;
            color: white;
            padding: 15px 25px;
            font-size: 1.2rem;
            border-radius: 8px;
            width: 100%;
            margin-top: 20px;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #2980b9;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-md-6 {
            background-color: lavender;
            padding: 20px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .cart-container {
                padding: 20px;
            }

            .section-heading {
                font-size: 1.5rem;
            }

            .checkout-btn {
                font-size: 1rem;
            }

            .order-summary {
                margin-top: 20px;
            }

            .order-row {
                padding: 10px 0;
            }

            .row {
                flex-direction: column;
                align-items: center;
            }

            .col-md-6 {
                width: 100%;
                margin-bottom: 20px;
            }
            
        }

        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container cart-container" style="height:750px;margin-left:250px; width:1000px;margin-top:5px;">
        <div class="row">
            <div class="col-md-6">
                <div class="billing-details">
                    <h3 class="section-heading">Billing Details</h3>
                    <form action="{{ route('send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="postal-code">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" name="postal-code" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>
                </div>
            </div>

            <div class="col-md-6" style="width:450px;">
                <div class="order-summary">
                    <h3 class="section-heading">Order Summary</h3>

                    <div class="cart-items-wrapper" style="margin-top:0;">
                        @foreach($cartItems as $cartItem)
                        <div class="cart-item" style="padding-bottom: 10px;">
                            <div class="cart-item-details">
                                <p class="cart-item-name" style="margin-bottom: 5px;">{{ $cartItem->product_name }}</p>
                                <p class="cart-item-price" style="margin-bottom: 5px;">PKR {{ number_format($cartItem->product_price, 2) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="order-details" style="margin-top: 10px;">
                        <div class="order-row" style="padding-top: 5px; padding-bottom: 5px;">
                            <p style="margin-bottom: 5px;"><strong>Subtotal:</strong> PKR {{ number_format($totalPrice, 2) }}</p>
                        </div>

                        <div class="order-row" style="padding-top: 5px; padding-bottom: 5px;">
                            <p style="margin-bottom: 5px;"><strong>Shipping Charges:</strong> PKR 200.00</p>
                        </div>

                        <div class="order-row" style="padding-top: 5px; padding-bottom: 5px;">
                            <p style="margin-bottom: 5px;"><strong>Total:</strong> PKR {{ number_format($totalPrice + 200, 2) }}</p>
                        </div>

                        <div class="payment-method" style="margin-top: 10px;">
                            <label for="payment-method">Payment Method</label>
                            <select class="form-control" id="payment-method" name="payment_method" required style="margin-bottom: 5px;margin-top: 0px; height:50px;">
                                <option value="cod">Cash on Delivery (COD)</option>
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                            </select>
                        </div>

                        <button type="submit" class="checkout-btn" style="margin-top: 10px;">Place Order</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
<hr style="border: 1px dashed gray;">

<div id="map"></div>
<button style="margin-left:100px;" onclick="showMap(33.7463, 72.8397)">Show Map</button>
<hr style="border: 1px dashed gray;">

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    function showMap(lat, lng) {
        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([lat, lng]).addTo(map)
            .bindPopup('Location')
            .openPopup();
    }
</script>

@endsection
