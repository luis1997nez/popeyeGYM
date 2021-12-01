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
    return view('welcome');
});

Auth::routes();




Route::get('/home', 'HomeController@show')->name('home.create');
Route::post('/store','HomeController@store')->name('home.store');
Route::get('/home','HomeController@show')->name('home.show');

Route::get('errors', function(){
	abort('404');

});


Route::get('/catalogo', 'CatalogoController@index')->name('catalogo');
Route::get('/quienessomos','HomeController@quienessomos')->name('quienesomos');
Route::get('/welcome','HomeController@welcome')->name('welcome');
Route::get('/products','CatalogoController@show')->name('products.show');


//Route::get('/qsomos','QsomosController@index')->name('qsomos');
//Route::get('/catalogo','CatalogoController@index')->name('catalogo');


//rutas

	Route::middleware(['auth'])->group(function(){
			//Roles

							Route::resource('roles','RolesController');

			// Productos


							Route::post('products/store','ProductController@store')->name('products.store')
								->middleware('permission:products.create');
							
							Route::get('products','ProductController@index')->name('products.index')
								->middleware('permission:products.index');
							
							Route::get('products/create','ProductController@create')->name('products.create')
								->middleware('permission:products.create');
							
							Route::put('products/{product}','ProductController@update')->name('products.update')
								->middleware('permission:products.edit');
							
							Route::get('products/{product}','ProductController@show')->name('products.show')
								->middleware('permission:products.show');
							
							Route::delete('products/{product}','ProductController@destroy')->name('products.destroy')
								->middleware('permission:products.destroy');

							Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
								->middleware('permission:products.edit');


			// Usuario


							
							Route::get('users','UserController@index')->name('users.index')
								->middleware('permission:users.index');
							
							Route::put('users/{user}','UserController@update')->name('users.update')
								->middleware('permission:users.edit');
							
							Route::get('users/{user}','UserController@show')->name('users.show')
								->middleware('permission:users.show');
							
							Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
								->middleware('permission:users.destroy');

							Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
								->middleware('permission:users.edit');
	});





