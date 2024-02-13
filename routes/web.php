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
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\UserPermissionController;
use App\Http\Controllers\admin\Admin_userController;
use App\Http\Controllers\admin\CmsController;
use App\Http\Controllers\admin\SizeController;
use App\Http\Controllers\admin\CoupanController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\SubbannerController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BrandController;




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


Route::get('/', '\App\Http\Controllers\front\Homecontroller@index');
Route::get('/about-us', '\App\Http\Controllers\front\Homecontroller@about_us');
Route::get('/product-list', '\App\Http\Controllers\front\Homecontroller@product_list');
// Route::get('/product-detail', '\App\Http\Controllers\front\Homecontroller@product_detail');
Route::get('/product-detail/{page_url}', '\App\Http\Controllers\front\Front_productcontroller@product_detail');
Route::post('price_show','\App\Http\Controllers\front\Front_productcontroller@price_show');
Route::get('/contact', '\App\Http\Controllers\front\Homecontroller@contact');
Route::post('vendor_check_mail', 'App\Http\Controllers\admin\CustomerController@vendor_check_mail');

Route::get('/cart', '\App\Http\Controllers\front\Homecontroller@cart');
Route::get('/checkout', '\App\Http\Controllers\front\checkoutcontroller@checkout');

Route::post('add_to_cart','\App\Http\Controllers\front\Cartcontroller@add_to_cart');
Route::post('cart_remove', '\App\Http\Controllers\front\Cartcontroller@cart_remove');
Route::post('update_cart', '\App\Http\Controllers\front\Cartcontroller@update_cart');

Route::controller(UserRegistration::class)->group(function () {

    Route::match(['get', 'post'], '/signup', 'register')->name('signup');
    Route::match(['get', 'post'], '/signin', 'login')->name('signin');
    Route::match(['get', 'post'], '/lost-password', 'lost_password')->name('lost_password');

    //Route::match(['get', 'post'], '/add_review', 'add_review')->name('add_review');
});






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
    Route::post('set_as_home', '\App\Http\Controllers\admin\CategoryController@set_as_home');

    Route::resource('/admin/subcategory', '\App\Http\Controllers\admin\SubcategoryController');
    Route::get('/admin/delete_subcategory', [SubcategoryController::class, 'destroy'])->name('delete_subcategory');
    Route::post('set_order_subcategory', '\App\Http\Controllers\admin\SubcategoryController@set_order');
    Route::post('product_show_subcategory', '\App\Http\Controllers\admin\ProductController@product_show_subcategory');

    Route::resource('/admin/brand', '\App\Http\Controllers\admin\BrandController');
    Route::get('/admin/delete_brand', [BrandController::class, 'destroy'])->name('delete_brand');
    Route::post('set_order_brand', '\App\Http\Controllers\admin\BrandController@set_order_brand');
    Route::post('set_as_home_brand', '\App\Http\Controllers\admin\BrandController@set_as_home_brand');


    Route::resource('/admin/banner', '\App\Http\Controllers\admin\BannerController');
    Route::get('/admin/delete_banner', [BannerController::class, 'destroy'])->name('delete_banner');

    Route::resource('/admin/product', '\App\Http\Controllers\admin\ProductController');
    Route::get('/admin/delete_product', [ProductController::class, 'destroy'])->name('delete_product');
    Route::get('remove_product_att/{pid}/{id}', [ProductController::class, 'remove_product_att'])->name('remove_product_att');
    Route::post('product_new', '\App\Http\Controllers\admin\ProductController@product_new');
    Route::post('/product_best_seller', [ProductController::class, 'product_best_seller'])->name('product_best_seller');
    
    Route::resource('admin/cms','App\Http\Controllers\admin\CmsController');
    Route::get('cms-delete',[CmsController::class,'destroy'])->name
    ('cms-delete');
    
    Route::resource('admin/size','App\Http\Controllers\admin\SizeController');
    Route::get('delete_size',[SizeController::class,'destroy'])->name('delete_size');

    Route::resource('admin/coupan','App\Http\Controllers\admin\CoupanController');
    Route::get('delete_coupan',[CoupanController::class,'destroy'])->name('delete_coupan');
    Route::post('change_status_coupan','App\Http\Controllers\admin\CoupanController@change_status_coupan');


    Route::resource('/admin/customer', '\App\Http\Controllers\admin\CustomerController');
    Route::get('/delete_customer', [CustomerController::class, 'destroy'])->name('delete_customer');
    Route::get('/admin/download/{filename}', [CustomerController::class, 'download_gst']);
    Route::post('change_status','App\Http\Controllers\admin\CustomerController@change_status');
       
    Route::resource('/admin/permission', '\App\Http\Controllers\admin\PermissionController');
    
    Route::resource('/admin/userpermission', '\App\Http\Controllers\admin\UserPermissionController');
    Route::get('delete_permission', [UserPermissionController::class, 'delete_permission'])->name('delete_permission');
    Route::get('destroyPermission', [UserPermissionController::class, 'destroyPermission'])->name('destroyPermission');
    

    Route::resource('/admin/adminuser', '\App\Http\Controllers\admin\Admin_userController');
    Route::get('/admin/delete_admin', [Admin_userController::class, 'destroy'])->name('delete_admin'); 

    Route::resource('/admin/subbanner', '\App\Http\Controllers\admin\SubbannerController');
    Route::get('/admin/delete_subbanner', [SubbannerController::class, 'destroy'])->name('delete_subbanner'); 

    Route::resource('/admin/blog', '\App\Http\Controllers\admin\BlogController');
    Route::get('delete_blog', [BlogController::class, 'destroy'])->name('delete_blog'); 

    Route::get('editimage/{id}', [ProductController::class, 'editimage'])->name('editimage');
    Route::post('editimage_store', [ProductController::class, 'editimage_store'])->name('editimage_store');
    Route::post('product_setbaseimage', [ProductController::class, 'product_setbaseimage'])->name('product_setbaseimage');
    Route::post('product_setbaseimghover', [ProductController::class, 'product_setbaseimghover'])->name('product_setbaseimghover');
    Route::get('product_removeimage/{pid}/{id}', [ProductController::class, 'product_removeimage'])->name('product_removeimage');


    Route::resource('/admin/brand', '\App\Http\Controllers\admin\BrandController');
    Route::get('/admin/delete_brand', [BrandController::class, 'destroy'])->name('delete_brand');
    Route::post('set_order_brand', '\App\Http\Controllers\admin\BrandController@set_order_brand');
    Route::post('set_as_home_brand', '\App\Http\Controllers\admin\BrandController@set_as_home_brand');
    Route::post('couponcheck', '\App\Http\Controllers\front\Cartcontroller@couponcheck');
    Route::post('removecoupon', '\App\Http\Controllers\front\Cartcontroller@removecoupon');
    
    
   
   

});

    Route::get('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

require __DIR__.'/auth.php';