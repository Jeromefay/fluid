<?php
use Illuminate\Http\Request;
use App\Order;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/quiestfluid', function () {
    return view('front.quiEstFluid');
});
Route::get('/', 'FrontController@index');
Route::get('/expo', 'FrontController@showExpo');
Route::get('/workshop', 'FrontController@showWorkshop');
Route::get('/excursion', 'FrontController@showExcursion');
Route::get('/soiree', 'FrontController@showSoiree');

Route::get('/shop', 'FrontController@showShop');

/* CONTACT */
Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');


Auth::routes();

Route::group(['prefix'=>'membre'],function(){
    Route::resource('/', 'MembreController')->middleware('auth');
});






Route::group(['prefix'=>'admin'],function(){
    Route::resource('/', 'AdminController')->middleware('auth');
    Route::resource('partenaire', 'PartenaireController')->middleware('auth');
    Route::resource('produits', 'ProduitsController')->middleware('auth');
    Route::resource('utilisateurs', 'UtilisateursController')->middleware('auth');
});

Route::get('/home', 'HomeController@index')->name('home');
