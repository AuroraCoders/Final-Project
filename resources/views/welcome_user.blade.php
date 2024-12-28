<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <!-- Include CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Add your custom CSS -->

    @stack('styles') <!-- For page-specific styles -->
       <style>
        .cart-sidebar {
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100%;
    background-color: #fff;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    padding: 20px;
    overflow-y: auto;
    transform: translateX(100%);
    transition: transform 0.3s ease;
}

.cart-sidebar.open {
    transform: translateX(0);
}

.cart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.cart-header h2 {
    margin: 0;
    font-size: 20px;
}

.cart-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
}

.cart-item img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    margin-right: 10px;
}

.cart-item-info {
    flex-grow: 1;
}

.cart-item-info p {
    margin: 5px 0;
}

.cart-item-quantity {
    display: flex;
    align-items: center;
}

.cart-item-quantity button {
    background-color: #f0f0f0;
    border: 1px solid #ddd;
    padding: 3px 8px;
    cursor: pointer;
    margin: 0 3px;
}

.cart-item-quantity input {
    width: 30px;
    text-align: center;
    border: 1px solid #ddd;
    padding: 3px;
}

.cart-item-remove {
    cursor: pointer;
    color: red;
    font-size: 16px;
}

.subtotal {
    text-align: right;
    font-size: 16px;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-right: 0;
}

.view-cart-btn {
    display: block;
    width: 90%;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 8px;
    text-decoration: none;
    border-radius: 5px;
    margin: 20px auto 0 auto;
}

.cart-footer {
    position: absolute;
    bottom: 20px;
    left: 0;
    width: 100%;
    padding: 0 20px;
    background-color: #fff;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 900;
    display: none;
}

.overlay.active {
    display: block;
}
       </style>
</head>

    

<body>
    <script>
        let cart = [];

function addToCart(button) {
    toggleCart();  // Open the cart sidebar when an item is added

    const product = button.parentElement;
    const name = product.getAttribute('data-name');
    const price = parseInt(product.getAttribute('data-price'));
    const image = product.getAttribute('data-image');

    // Ensure values are correctly retrieved
    if (!name || isNaN(price) || !image) {
        console.error("Product data missing");
        return;
    }

    const existingProductIndex = cart.findIndex(item => item.name === name);

    if (existingProductIndex > -1) {
        cart[existingProductIndex].quantity++;
    } else {
        cart.push({ name, price, image, quantity: 1 });
    }

    renderCart();
}

function renderCart() {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        cartItemsContainer.innerHTML += `
            <div class="cart-item">
                <img src="${item.image}" alt="${item.name}" width="50">
                <div class="cart-item-info">
                    <p>${item.name}</p>
                    <p>${item.quantity} × Rs ${item.price.toLocaleString()}</p>
                </div>
                <div class="cart-item-remove" onclick="removeFromCart(${index})">&times;</div>
            </div>
        `;
    });

    document.getElementById('cart-subtotal').innerText = `Subtotal: Rs ${total.toLocaleString()}`;
}

function changeQuantity(change, index) {
    cart[index].quantity = Math.max(1, cart[index].quantity + change);
    renderCart();
}

function toggleCart() {
    const cartSidebar = document.getElementById('cartSidebar');
    const overlay = document.getElementById('overlay');

    if (cartSidebar.classList.contains('open')) {
        cartSidebar.classList.remove('open');
        overlay.classList.remove('active');
    } else {
        cartSidebar.classList.add('open');
        overlay.classList.add('active');
    }
}

