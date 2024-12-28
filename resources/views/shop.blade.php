@extends('layout')

@section('title', 'Home Decor')

@section('content')
<link href="{{ asset('css/shop.css') }}" rel="stylesheet">
<link href="{{ asset('css/Styles.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- Header Section -->
<header class="text-center py-5">
    <h1 class="display-4">Explore Our Exclusive Collection of Home Decor</h1>
    <p class="lead">Beautifully crafted, unique, and elegant pieces for every home.</p>
</header>
<center><h2 class="mb-4" style="margin-top:20px;">Our Products</h2></center>
<!-- Product Data Table -->
<div class="container my-5">
    
    <table id="productTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{ asset('images/f1.jpeg') }}" alt="Product 1" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Pink Velvet Armchair</td>
                <td>Elegant Nordic design with intricate patterns, perfect for any setting.</td>
                <td>RS 25,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='F1'">Details</button></td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/p1.png') }}" alt="Product 2" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Lunar Whispers</td>
                <td>Modern and sleek design, ideal for contemporary home decor.</td>
                <td>PKR 15,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='P1'">Details</button></td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/s1.jpeg') }}" alt="Product 3" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Majestic Stag</td>
                <td>Handcrafted  ceramic sculpture with a smooth finish.</td>
                <td>PKR 15,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='S1'">Details</button></td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/l7.jpeg') }}" alt="Product 4" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Ferris wheel lamp</td>
                <td>Classic lamp with an elegant look.</td>
                <td>PKR 50,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='L1'">Details</button></td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/f2.jpeg') }}" alt="Product 5" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Orange Lounge Chair</td>
                <td>Stylish chair that adds sophistication to any room.</td>
                <td>PKR 43,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='F2'">Details</button></td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/s2.jpeg') }}" alt="Product 6" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Harmony in Flight</td>
                <td>Traditional sculpture, perfect for home or office decor.</td>
                <td>PKR 13,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='S2'">Details</button></td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/l2 (2).jpeg') }}" alt="Product 2" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Tree of Light Lamp</td>
                <td>Elegant design, perfect for your living room.</td>
                <td>PKR 13,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='L2'">Details</button></td>
            </tr>

            <!-- Product 2 -->
            <tr>
                <td><img  src="{{ asset('images/p2.png') }}" alt="Product 3" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Butterfly Symphony</td>
                <td>Stylish and comfortable wall painting.</td>
                <td>PKR 13,000</td>
                <td><button class="btn btn-primary" onclick="window.location.href='P2'">Details</button></td>
            </tr>

            <!-- Product 3 -->
            <tr>
                <td><img  src="{{ asset('images/l3.jpeg') }}" alt="Product 1" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Cyclic Wheel Lamp</td>
                <td>Modern armchair for a minimalist look.</td>
                <td>PKR 13,700</td>
                <td><button class="btn btn-primary" onclick="window.location.href='L3'">Details</button></td>
            </tr>

            <!-- Product 4 -->
            <tr>
                <td><img src="{{ asset('images/f3.jpeg') }}" alt="Product 2" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Wooden Coffee Tables</td>
                <td>Durable and stylish wooden coffee table.</td>
                <td>PKR 13,700</td>
                <td><button class="btn btn-primary" onclick="window.location.href='F3'">Details</button></td>
            </tr>

            <!-- Product 5 -->
            <tr>
                <td><img src="{{ asset('images/s3.jpeg') }}" alt="Product 3" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                <td>Expressions of Creativity</td>
                <td>Elegant and sleek sculpture for any room.</td>
                <td>PKR 13,700</td>
                <td><button class="btn btn-primary" onclick="window.location.href='S3'">Details</button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Call to Action Section -->
<div class="container-fluid bg-light py-5 text-center">
    <h2 class="display-5">Transform Your Space with Our Premium Decor</h2>
    <p class="lead">Browse through our collection and find the perfect piece for your home.</p>
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
<br>
<br>
<div class="container2">
        <div class="product-text2">
          <h2 class="product-title2">Shop Now</h2>
          <small class="product-description2">Handcrafted, classy mirrors,furniture,and other items with designs showcasing solid frames with quality glass, hang vertically or horizontally depending on your space.</small>
          <button class="buy-now-button2" onclick="window.location.href='shop'">BUY NOW</button>
        </div>
        <div class="product-image2">
          <img src="{{ asset('images/f7.jpeg') }}" alt="Mirror">
        </div>
      </div>
      <br>

<!-- Footer Section -->
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
                <li><a href="#" class="text-decoration-none" style="color:black">Home</a></li>
                <li><a href="#" class="text-decoration-none" style="color:black">About</a></li>
                <li><a href="#" class="text-decoration-none" style="color:black">Products</a></li>
                <li><a href="#" class="text-decoration-none" style="color:black">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4">
            <h5>Contact Us</h5>
            <ul class="list-unstyled">
                <li style="color:black"><i class="bi bi-geo-alt-fill me-2"></i>123 Decor Street, City, Country</li>
                <li style="color:black"><i class="bi bi-envelope-fill me-2"></i>info@interiordecor.com</li>
                <li style="color:black"><i class="bi bi-telephone-fill me-2"></i>+123 456 7890</li>
            </ul>
        </div>
    </div>
</footer>

<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#productTable').DataTable({
            "paging": true,  // Enable pagination
            "pageLength": 3,  // Display 3 rows per page
            "searching": true,  // Enable search bar
            "info": true,  // Enable info about rows
            "lengthChange": false  // Disable the ability to change rows per page
        });
    });
</script>

@endsection
