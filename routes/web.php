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


Route::resource('/', OrderDBController::class);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/check-connection', function () {
    try {
        DB::connection()->getRawPdo();
        echo "Connected successfully to the database!";
    } catch (\Exception $e) {
        die("Could not connect to the database. Error: " . $e);
    }
});
