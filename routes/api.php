<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// route product controller
Route::get('produts', [ProductController::class, 'all']);

// route procuct category controller
Route::get('categories', [ProductCategoryController::class, 'all']);

// route login/register
Route::get('register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'login']);

// route user controller
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('logout', [UserController::class, 'updateProfile']);
    Route::get('logout', [UserController::class, 'logout']);

    // route transaction controller
    Route::get('transaction', [TransactionController::class, 'all']);
});
