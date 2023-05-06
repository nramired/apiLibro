<?php
use App\Http\Controllers\API\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('book', [BookController::class, 'index']);
Route::post('book', [BookController::class, 'store']);
Route::get('book/{book}', [BookController::class, 'show']);
Route::put('book/{book}', [BookController::class, 'update']);
Route::delete('book/{book}', [BookController::class, 'destroy']);