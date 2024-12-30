@extends('layout')

<!-- DataTable CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<style>
    /* Add custom styling here */
    .table-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .product-table {
        width: 90%;
        border-collapse: collapse;
        margin-top: 20px;
        table-layout: auto;
    }

    .product-table th, .product-table td {
        padding: 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .product-table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .product-image {
        padding-right: 10px;
    }

    .product-name {
        padding-left: 30px;
    }

    .product-image img {
        max-width: 100%;
        height: auto;
        margin-right: 20px;
        border-radius: 8px;
    }

    .product-name a {
        color: rgb(9, 10, 10);
        text-decoration: none;
    }

    .product-name a:hover {
        text-decoration: underline;
    }

    .product-detail p {
        margin: 0;
        font-size: 1em;
        color: #555;
    }

    .product-actions .btn {
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 0.9em;
        text-decoration: none;
        cursor: pointer;
        border: none;
    }

    .product-actions .btn-warning {
        background-color: #f0ad4e;
        color: white;
    }

    .product-actions .btn-warning:hover {
        background-color: #ec971f;
    }

    .product-actions .btn-danger {
        background-color: #d9534f;
        color: white;
    }

    .product-actions .btn-danger:hover {
        background-color: #c9302c;
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 1px solid #e0e0e0;
    }

    .table-scroll {
        max-height: 500px;
        overflow-y: auto;
        width: 100%;
    }
</style>

@section('content')

<center>
    <h1 class="text-center">Products that has been ordered</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Order</a>
    <div class="table-container" style="margin-top:50px;">
        <div class="table-scroll">
            <table id="productTable" class="product-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="product-item">
                            <td class="product-image">
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" width="150">
                            </td>
                            <td class="product-name">
                                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                            </td>
                            <td class="product-detail">
                                <p>{{ Str::limit($product->detail, 100) }}</p>
                            </td>
                            <td class="product-actions">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Update</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</center>

@endsection

<!-- DataTable JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#productTable').DataTable({
            "paging": true,  // Enable pagination
            "searching": true,  // Enable search
            "ordering": true,  // Enable column sorting
            "info": true,  // Show table information
            "autoWidth": false  // Disable auto width adjustment
        });
    });
</script>