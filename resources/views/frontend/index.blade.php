@extends('layout')

@section('title', 'Home Decor')

@section('content')


<!-- Include necessary styles -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/Styles.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

      <div class ="chat">
      <a href="https://wa.me/+923117175082?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
    <img src="{{url('images/wat.jpg')}}" alt="wattsapp" style="height:50px; width:50px; bottom:20px; left:20px; position:fixed; z-index:1000;">
</a>

<div>

<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/mmm.png') }}" class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Home Accessories">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-none d-md-block">
                <h5 class="carousel-title" style="margin-top:80px">Home Accessories</h5>
                <p class="carousel-description">The store is closed indefinitely due to ongoing construction at Qaddafi Stadium.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/mm4.webp') }}" class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Living Room Decor">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-none d-md-block">
                <h5 class="carousel-title" style="margin-top:80px">Living Room Decor</h5>
                <p class="carousel-description">Enhance your space with our modern living room collection.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/mm2.webp') }}" class="d-block w-100" style="height: 550px; object-fit: cover;" alt="Outdoor Furniture">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-none d-md-block">
                <h5 class="carousel-title" style="margin-top:80px">Outdoor Furniture</h5>
                <p class="carousel-description">Comfort and style for your outdoor spaces.</p>
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

 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/676a211449e2fd8dfefccacc/1ifr92e4u';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->


<!--Category-->

<div class="collection-header-container">
        <div class="collection-line-left"></div>
        <div class="collection-header">
            <h3>Our Categories</h3>
            <p>HAVE A LOOK AT PRODUCT CATALOGUE</p>
        </div>
        <div class="collection-line-right"></div>
    </div>


    
    <!-- Category Cards Section -->
    <div class="row">
        <!-- Category 1 -->
        <div class="col-md-3">
            <div class="category-card">
                <img src="{{ asset('images/p4.png') }}" alt="Paintings" style="height:260px">
                <div class="overlay">
                    <p>Category</p>
                    <h5>PAINTINGS</h5>
                    <button class="btn btn-light mt-2"><a  href="{{ 'painting' }}" style="color:black;text-decoration:none;">Explore</a></button>
                </div>
            </div>
        </div>

        <!-- Category 2 -->
        <div class="col-md-3">
            <div class="category-card">
                <img src="{{ asset('images/l4.jpeg') }}" alt="Drawings" style="height:260px">
                <div class="overlay">
                    <p>Category</p>
                    <h5>LAMPS</h5>
                    <button class="btn btn-light mt-2"><a  href="{{ 'lamp' }}" style="color:black; text-decoration:none;">Explore</a></button>
                </div>
            </div>
        </div>

        <!-- Category 3 -->
        <div class="col-md-3">
            <div class="category-card">
                <img src="{{ asset('images/f5.jpeg') }}" alt="Mandalas" style="height:260px">
                <div class="overlay">
                    <p>Category</p>
                    <h5>FURNITURE</h5>
                    <button class="btn btn-light mt-2"><a  href="{{ 'furniture' }}" style="color:black;text-decoration:none;">Explore</a></button>
                </div>
            </div>
        </div>

        <!-- Category 4 -->
        <div class="col-md-3">
            <div class="category-card">
                <img src="{{ asset('images/s5.jpeg') }}" alt="Calligraphy" style="height:260px">
                <div class="overlay">
                    <p>Category</p>
                    <h5>SCULPTURES</h5>
                    <button class="btn btn-light mt-2"><a  href="{{ 'sculpture' }}" style="color:black;text-decoration:none;">Explore</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Customize-->
    <section class="custom-design-section" style="width: 100%; padding: 50px 20px; background-color: #f5f5f5;">
    <!-- <h2 style="text-align: center; margin-bottom: 20px;">Customize Designs</h2>
    <p style="text-align: center; margin-bottom: 40px;">Decorate your home with us, choosing styles of your choice.</p> -->
   
        <div class="collection-header-container">
        <div class="collection-line-left"></div>
        <div class="collection-header">
            <h3>Customize Designs</h3>
            <p>Decorate your home with us, choosing styles of your choice.</p>
        </div>
        <div class="collection-line-right"></div>
    </div>
    <!-- Image Section -->
    <div class="image-container" style="position: relative; width: 100%; height: 400px; overflow: hidden; border-radius: 10px;">
        <!-- Use the asset() function to reference an image in the public folder -->
        <img src="{{ asset('images/p3.png') }}" alt="Custom Design" style="width: 100%; height: 100%; object-fit: cover;">
        
        <!-- Text and Button Overlay -->
        <div class="overlay">
            <div class="text">
                <p style="margin: 0;">Category</p>
                <p style="margin: 0;">Customized</p>
            </div>
            <button class="see-more-btn" style="color:black"><a  href="{{ 'custom' }} "style="color:black; text-decoration:none">See More</a></button>
        </div>
    </div>
</section>

