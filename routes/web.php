<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderDBController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/order', [OrderDBController::class, 'index'])->name('order.index');
Route::get('/order/create', [OrderDBController::class, 'create'])->name('order.create');
Route::post('/order', [OrderDBController::class, 'store'])->name('order.store');
Route::get('/order', [OrderDBController::class, 'show'])->name('order.show');
Route::get('/order/{order}/edit', [OrderDBController::class, 'edit'])->name('order.edit');
Route::put('/order/{order}', [OrderDBController::class, 'update'])->name('order.update');
Route::get('/order/{order}', [OrderDBController::class, 'destroy'])->name('order.destroy');

// Route::get('/show', [OrderDBController::class, 'show']);
// Route::get('/destroy/{id}', [OrderDBController::class, 'destroy']);
Route::get('/', [OrderDBController::class, 'index']);

Route::get('/check-connection', function () {
    try {
        DB::connection()->getRawPdo();
        echo "Connected successfully to the database!";
    } catch (\Exception $e) {
        die("Could not connect to the database. Error: " . $e);
    }
});
