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
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\RazorpayController;

Route::get('/blogs', [BlogController::class, 'blog'])->name('base.blog');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('base.blogshow');


Route::get('/pay', [RazorpayController::class, 'showForm'])->name('razorpay.form');
Route::post('/payment', [RazorpayController::class, 'payment'])->name('razorpay.payment');


    
    //Order Routes
    Route::controller(OrderController::class)->group(function() {
      Route::get('/order/success',  'success')->name('order.success')->middleware('auth');
      Route::get('/order/myorder','myorder')->name('order.myorder')->middleware('auth');
      Route::post('/add-to-cart/{slug}', 'addToCart')->name('base.addtocart');
      Route::post('cart', 'cart')->name('base.cart')->middleware('auth');
      Route::delete('/cart/remove/{id}', 'remove')->name('cart.remove');
      Route::delete('/remove-coupon', 'removeCoupon')->name('coupon.remove')->middleware('auth');
      Route::delete('/cart/remove/{id}',  'remove')->name('cart.remove')->middleware('auth');
      Route::post('/add-coupon', 'addcoupon')->name('coupon.add')->middleware('auth');
     Route::delete('/remove-coupon', 'removeCoupon')->name('coupon.remove')->middleware('auth');
      Route::put('/cart/update/{id}','updateCart')->name('cart.update');
      Route::match(['get', 'post'],'/cart','Cart')->name('base.cart')->middleware("auth"); 
      Route::get('/checkout',  'checkout')->name('base.checkout');
      Route::put('/order/cancel/{id}', 'cancel')->name('order.cancel');

   });

     //Payment routes
  Route::controller(PaymentController::class)->group(function() {
    Route::post('/place-order', 'placeOrder')->name('order.place')->middleware('auth');
    //Route::post('/payment',  'payment')->name('base.payment');
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
    Route::get('/order', 'order')->name('base.order');
    Route::get('/advice', 'advice')->name('base.advice');
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
  Route::get('/wishlist', [WishlistController::class, 'index'])->name('base.wishlist');
  Route::post('/wishlist/{productId}', [WishlistController::class, 'store'])->name('wishlist.add');
  Route::get('/wishlist/{id}', [WishlistController::class, 'show'])->name('wishlist.show');
  Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');
});

   
  // Admin Routes
 Route::controller(AdminController::class)->group(function() {
  Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('admin/dashboard', function () {
       return view('admin.dashboard');
    })->name('admin.dashboard');
});
    Route::get('/admin', 'dashboard')->name('admin.dashboard')->middleware('auth');
    Route::get('/admin/manage-orders','manageOrder')->name('admin.manageOrders');
    Route::get('/payment', 'managePayment')->name('admin.managePayment'); 
    Route::get('/admin/manage-users', 'manageUsers')->name('admin.manageUsers');
    Route::get('/admin/user/{id}/edit', 'edit')->name('admin.user.edit');
    Route::put('/admin/user/{id}', 'update')->name('admin.user.update');
    Route::delete('/admin/user/{id}', 'destroy')->name('admin.user.delete');
    Route::get('/admin/view-order/{id}','viewOrder')->name('admin.viewOrder');
    Route::get('/admin/manage-sales', 'manageSales')->name('admin.manageSales');
    Route::get('/admin/blogs', 'manageblogs')->name('admin.manageblogs');

    Route::get('admin/login', 'showLoginForm')->name('admin.login');
   Route::post('admin/login',  'login')->name('admin.login.submit');
   Route::post('admin/logout', 'logout')->name('admin.logout');

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
    Route::get('/add-address', 'addAddress')->name('order.addAddress');
    Route::get('/profile/update-address',  'updateAddress')->name('profile.updateAddress');
});

 Route::get('/base/google',[GoogleController::class, 'redirectToGoogle'])->name('google.login');
 Route::get('/base/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
 Route::get('/base/login',[GoogleController::class,'login'])->name('base.login');

Route::resource('/category', CategoryController::class);
Route::resource('/products',ProductController::class);


Route::get('/categories', [ProductController::class, 'index'])->name('base.categories');


Route::prefix('admin')->group(function () {
    Route::get('blogs', [BlogController::class, 'index'])->name('admin.manageBlogs');
    Route::post('blogs/create', [BlogController::class, 'create'])->name('admin.manageBlogs');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('admin.createblogs');
    Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('admin.editblogs');
    Route::put('blogs/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::post('blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::delete('blogs/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
});
