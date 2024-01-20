<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserPermissionController;
use App\Http\Controllers\admin\Admin_userController;
use App\Http\Controllers\admin\CmsController;
use App\Http\Controllers\admin\SizeController;




use App\Http\Controllers\front\UserRegistration\UserRegistration;
use App\Http\Controllers\front\checkoutcontroller;








// Route::get('/', function () {
//     return view('welcome');
// });

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
}); 
// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});
 Route::get('/optimize-clear', function() {
    $exitCode = Artisan::call('optimize:clear');
    return 'Application cache cleared successfully';
});


Route::get('/hdfc', function () {
    return response()->file(public_path('PHPKits/NON_SEAMLESS_KIT/dataFrom.html'));
});	

/*------Front routes start ------*/


// Route::get('/', '\App\Http\Controllers\front\Homecontroller@index');

// Route::get('/product-detail/{page_url}', '\App\Http\Controllers\front\Front_productcontroller@product_detail');
// Route::get('/cart', '\App\Http\Controllers\front\Homecontroller@cart');

// Route::get('/wishlist', '\App\Http\Controllers\front\Homecontroller@wishlist');
// Route::get('/my-profile', '\App\Http\Controllers\front\Homecontroller@my_profile');

// Route::get('/edit-profile', '\App\Http\Controllers\front\Homecontroller@edit_profile');
// Route::get('/edit-address', '\App\Http\Controllers\front\Homecontroller@edit_address');
// Route::get('/add-address', '\App\Http\Controllers\front\Homecontroller@add_address');
// Route::get('/about-company', '\App\Http\Controllers\front\Homecontroller@about_company');
// Route::get('/our-services', '\App\Http\Controllers\front\Homecontroller@our_services');
// Route::get('/latest-blogs', '\App\Http\Controllers\front\Homecontroller@latest_blogs');
// Route::get('/contact-us', '\App\Http\Controllers\front\Homecontroller@contact_us');
// Route::get('/terms-conditions', '\App\Http\Controllers\front\Homecontroller@terms_conditions');
// Route::get('/privacy-policy', '\App\Http\Controllers\front\Homecontroller@privacy_policy');
// Route::get('/what-we-offer', '\App\Http\Controllers\front\Homecontroller@what_we_offer');
// Route::get('/return', '\App\Http\Controllers\front\Homecontroller@return');
// Route::get('/free-delivery', '\App\Http\Controllers\front\Homecontroller@free_delivery');
// Route::get('/100-days-refund', '\App\Http\Controllers\front\Homecontroller@days_refund');
// Route::get('/multiple-payments', '\App\Http\Controllers\front\Homecontroller@multiple_payments');
// Route::get('/sustainable', '\App\Http\Controllers\front\Homecontroller@sustainable');

// Route::get('/product/{groupurl}', '\App\Http\Controllers\front\Front_productcontroller@product_listing');
// Route::get('/product/{groupurl}/{cat_url}', '\App\Http\Controllers\front\Front_productcontroller@product_listing');
// Route::get('/product/{groupurl}/{cat_url}/{subcat_url}', '\App\Http\Controllers\front\Front_productcontroller@product_listing');

// Route::get('/collection/{page_url}', '\App\Http\Controllers\front\Front_productcontroller@collection');


// Route::post('size_show','\App\Http\Controllers\front\Front_productcontroller@size_show');
// Route::post('price_show','\App\Http\Controllers\front\Front_productcontroller@price_show');

// Route::post('add_to_cart','\App\Http\Controllers\front\Cartcontroller@add_to_cart');
// Route::post('cart_remove', '\App\Http\Controllers\front\Cartcontroller@cart_remove');
// Route::post('empty_cart', '\App\Http\Controllers\front\Cartcontroller@empty_cart');
// Route::post('update_cart', '\App\Http\Controllers\front\Cartcontroller@update_cart');
// Route::post('couponcheck', '\App\Http\Controllers\front\Cartcontroller@couponcheck');
// Route::post('removecoupon', '\App\Http\Controllers\front\Cartcontroller@removecoupon');

// Route::get('/checkout', '\App\Http\Controllers\front\checkoutcontroller@checkout');

// Route::get('thankyou', [checkoutcontroller::class, 'thankyou'])->name("thankyou");
// Route::get('fail', [checkoutcontroller::class, 'fail'])->name("fail");
// Route::post('/ship_state_change', '\App\Http\Controllers\front\checkoutcontroller@ship_state_change');
// Route::post('/bill_state_change', '\App\Http\Controllers\front\checkoutcontroller@bill_state_change');
// Route::post('/order_place', '\App\Http\Controllers\front\checkoutcontroller@order_place')->name('order_place');
// Route::post('/hdfcrequestHandler', '\App\Http\Controllers\front\checkoutcontroller@hdfcrequestHandler')->name('hdfcrequestHandler');

