<?php
// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        $products = Product::all();  // Retrieve all products
        return view('products.index', compact('products'));
    }
    // Show the form for creating a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product
    public function store(Request $request)
{
    // Validate incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'detail' => 'nullable|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image file
    ]);

    // Get the original file name (e.g., p13.png)
    $imageName = $request->file('image')->getClientOriginalName();

    // Store the image with the original name in 'public/images' folder
    $imagePath = $request->file('image')->storeAs('images', $imageName, 'public');

    // Create the product record in the database with the image path
    Product::create([
        'name' => $request->name,
        'detail' => $request->detail,
        'image_path' => $imagePath,  // Store the image path in the database
    ]);

    return redirect()->route('products.index');
}
    // Display the specified product
    public function showProducts() {
    // Retrieve all products
    $products = Product::all();
    
    // Pass data to the view
    return view('products.index', compact('products'));
}

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update the specified product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'nullable|string',
            'image_path' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());  // Update the product record
        return redirect()->route('products.index');
    }

    // Remove the specified product
    public function destroy($id)
    {
        Product::destroy($id);  // Delete the product by ID
        return redirect()->route('products.index');
    }
    public function shop()
{
    $products = Product::all(); // Fetch all products from the database
    return view('shop', compact('products')); // Pass the $products variable to the view
}

public function download($file)
    {
        // Path to the file
        $filePath = public_path('images/' . $file); // Example for public folder

        // Check if the file exists
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        // If file is in storage/app/public
        $filePath = storage_path('app/public/' . $file);
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        // File not found
        return abort(404, 'File not found.');
    }

}
