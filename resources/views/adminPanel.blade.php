@extends('layout')

@section('content')
<style>
    /* General Styling */
    body {
        background-color: #f8f9fa; /* Light grey background */
    }

    .card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .icon {
        background-color: #f0f8ff; /* Light blue background for icons */
        border-radius: 50%;
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .icon i {
        font-size: 1.8rem;
    }

    h1.display-4 {
        font-weight: bold;
    }

    .btn {
        border-radius: 25px; /* Rounded buttons */
        padding: 0.5rem 1.5rem;
    }

    /* Additional Section */
    h2.h4 {
        margin-top: 20px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    /* Text Colors */
    .text-primary {
        color: #007bff !important;
    }

    .text-success {
        color: #28a745 !important;
    }

    .text-secondary {
        color: #6c757d !important;
    }
    .container{
        display:flex;
        flex-direction:column;
    }
</style>

<div class="container mt-5" style="width:1200px;">
    <center>
    <div class="row text-center">
        <!-- Page Heading -->
        <div class="col-12">
            <h1 class="display-4 text-primary">Admin Dashboard</h1>
            <p class="text-muted">Manage your customers and inventory with ease.</p>
        </div>
    </div>
    </center>

    <div class="row mt-4">
        <!-- Manage Customers -->
        <div class="col-md-6 mb-4">
            <div class="card shadow border-primary">
                <div class="card-body" style="height:167px;">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="fas fa-users fa-3x text-primary"></i>
                        </div>
                        <div>
                            <h5 class="card-title text-primary">Manage Customers</h5>
                            <p class="card-text text-muted">View, add, update, or delete customer details effortlessly.</p>
                            <a href="{{ route('users.index') }}" class="btn btn-primary" style="margin-top:20px;">Go to Users</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Inventory -->
        <div class="col-md-6 mb-4">
            <div class="card shadow border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="fas fa-boxes fa-3x text-success"></i>
                        </div>
                        <div>
                            <h5 class="card-title text-success">Manage Inventory</h5>
                            <p class="card-text text-muted">Keep track of stock levels, add new items, or update existing inventory.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-success">Go to Inventory</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Section -->
    
    
</div>
@endsection
