<!-- resources/views/products/create.blade.php -->
@extends('layout')
<style>
        /* Container styling */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        /* Form Styling */
        form {
            width: 100%;
            max-width: 600px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Input and textarea styling */
        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #0056b3;
        }

        /* Submit button styling */
        .btn-submit {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        .btn-submit:hover {
            background-color: #218838;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .form-container {
                width: 100%;
                padding: 10px;
            }

            .form-input {
                font-size: 0.9em;
            }

            .btn-submit {
                font-size: 1em;
            }
        }
    </style>
@section('content')

    <h1 class="text-center">Add Product</h1>

    <!-- Form for adding product -->
    <div class="form-container">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Name -->
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" required class="form-input">
            </div>

            <!-- Product Detail -->
            <div class="form-group">
                <label for="detail">Product Detail</label>
                <textarea name="detail" id="detail" class="form-input"></textarea>
            </div>

            <!-- Product Image -->
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" id="image" required class="form-input">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-submit">Add Product</button>
        </form>
    </div>

@endsection

