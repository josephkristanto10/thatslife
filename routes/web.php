<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
// Route::get('/liststory', function () {
//     return view('storylist');
// });
// Route::get('/detailstory', function () {
//     return view('detailstory');
// });
Route::get('/detailstory/{id}', 'storycontroller@indexdetail');
Route::get('/addcomment', 'storycontroller@addcommment');
Route::resource('liststory', 'storycontroller');
Route::resource('admin', 'admincontroller');
Route::post("/checklogin",'admincontroller@login')->name("checklogin");
Route::get("/dashboard",'admincontroller@indexdashboard')->name("gotodashboard");
Route::get("daftarcerita", "admincontroller@indexliststory");
Route::post('/addstory', 'storycontroller@addstory')->name('addstory');
Route::post('/deletestory', 'storycontroller@deletestory')->name('deletestory');
Route::post('/editstory', 'storycontroller@editstory')->name('editstory');
Route::get("getdatatablecerita", "admincontroller@getliststory")->name('getdatatablecerita');