<section class="collection-section">
    <!-- Collection Header -->
    <div class="collection-header-container">
        <div class="collection-line-left"></div>
        <div class="collection-header">
            <h3>Home Decor Collection</h3>
            <p>Transform your space with our curated selection of home decor. Quality, style, and elegance combined.</p>
        </div>
        <div class="collection-line-right"></div>
    </div>

    <!-- Trending Section -->
    
    <div class="trending-section">
        <h2 class="trending-title">Newly Added Items</h2>
    </div>

    <!-- Product Carousel -->
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <!-- Category 1 -->
                <div class="col-md-3">
                    <div class="category-card" style="height:250px;width:250px">
                    <a href="{{ route('P1') }}">
                        <img src="{{ asset('images/p1.png') }}" alt="Lunar Whispers" class="d-block w-100" style="height:100%; object-fit:cover;">
                    </a>

                    </div>
                    <div style="text-align:center">
                        <small id="name">Lunar Whispers</small>
                        <p style="margin-top: 5px;">PKR 15,000</p>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="col-md-3">
                    <div class="category-card" style="height:250px;width:250px">
                    <a href="{{ route('L2') }}">
                        <img src="{{ asset('images/l2 (2).jpeg') }}" alt="Tree of Light Lamp" class="d-block w-100" style="height:100%; object-fit:cover;">
                    </a>

                    </div>
                    <div style="text-align:center">
                        <small id="name">Tree of Light Lamp</small>
                        <p style="margin-top: 5px;">PKR 13,000</p>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row justify-content-center">
                <!-- Category 3 -->
                <div class="col-md-3">
                    <div class="category-card" style="height:250px;width:250px">
                    <a href="{{ route('F2') }}">
                        <img src="{{ asset('images/f2.jpeg') }}" alt="Orange Modern Lounge Chair" class="d-block w-100" style="height:100%; object-fit:cover;">
                    </a>

                    </div>
                    <div style="text-align:center">
                        <small id="name">Orange Modern Lounge Chair</small>
                        <p style="margin-top: 5px;">PKR 43,000</p>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="col-md-3">
                    <div class="category-card" style="height:250px;width:250px">
                    <a href="{{ route('S2') }}">
                        <img src="{{ asset('images/s2.jpeg') }}" alt="Harmony in Flight" class="d-block w-100" style="height:100%; object-fit:cover;">
                    </a>

                    </div>
                    <div style="text-align:center">
                        <small id="name">Harmony in Flight</small>
                        <p style="margin-top: 5px;">PKR 13,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</section>

<!--About -->
<div class="collection-header-container">
        <div class="collection-line-left"></div>
        <div class="collection-header">
            <h3>About VintageVibe</h3>
        </div>
        <div class="collection-line-right"></div>
    </div>
<section class="about-decor py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side - Image -->
            <div class="col-md-6">
                <img src="{{ asset('images/l5.jpeg') }}" alt="Interior Decor" class="img-fluid rounded shadow" style="height:450px; width:500px">
            </div>
            <!-- Right Side - Text -->
            <div class="col-md-6" style="margin-bottom:50px">
                <h2 class="mb-4" style="color: #ff5722;">Transform Your Living Spaces</h2>
                <p class="text-muted">
                    Discover the beauty of personalized interior decor. Our handpicked collection features timeless pieces that bring elegance and charm to your living spaces. From modern minimalism to vibrant art pieces, we have something for every taste.
                </p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill text-success"></i> Unique, handcrafted designs</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> High-quality materials</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> Expertly curated for your style</li>
                </ul>
                <a href="{{ url('shop') }}" class="btn btn-dark mt-3">Explore Now</a>
                

            </div>
        </div>
    </div>
</section>



<br>
<br>


<footer class="footer bg-dark text-white py-5" style="color:red">
    <div class="container" style="height:150px">
      
            <!-- About Section -->
            <div class="col-md-4">
                <h5>About Us</h5>
                <p class="text-muted">
                    Transforming spaces with curated interior decor that suits your style. Quality craftsmanship and timeless design to inspire your home.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4" style="margin-left:100px">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ 'index' }}" class="text-decoration-none" style="color:black">Home</a></li>
                    <li><a href="{{ 'shop' }}" class="text-decoration-none" style="color:black">Shop</a></li>
                    <li><a href="{{ 'contact' }}" class="text-decoration-none" style="color:black">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li  style="color:black"><i class="bi bi-geo-alt-fill me-2"></i>123 Vintage Vibe, Islamabad, Pakistan</li>
                    <li style="color:black"><i class="bi bi-envelope-fill me-2"></i>contact@VintageVibe.com</li>
                    <li style="color:black"><i class="bi bi-telephone-fill me-2"></i>+123 456 7890</li>
                </ul>

             
            </div>
        </div>
    
</footer>


<script src="{{ asset('js/script.js') }}"></script>


@endsection

@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush