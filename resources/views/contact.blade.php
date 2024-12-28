@extends('layout')

@section('title', 'Contact Us')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Expressions of Creativity</title>
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

        /* Contact Us Page Container */
        .contact-us-container {
            padding: 50px 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 50px auto;
        }

        /* Centering the Heading */
        h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .contact-item {
            flex: 1;
            background-color: #fafafa;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            min-width: 300px; /* Set minimum width to avoid collapse */
        }

        .contact-item h5 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .contact-item p {
            font-size: 1rem;
            color: #777;
            margin: 10px 0;
        }

        .contact-item input, .contact-item textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .contact-item textarea {
            height: 80px;
        }

        .submit-btn, .call-btn {
            background-color: #2C3E50;
            color: white;
            padding: 12px 20px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover, .call-btn:hover {
            background-color: #34495e;
        }

        /* Call Us Button */
        .call-btn {
            margin-top: 15px;
            background-color: #27ae60;
        }

        /* Contact Info Section */
        .contact-info {
            flex: 1;
            background-color: #fafafa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .contact-info h5 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }

        .contact-info .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-info .info-item i {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #2C3E50;
        }

        .contact-info .info-item p {
            font-size: 1rem;
            color: #777;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
            }

            .contact-item {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .contact-info {
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
<h2 class="text-center" style="margin-top:50px;">Contact Us</h2>
<div class="container contact-us-container" style=" height:600px;margin-top:20px;">
    <div class="contact-section" >
        <!-- Contact Form Section -->
        <div class="contact-item" >
            <h5 style="margin-bottom:0px;">Get in Touch</h5>
            <form action="" method="POST">
                @csrf
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>

        <!-- Contact Information Section -->
        <div class="contact-info"  style="margin-top:100px;">
            <h5>Our Office</h5>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>123 Vintage Vibe St., Islamabad, Pakistan</p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone-alt"></i>
                <p>+123 456 7890</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <p>contact@VintageVibe.com</p>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
