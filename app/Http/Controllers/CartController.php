<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
{
    // Assuming the data is passed in the request
    $productName = $request->input('product_name');
    $productDescription = $request->input('product_description');
    $productPrice = $request->input('product_price');
    $productImage = $request->input('product_image'); // Now this is just the image filename

    // Insert data into the 'carts' table
    Cart::create([
        'product_name' => $productName,
        'product_description' => $productDescription,
        'product_price' => $productPrice,
        'product_image' => $productImage, // Save filename in the database
    ]);

    return back()->with('success', 'Product added to cart!');
}

    public function showCart()
{
    // Fetch the cart items from the database
    $cartItems = Cart::all(); // You can modify this to fetch the logged-in user's cart items if necessary
    $totalPrice = Cart::sum('product_price'); // Sum the prices of all products in the cart

    return view('cart', compact('cartItems', 'totalPrice'));
}

public function showCartCheck()
{
    // Fetch the cart items from the database
    $cartItems = Cart::all(); // You can modify this to fetch the logged-in user's cart items if necessary
    $totalPrice = Cart::sum('product_price'); // Sum the prices of all products in the cart

    return view('checkout', compact('cartItems', 'totalPrice'));
}

public function removeFromCart($id)
{
    // Find the cart item by its ID
    $cartItem = Cart::findOrFail($id);

    // Delete the cart item
    $cartItem->delete();

    // Redirect back to the cart page with a success message
    return redirect()->route('cart')->with('success', 'Item removed from the cart.');
}

public function checkout()
{
    // Fetch cart items from the database
    $cartItems = Cart::all();

    // Calculate the total price from the cart
    $totalPrice = $cartItems->sum('product_price');

    // Store the total price in the session
    session(['totalPrice' => $totalPrice]);

    // Pass the cartItems to the view
    return view('checkout', compact('cartItems'));
}



}
