<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Manager;

class RegisterController extends Controller
{
    /**
     * Display the index page with user details.
     */
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('index', compact('user')); // Pass user data to the view
    }

    /**
     * Show the registration form.
     */
    public function showForm()
    {
        return view('frontend.register');
    }

    /**
     * Handle user/admin registration.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'type' => 'required|in:user,admin', // Define roles allowed
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        // Create user or admin based on the typez
        if ($request->type === 'user') {
            User::create($data);
        } elseif ($request->type === 'admin') {
            Admin::create($data);
        }

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    /**
     * Handle login for users and admins.
     */
    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check User, Admin, or Manager tables for the account
        $user = User::where('email', $request->email)->first();
        $admin = Admin::where('email', $request->email)->first();

        // Authenticate based on the type of account
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('index'); // Redirect to index page
        }

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('welcome.admin'); // Redirect to admin dashboard
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Handle logout for any authenticated user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}