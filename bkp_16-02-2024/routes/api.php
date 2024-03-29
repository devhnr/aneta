<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Apicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//Route::post('/api/register', [Apicontroller::class, 'register']);

Route::post('/register','\App\Http\Controllers\api\Apicontroller@register');
Route::post('/login','\App\Http\Controllers\api\Apicontroller@login');
Route::post('/otp_verify','\App\Http\Controllers\api\Apicontroller@otp_verify');
Route::post('/category','\App\Http\Controllers\api\Apicontroller@category');
//Route::post('/items', [Apicontroller::class, 'store']);

