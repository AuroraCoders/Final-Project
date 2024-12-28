<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\paintController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;


Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/gpt', function () {
    return view('gpt');
});

// Route::get('/gpt', function () {
//     $response= Http::withToken(config('services.openai.secret'))
//     ->post('https://api.openai.com/v1/chat/completions',
//      [
//         "model"=> "gpt-3.5-turbo",
//         "messages" => [
//             [
//                 "role" => "system",
//                 "content" =>"You are a poetic assistant,skilled in explaining programing"
//             ],
//             [
//                 "role" => "user",
//                 "content" =>"Compose a poem that explain recursion"
//             ]
//         ]
//     ]
//     )->json();
//     dd($response);
// });

Route::get('/index', [RegisterController::class, 'index'])->name('index')->middleware('auth');
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'processLogin'])->name('login');
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');

// Welcome page for users
Route::get('/welcome/user', function () {
    return view('frontend.index');
})->name('index');

Route::get('/welcome/admin', function () {
    return view('adminPanel');
})->name('welcome.admin');

// Route::get('/welcome/admin', [ProductController::class, 'index'])->name('welcome.admin');



// Login page
Route::get('/login', function () {
    return view('frontend.login');
})->name('login');


Route::post('/login', [RegisterController::class, 'processLogin'])->name('login.process');
  
Route::post('/products/create', 'App\Http\Controllers\ProductController@store');

Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.edit');


// Route::middleware('auth')->group(function () {
//     // Protect admin routes with the 'admin' middleware
//     Route::middleware('admin')->group(function () {
//         // Admin Product Management Routes
//         Route::resource('admin/products', ProductController::class);
//     });
// });




Route::resource('products', ProductController::class);


Route::get('/paintings',[PaintController::class,'index']);


Route::get('/index',[HomeController::class,'index']);

Route::get('/home', function () {
    return view('frontend.index');
})->name('home');

Route::get('/shop', [ProductController::class, 'shop'])->name('shop');


Route::get('/aboutUs', function () {
    return view('frontend.aboutUS');
})->name('aboutUs');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/vase', function () {
    return view('frontend.vase');
})->name('vase');

Route::get('/painting', function () {
    return view('frontend.painting');
})->name('painting');

Route::get('/lamp', function () {
    return view('frontend.lamp');
})->name('lamp');


Route::get('/furniture', function () {
    return view('frontend.furniture');
})->name('furniture');

Route::get('/sculpture', function () {
    return view('frontend.sculpture');
})->name('sculpture');

Route::get('/custom', function () {
    return view('frontend.custom');
})->name('custom');

Route::get('/S3', function () {
    return view('frontend.S3');
})->name('S3');

Route::get('/S1', function () {
    return view('frontend.S1');
})->name('S1');

Route::get('/S2', function () {
    return view('frontend.S2');
})->name('S2');

Route::get('/S4', function () {
    return view('frontend.S4');
})->name('S4');

Route::get('/P1', function () {
    return view('frontend.P1');
})->name('P1');
Route::get('/P2', function () {
    return view('frontend.P2');
})->name('P2');
Route::get('/P3', function () {
    return view('frontend.P3');
})->name('P3');
Route::get('/P4', function () {
    return view('frontend.P4');
})->name('P4');

Route::get('/L1', function () {
    return view('frontend.L1');
})->name('L1');
Route::get('/L2', function () {
    return view('frontend.L2');
})->name('L2');
Route::get('/L3', function () {
    return view('frontend.L3');
})->name('L3');
Route::get('/L4', function () {
    return view('frontend.L4');
})->name('L4');

Route::get('/F1', function () {
    return view('frontend.F1');
})->name('F1');
Route::get('/F2', function () {
    return view('frontend.F2');
})->name('F2');
Route::get('/F3', function () {
    return view('frontend.F3');
})->name('F3');
Route::get('/F4', function () {
    return view('frontend.F4');
})->name('F4');

Route::get('/v1', function () {
    return view('frontend.v1');
})->name('v1');

Route::get('/v2', function () {
    return view('frontend.v2');
})->name('v2');

Route::get('/v3', function () {
    return view('frontend.v3');
})->name('v3');


Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');

Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');

// Route to show the cart page

// Route::post('/checkout', function () {
//     return view('checkout');
// })->name('checkout');

Route::post('/checkout', [CartController::class, 'showCartCheck'])->name('checkout');

Route::post('/send' ,[MailController::class, 'sendEmail'])->name('send');

Route::post('/sendCustom' ,[MailController::class, 'sendCustom'])->name('sendCustom');


Route::resource('users', UserController::class);



Route::post('/chat', [ChatController::class, 'chat']);

Route::get('/download/{file}', [ProductController::class, 'download'])->name('file.download');