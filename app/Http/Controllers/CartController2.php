<?php

namespace App\Http\Controllers;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController2 extends Controller
{
    

    public function index()
    {
        // Retrieve products from Addtocart model with pagination (10 items per page)
        $cartitems = cart::paginate(10);
    
        // Calculate the starting index for the current page
        $i = ($cartitems->currentPage() - 1) * $cartitems->perPage() + 1;
    
        // Pass paginated products and index to the view
        return view('orders.index', compact('cartitems', 'i'));
    }
    

}