function removeFromCart(index) {
    cart.splice(index, 1);  // Remove item from cart
    renderCart();
}




    </script>
    <!-- Top Navbar -->
    <div class="navbar-top py-1 d-flex justify-content-center align-items-center px-3">
        <div class="social-icons">
            <a href="signup.html"><i class="fa-brands fa-facebook"></i></a>
            <a href="login.html"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
    <!-- Middle Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-middle py-3">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Fitoor Logo"> VintageVibes
        </a>
       
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
        
        

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link highlight" href="index.html" id="mid_headinds">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html" id="mid_headinds">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.html" id="mid_headinds">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" id="mid_headinds">Contact Us</a>
                </li>
               
            </ul>
            <div>
                <select class="currency-select" aria-label="Currency">
                    <option>(Rs) - PKR</option>

                </select>
                <a href="loginn.html" style="margin-left: 10px; color: black;"><i class="fa-regular fa-user"></i></a>
                <a href="checkout.html" style="margin-left: 10px; color: black;"><i class="fas fa-shopping-cart"></i> </a>
            </div>
        </div>
    </nav>

    <!-- Bottom Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-bottom">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavBottom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="painting.html" id="Bottom_headings">PAINTINGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirror.html" id="Bottom_headings">MIRRORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="scal.html" id="Bottom_headings">SCULPTURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="candle.html" id="Bottom_headings">CANDLE STANDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lamp.html" id="Bottom_headings">LAMP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vase.html" id="Bottom_headings">VASE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clock.html" id="Bottom_headings">ClOCKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fur.html" id="Bottom_headings">FURNITURE</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="mmm.png" class="d-block w-100" style="height: 910px;" alt="Home Accessories">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Home Accessories</h5>
                    
                    <p>The store is closed indefinitely due to ongoing construction at Qaddafi Stadium.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="mm4.webp" class="d-block w-100" alt="Living Room Decor">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Living Room Decor</h5>
                    
                    <p>Enhance your space with our modern living room collection.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="mm2.webp" class="d-block w-100" alt="Outdoor Furniture">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Outdoor Furniture</h5>
                    
                    <p>Comfort and style for your outdoor spaces.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Add Bootstrap JS Bundle with Popper -->
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Select the carousel
            var carouselElement = document.querySelector('#carouselExample');
    
            // Listen for the slide event to adjust the speed
            carouselElement.addEventListener('slide.bs.carousel', function () {
                document.querySelectorAll('.carousel-item').forEach(item => {
                    item.style.transitionDuration = '1.5s'; // Adjust the duration here (e.g., 1.5s)
                });
            });
        });
    </script>


    <div class="collection-header-container">
        <div class="collection-line-left"></div> <!-- Left line -->
        <div class="collection-header">
            <h4>Our Collections</h4>
            <h3>Home Decor</h3>
            <p>Express your personal style with our home accessories which combines contemporary design elements,
                classic style and affordability.</p>
        </div>
        <div class="collection-line-right"></div> <!-- Right line -->
    </div>



    <div class="trending-section">
        <h2 style="color: rgb(60, 134, 134); margin-left:10%">Trending Products </h2>
        
    </div>

    <div class="carousel-container">
        <div class="product-slider" id="productSlider">
            <div class="product-card">
                <div class="image-container">
                    <img src="cs3.jpeg" alt="Wooden Arched Cabinet">
                    <button class="add-to-cart" onclick="window.location.href='c3.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">Popular</span>
                </div>
                <div class="product-info">
                    <h3>Marble Candle Stands</h3>
                    <p>Cabinets & Chests</p>
                    <p>Rs 5,000</p>
                </div>
            </div>


            <!-- Card 2 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="V6.jpeg" alt="Green Ceramic Vase">
                    <button class="add-to-cart" onclick="window.location.href='v3.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">Popular</span>
                </div>
                <div class="product-info">
                    <h3>Green Ceramic Vase</h3>
                    
                    <p>Rs 7,000</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="cs1.jpeg" alt="Six Seater Round Wooden Dining Table">
                    <button class="add-to-cart" onclick="window.location.href='c1.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">Popular</span>
                </div>
                <div class="product-info">
                    <h3>Set Of 3 Gold Metal Taper Candle Stands</h3>
                    
                    <p>Rs 5,000</p>
                </div>
            </div>

            <!-- Additional cards go here (e.g., Card 4, Card 5, Card 6) -->

           
            <div class="product-card">
                <div class="image-container">
                    <img src="M4.jpeg" alt="Wooden Arched Cabinet" >
                    <button class="add-to-cart" onclick="window.location.href='m1.html'">Product Details</button>

                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">Popular</span>
                </div>
                <div class="product-info">
                    <h3>long White Frame Mirror</h3>
                    
                    <p>Rs 10,000</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="l2 (2).jpeg" alt="Wooden Sliding Doors Sideboard">
                    <button class="add-to-cart" onclick="window.location.href='l2.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>Tree of Light Lamp</h3>
                    
                    <p>Rs 175,000</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="s3.jpeg" alt="Six Seater Round Wooden Dining Table">
                    <<button class="add-to-cart" onclick="window.location.href='s3.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>Expressions of Creativity</h3>
                    
                    <p>Rs 13,700</p>
                </div>
            </div>
        </div>

        <!-- Pagination Dots -->
        <div class="pagination">
            <span class="dot active" onclick="showSlide(1)"></span>
            <span class="dot" onclick="showSlide(2)"></span>
           
            <!-- Add more dots as needed -->
        </div>
    </div>
    <div class="view-more-container">
        <button class="view-more-button" onclick="window.location.href='shop.html'">View More</button>
    </div>



    <br>
    <br>
    <br>

    <div class="trending-section">
        <h2 style="color:rgb(60, 134, 134); margin-left:10%">Best Selling Produts </h2>
        
    </div>

    <div class="carousel-container">
        <div class="product-slider" id="productSlider">
            <div class="product-card">
                <div class="image-container">
                    <img src="s1.jpeg" alt="Wooden Arched Cabinet">
                    <button class="add-to-cart" onclick="window.location.href='s1.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>Majestic Stag</h3>
                    <p>Rs 15,000</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="l7.jpeg" alt="Wooden Sliding Doors Sideboard">
                    <button class="add-to-cart" onclick="window.location.href='l1.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>Ferris wheel lamp</h3>
                    <p>Cabinets & Chests</p>
                    <p>Rs 175,000</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="cs2.jpeg" alt="Six Seater Round Wooden Dining Table">
                    <button class="add-to-cart" onclick="window.location.href='c2.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>ELM – Six Seater Round Wooden Dining Table</h3>
                    <p>Tables, Center Tables</p>
                    <p>Rs 100,000</p>
                </div>
            </div>

            <!-- Additional cards go here (e.g., Card 4, Card 5, Card 6) -->

            <div class="product-card">
                <div class="image-container">
                    <img src="t5.jpeg" alt="Wooden Arched Cabinet">
                    <button class="add-to-cart" onclick="window.location.href='m1.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>ESTEE – Wooden Arched Cabinet</h3>
                    <p>Cabinets & Chests</p>
                    <p>Rs 100,000</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="t2.jpeg" alt="Wooden Sliding Doors Sideboard">
                    <button class="add-to-cart" onclick="window.location.href='m1.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>ALP – Wooden Sliding Doors Sideboard</h3>
                    <p>Cabinets & Chests</p>
                    <p>Rs 175,000</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="product-card">
                <div class="image-container">
                    <img src="t4.jpeg" alt="Six Seater Round Wooden Dining Table">
                    <button class="add-to-cart" onclick="window.location.href='m1.html'">Product Details</button>
                    <span class="wishlist-icon">&#9825;</span>
                    <span class="badge">NEW</span>
                </div>
                <div class="product-info">
                    <h3>ELM – Six Seater Round Wooden Dining Table</h3>
                    <p>Tables, Center Tables</p>
                    <p>Rs 100,000</p>
                </div>
            </div>
        </div>


        <!-- Pagination Dots -->
        <div class="pagination">
            <span class="dot active" onclick="showSlide(1)"></span>
            <span class="dot" onclick="showSlide(2)"></span>
            <span class="dot" onclick="showSlide(3)"></span>
            <!-- Add more dots as needed -->
        </div>

    </div>
    <div class="view-more-container">
                <button class="view-more-button" onclick="window.location.href='shop.html'">View More</button>

    </div>
    <br>

    <div class="room-decor-container" >
        <!-- Main Image -->
        <img src="Room_D.jpg" alt="Room Decor" class="main-room-image">

        <!-- Hover Points -->
        <div class="hover-point" data-card="card1" style="top: 45%; left: 10%;"></div> <!-- Vase -->
        <div class="hover-point" data-card="card2" style="top: 25%; left: 69%;"></div> <!-- Lamp -->
        <div class="hover-point" data-card="card3" style="top: 60%; left: 60%;"></div> <!-- Chair -->

        <!-- Cards for each hover point -->
        <div class="info-card" id="card1" data-name="Lamp" data-price="12000" data-image="set.webp">
            <img src="set.webp" alt="Decorative Vase">
            <h5>Decorative Vase</h5>
            <p>Price: Rs 12,000</p>
            <button class="add-to-cart1" onclick="addToCart(this)">ADD TO CART</button>
        </div>


        <div class="info-card" id="card2"data-name="Lamp" data-price="15000" data-image="lamp.jpg">
            <img src="lamp.jpg" alt="Modern Floor Lamp">
            <h5>Modern Floor Lamp</h5>
            <p>Price: Rs 15,000</p>
            <button class="add-to-cart1" onclick="addToCart(this)">ADD TO CART</button>
        </div>


        <div class="info-card" id="card3" data-name="Chair" data-price="25000" data-image="chair.webp">
            <img src="chair.webp" alt="Comfortable Chair">
            <h5>Comfortable Chair</h5>
            
            <p>Price: Rs 25,000</p>
            <button class="add-to-cart1" onclick="addToCart(this)">ADD TO CART</button>
        </div>
    </div>

    
    <div class="slider">
        <!-- Left Arrow -->
        <div class="arrows left-arrow">
            &#8592;
        </div>
        
        <!-- Image Container -->
        <div class="image-container">
            <!-- Title on Top of Image -->
            <h4 class="title">Room Decor</h4>
            <img src="c1.jpeg" alt="Image 1" class="slider-image" id="sliderImage">
            
            <!-- Text Below the Image -->
            <div class="image-text" id="imageText">Stylish Wall Art - $49.99</div>
        </div>
        
        <!-- Right Arrow -->
        <div class="arrows right-arrow">
            &#8594;
        </div>
        
        
    </div>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="custom-design-section">
    <h2>Customize Designs</h2>
    <p>Decor Your Home with us with styles of your Choice</p>
    <div class="custom-design-container">
        <div class="steps-container">
            <div class="step">
                <img src="l4.jpeg" alt="Product Example 1" class="product-image">
                <p>Choose a product and customize it your way.</p>
            </div>
            <div class="design-options">
                <img src="l1.jpeg" alt="Design 1" class="design-option">
                <img src="cs3.jpeg" alt="Design 2" class="design-option">
                <img src="V4.jpeg" alt="Design 3" class="design-option">
                <img src="c7.jpeg" alt="Design 4" class="design-option">
                <img src="V8.jpeg" alt="Design 5" class="design-option">
                <img src="V5.jpeg" alt="Design 6" class="design-option">
                <img src="cs5.jpeg" alt="Design 7" class="design-option">
                <img src="c6.jpeg" alt="Design 8" class="design-option">
            </div>
            <div class="step">
                <img src="cs7.jpeg" alt="Customized Product" class="product-image">
                <p>Decor Your Home</p>
            </div>
        </div>
        <div class="info-container">
            <h3>Cutomize Decor Accessories</h3>
            <p>Choose your product and select a print from our designer collections. Fine workmanship and elegant finishing by our expert craftsmen ensuring durability.</p>
            <div class="gallery">
                <img src="cs7.jpeg" alt="Decor Tray 1" class="gallery-image">
                <img src="s6.jpeg" alt="Decor Tray 2" class="gallery-image">
            </div>
            <p class="b2b-text">Fully customized <strong>B2B</strong> solutions for corporate clients, contact us for details.</p>
            <p class="description-text">Whether you're looking for a nest of tables or a Mughal art tray, you're likely to find the ideal home accessories at Custom Creation. As the name suggests, the home decor accessories are designed for elegant personalized living, so our home decor items will stand the test of time.</p>
            <br><button class="view-more-button" onclick="window.location.href='https://forms.gle/3JTKx4u21LMu5K2a6'">Customize</button>

        </div>
    </div>
