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
    $user = \Auth::user();
    return view('front.quiEstFluid', compact('user'));
});

Route::post('/newsletter', 'NewsletterController@store');

Route::get('/', 'FrontController@index');
Route::get('/expo', 'FrontController@showExpo');
Route::get('/expo/event/{id}', 'FrontController@showOneExpo')->name('event');
Route::get('/workshop', 'FrontController@showWorkshop');
Route::get('/excursion', 'FrontController@showExcursion');
Route::get('/soiree', 'FrontController@showSoiree');

Route::get('/shop', 'FrontController@showShop');

/* CONTACT */
Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');


Auth::routes();


Route::group(['prefix'=>'espace'],function(){
    Route::resource('/membre', 'MembreController')->middleware('auth');
});


Route::group(['prefix'=>'admin'],function(){
    Route::resource('admin', 'AdminController')->middleware('auth');
    Route::resource('partenaire', 'PartenaireController')->middleware('auth');
    Route::resource('utilisateurs', 'UtilisateursController')->middleware('auth');
    Route::resource('produits', 'ProduitsController')->middleware('auth');
    Route::resource('/event', 'EventController')->middleware('auth');
});



Route::get('/home', 'HomeController@index')->name('home');