// // Route::get('/hdfc_redirect_url', '\App\Http\Controllers\front\checkoutcontroller@hdfc_redirect_url')->name('hdfc_redirect_url');

// Route::match(['get', 'post'], '/hdfc-redirect-url', '\App\Http\Controllers\front\checkoutcontroller@hdfc_redirect_url')->name('hdfc-redirect-url');

// // Route::any('/hdfc_redirect_url', '\App\Http\Controllers\front\checkoutcontroller@hdfc_redirect_url')->name('hdfc_redirect_url');


// Route::post('check_email','\App\Http\Controllers\front\Homecontroller@check_email');

// Route::post('news_letter_email','\App\Http\Controllers\front\Homecontroller@news_letter_email');




// Route::controller(UserRegistration::class)->group(function () {

//     Route::match(['get', 'post'], '/signup', 'register')->name('signup');
//     Route::match(['get', 'post'], '/signin', 'login')->name('signin');
//     Route::post('checkmail', 'checkmail');
//     Route::post('check-login','checklogin');
//     Route::post('email-check-login','emailCheck');

    
//     Route::post('resetpassword', 'get_password')->name('reset-password');
//     Route::get('reset-password/{uid}', 'reset_password')->name('reset_password');
//     Route::post('set_password/{uid}', 'set_password')->name('set_password');
//     Route::get('forget-password','lost_password');
//     Route::get('signout','signout');


//     Route::get('/my-profile', 'my_profile');
//     Route::get('/my-orders', 'my_orders');
//     Route::get('/edit-profile', 'edit_profile');
//     Route::get('/edit-address/{id}', 'edit_address');
//     Route::get('/changepassword', 'changepassword');
//     Route::post('update-password', 'update_password')->name('update-password');
    

//     Route::get('/remove-address/{id}', 'remove_address');


//     Route::get('/add-address', 'add_address');

//     Route::post('state_show', 'state_show');
    
//     Route::get('/wishlist', 'wishlist');
//     Route::post('/add-to-wishlist', 'add_to_wishlist')->name('add_to_wishlist');
//     Route::get('/wishlist/delete/{id}', 'delete_wishlist')->name('delete_wishlist');

//     Route::post('update-profile', 'update_profile')->name('update_profile');
//     Route::post('add-address', 'add_useraddress')->name('add_address');
//     Route::post('update-address', 'update_address')->name('update_address');

//     Route::post('/add-review', 'add_review')->name('add_review');

//     //Route::match(['get', 'post'], '/add_review', 'add_review')->name('add_review');
// });

/*------End Front routes  ------*/





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/admin/category', '\App\Http\Controllers\admin\CategoryController');
    Route::get('/admin/delete', [CategoryController::class, 'destroy'])->name('delete');
    Route::post('set_order_category', '\App\Http\Controllers\admin\CategoryController@set_order_category');

    Route::resource('/admin/subcategory', '\App\Http\Controllers\admin\SubcategoryController');
    Route::get('/admin/delete_subcategory', [SubcategoryController::class, 'destroy'])->name('delete_subcategory');
    Route::post('set_order_subcategory', '\App\Http\Controllers\admin\SubcategoryController@set_order');

    Route::resource('/admin/product', '\App\Http\Controllers\admin\ProductController');
    Route::get('/admin/delete_product', [ProductController::class, 'destroy'])->name('delete_product');
    
    Route::resource('admin/cms','App\Http\Controllers\admin\CmsController');
    Route::get('cms-delete',[CmsController::class,'destroy'])->name
    ('cms-delete');
    
    Route::resource('admin/size','App\Http\Controllers\admin\SizeController');
    Route::get('delete_size',[SizeController::class,'destroy'])->name('delete_size');
    

   
   
   
    Route::resource('/admin/permission', '\App\Http\Controllers\admin\PermissionController');
    
    Route::resource('/admin/userpermission', '\App\Http\Controllers\admin\UserPermissionController');
    Route::get('delete_permission', [UserPermissionController::class, 'delete_permission'])->name('delete_permission');
    Route::get('destroyPermission', [UserPermissionController::class, 'destroyPermission'])->name('destroyPermission');
    

    Route::resource('/admin/adminuser', '\App\Http\Controllers\admin\Admin_userController');
    Route::get('/admin/delete_admin', [Admin_userController::class, 'destroy'])->name('delete_admin'); 
    
    
   
   

});

    Route::get('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

require __DIR__.'/auth.php';