</section>
<br>
<br>
<br>
    <footer class="footer">
        <div class="footer-container">
            <!-- Footer Logo and Description -->
            <div class="footer-about">
                <img src="logo.png" alt="Logo" class="footer-logo">
                <p>Your go-to destination for premium home decor items that elevate your living space.</p>
            </div>
    
            <!-- Quick Links -->
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
    
            <!-- Contact Information -->
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>Email: support@homedecor.com</p>
                <p>Phone: +1 234 567 890</p>
                <p>Address: 123 Decor St, New York, NY</p>
            </div>
    
            <!-- Social Media Links -->
            <div class="footer-social" >
                <h3>Follow Us</h3>
                <a style="margin-left:15px;" href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a style="margin-left:15px;" href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a style="margin-left:15px;" href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Home Decor. All rights reserved.</p>
        </div>
    </footer>
    

<!-- Overlay and Cart Sidebar -->
<div class="overlay" id="overlay" onclick="toggleCart()"></div>

<div class="cart-sidebar" id="cartSidebar">
  <!-- Header with Close Button -->
  <div class="cart-header">
    <h2>Shopping Cart</h2>
    <button onclick="toggleCart()">&times; Close</button>
  </div>

  <!-- Dynamic Cart Items Container -->
  <div id="cart-items">
    <!-- JavaScript will populate items here -->
  </div>

  <!-- Footer with Subtotal and View Cart Button -->
  <div class="cart-footer">
    <div class="subtotal">
      <p id="cart-subtotal">Subtotal: Rs 0</p>
    </div>
    <a href="checkout.html" class="view-cart-btn"  onclick="proceedToCheckout()">Check out</a>
    
  </div>
</div>



    <script src="script.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

