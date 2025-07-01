<?php
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

Route::controller(HomeController::class)->group(function () {
  Route::get('/', 'index')->name('base.home');
  Route::get('/filter/{cat_id}', 'filter')->name('base.filter');
  Route::get('/search', 'search')->name('search');
  Route::get('/categories', 'categories')->name('base.categories');
  Route::get('/product/{slug}', 'productView')->name('base.productView');
  Route::get('/offer', 'offer')->name('base.offer');
  Route::get('/profile', 'profile')->name('base.profile');
  Route::get('/wishlist', 'wishlist')->name('base.wishlist');
});
    
    //Order Routes
    Route::controller(OrderController::class)->group(function() {
      Route::get('/order/success',  'success')->name('order.success')->middleware('auth');
      Route::get('/order/myorder','myorder')->name('order.myorder')->middleware('auth');
      Route::post('/add-to-cart/{slug}', 'addToCart')->name('base.addtocart');
      Route::post('cart', 'cart')->name('base.cart')->middleware('auth');
      Route::post('/remove-coupon', 'removeCoupon')->name('coupon.remove')->middleware('auth');
      Route::post('/add-coupon', 'addcoupon')->name('coupon.add')->middleware('auth');
      Route::put('/cart/update/{id}','updateCart')->name('cart.update');
      Route::match(['get', 'post'],'/cart','Cart')->name('base.cart')->middleware("auth"); 
      Route::get('/checkout',  'checkout')->name('base.checkout');

     });

     //Payment routes
  Route::controller(PaymentController::class)->group(function() {
    Route::post('/place-order', 'placeOrder')->name('order.place')->middleware('auth');
    Route::get('/payment', 'Payment')->name('base.payment');
    Route::post('/razorpay/order','createRazorpayOrder')->name('razorpay.order')->middleware('auth');
  });


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('base.home');
    Route::get('/filter/{cat_id}', 'filter')->name('base.filter');
    Route::get('/search', 'search')->name('search');
    Route::get('/categories', 'categories')->name('base.categories');
    Route::get('/product/{slug}', 'productView')->name('base.productView');
    Route::get('/offer', 'offer')->name('base.offer');
    Route::get('/profile', 'profile')->name('base.profile');
    Route::get('/wishlist', 'wishlist')->name('base.wishlist');
    Route::get('/brand', 'brand')->name('base.brand');
    route::get('/order', 'order')->name('base.order');
    route::get('/blog', 'blog')->name('base.blog');
   Route::get('/filter',  'filter')->name('base.categories');

});
    Route::get('/add-to-cart/{slug}', [OrderController::class, 'addToCart'])->name('base.addtocart');
   Route::get('/cart', [OrderController::class, 'Cart'])->name('base.cart')->middleware("auth");

  // Auth Routes
Route::controller(AuthController::class)->group(function() {
    Route::get('/base/register', 'register')->name('base.register');
    Route::post('base/register','storeUser')->name('storeUser');
    Route::get('/base/login', 'login')->name('base.login');
    Route::post('/base/login', 'loginUser')->name('loginUser');
    Route::get('/logout', 'logoutUser')->name('logout');
});

// Wishlist routes
Route::middleware('auth')->group(function () {
  Route::post('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
  Route::post('/wishlist/{productId}', [WishlistController::class, 'store'])->name('wishlist.add');
  Route::get('/wishlist/{id}', [WishlistController::class, 'show'])->name('wishlist.show');
  Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');
});

   
  // Admin Routes
Route::controller(AdminController::class)->group(function() {
 Route::get('/admin', 'dashboard')->name('admin.dashboard');
 Route::get('/order', 'manageOrder')->name('admin.manageOrder');
});

  Route::controller(UserController::class)->group(function(){
   Route::middleware("auth")->group(function(){
      Route::get('/user', 'dashboard')->name('user.dashboard');
      Route::get('/user', 'dashboard')->name('user.dashboard');
     Route::get('/myaccount',  'manageAccount')->name('user.manageAccount');
   });
 });

 //address routes
  Route::controller(AddressController::class)->middleware('auth')->group(function(){
    Route::post('/address/create', 'store')->name('address.store');
    Route::post('/add-address', 'addAddress')->name('order.addAddress');
});

 Route::get('/base/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
 Route::get('/base/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
 Route::get('/base/login',[GoogleController::class,'login'])->name('base.login');

Route::resource('/category', CategoryController::class);
Route::resource('/products',ProductController::class);