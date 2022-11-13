<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createResController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\ResController;
use App\Http\Controllers\homeController;
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

Route::get('/loginPage', function () {
    return view('login');
});

Route::post('showdata',[createResController::class,'insert']);
Route::get('/',[createResController::class,'insert']);
Route::get('addRestaurant', [createResController::class, 'add'])->name('add');
Route::get('viewRestaurant', [createResController::class, 'readdata'])->name('view');
Route::get('/',[createResController::class,'readdata']);
Route::post('login', [loginController::class, 'postLogin'])->name('login');
Route:: get('resinfo', [ResController::class, 'showdata'])->name('showinfo');
Route::get('forgotPassword', [loginController::class, 'forget'])->name('forget');
Route::get('verify', [loginController::class, 'forgetPass'])->name('forget.mail');
Route::get('reset', [loginController::class, 'forgetPass'])->name('otp.code');
Route::get('/delete/{id}', [createResController::class, 'delete'])->name('res.delete');
//Route::get('/editRes/{id}',[createResController::class, 'editinfo'])->name('res.edit');
//Route::post('/edit/{id}',[createResController::class,'edit']);
Route:: get('menu', [ResController::class, 'showmenu'])->name('showmenu');
Route:: get('menuinfo', [ResController::class, 'addmenu'])->name('addmenu');
Route::post('addmenu',[ResController::class,'insert'])->name('menu.add');
Route:: get('appetizer', [homeController::class, 'showapp'])->name('home.appetizer');
Route:: get('lunch', [homeController::class, 'showlunch'])->name('home.lunch');
Route:: get('dinner', [homeController::class, 'showdinner'])->name('home.dinner');
Route:: get('dessert', [homeController::class, 'showdessert'])->name('home.dessert');
Route:: get('drinks', [homeController::class, 'showdrink'])->name('home.drink');
Route:: get('/home', [homeController::class, 'showhome'])->name('home');
Route::get('booking',[homeController::class,'booking'])->name('book');
Route:: get('bookings', [ResController::class, 'showbooking'])->name('bookings');
Route::get('add-to-cart/{id}', [homeController::class, 'addToCart'])->name('add.to.cart');
Route::get('cart', [homeController::class, 'cart'])->name('cart');
Route::patch('update-cart', [homeController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [homeController::class, 'remove'])->name('remove.from.cart');