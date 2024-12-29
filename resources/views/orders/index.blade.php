<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #eef2f6;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            margin: 40px auto;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #3f51b5;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .table thead {
            background-color: #607d8b;
            color: white;
        }
        .table tbody tr:hover {
            background-color: #e0f7fa;
        }
        .btn-sm {
            font-size: 12px;
            padding: 5px 10px;
            margin: 2px;
        }
        .btn-success {
            background-color: #4caf50;
            border: none;
        }
        .btn-info {
            background-color: #2196f3;
            border: none;
        }
        .btn-danger {
            background-color: #f44336;
            border: none;
        }
        .product-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2 class="card-header">Placed Orders</h2>
            <div class="card-body">
                <table id="productTable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
    @forelse ($cartitems as $cartitem)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cartitem->product_name }}</td> <!-- Access the correct column for the product name -->
            <td>Rs {{ number_format($cartitem->product_price, 2) }}</td> <!-- Access the correct column for the product price -->
            <td>
                @if ($cartitem->product_image)
                    <img src="{{ asset($cartitem->product_image) }}" alt="Product Image" class="product-image">
                @else
                    <span class="text-muted">No Image</span>
                @endif
            </td>
            <td>
                <a class="btn btn-info btn-sm">
                    <i class="fas fa-eye"></i> View
                </a>
                <a class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center text-muted">No products available</td>
        </tr>
    @endforelse
</tbody>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#productTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                language: {
                    searchPlaceholder: "Search Products...",
                    search: "",
                },
            });
        });
    </script>
</body>
</html>
