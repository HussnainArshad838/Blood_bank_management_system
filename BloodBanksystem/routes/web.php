<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource("/bloodbank", RecordsController::class);
Route::resource("/bloodbank/inventory", InventoryController::class);
Route::get('/home', 'App\Http\Controllers\RecordsController@index')->name('home');
Route::get('/inventory', 'App\Http\Controllers\RecordsController@inventory')->name('inventory');
Route::get('/inventory/newinventory', 'App\Http\Controllers\RecordsController@createinventory')->name('/inventory/newinventory');
Route::post('/storeinventory', 'App\Http\Controllers\RecordsController@storeinventory')->name('storeinventory');
Route::get('/about', 'App\Http\Controllers\RecordsController@about')->name('about');
Route::get('/contact', 'App\Http\Controllers\RecordsController@contact')->name('contact');
Route::get('/bloodbank/view/{id}/edit', 'App\Http\Controllers\RecordsController@edit')->name('/bloodbank/view/{id}/edit');
Route::get('/inventory/{id}/edit1', 'App\Http\Controllers\InventoryController@edit')->name('inventory.edit');
Route::patch('/inventory/{id}', 'App\Http\Controllers\InventoryController@update')->name('inventory.update');

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@verify')->name('login');
Route::get('/signup', 'App\Http\Controllers\LoginController@register')->name('signup');
Route::post('/signup', 'App\Http\Controllers\LoginController@registration')->name('signup');

// Route::get('login', [LoginController::class, 'index'])->name('login');
// Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post'); 
// Route::get('signup', 'App\Http\Controllers\LoginController@registration')->name('signup');
// Route::post('post-registration', [LoginController::class, 'postRegistration'])->name('register.post'); 
// Route::get('bloodbank', [LoginController::class, 'dashboard']); 
// //Route::get('logout', [LoginController::class, 'logout'])->name('logout');

