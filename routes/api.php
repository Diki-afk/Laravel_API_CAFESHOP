<?php

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
//menggunakan prefix v1 pada route jadi ketika mengakses api setelah domain diikuti v1 terlebih dahulu
Route::prefix('v1')->group(function() {
	Route::post('login', 'AuthController@login')->name('login');//route untuk function login yang terletak pada controller AuthController untuk mengakses ini menggunakan postman gunakan domain http://tugasakhir.test/v1/login
	Route::post('register', 'AuthController@register');
	//route untuk function register yang terletak pada controller AuthController http://tugasakhir.test/v1/register
	Route::patch('update/{id?}', 'AuthController@update');
	//route untuk function update yang terletak pada controller AuthController http://tugasakhir.test/v1/update
	Route::middleware(['auth:api'])->group(function () {
    	Route::post('logout', 'AuthController@logout');
	});//routing ini persifat private karena yang bisa mengakses hanyalah user yang telah login http://tugasakhir.test/v1/logout

	Route::get('categories/random/{count}', 'CategoryController@random');
	//route untuk function random yang terletak pada controller CategoryController http://tugasakhir.test/v1/categories/random/banyakData
	Route::get('categories', 'CategoryController@index');
	//route untuk function index yang terletak pada controller CategoryController http://tugasakhir.test/v1/categories
	Route::get('categories/slug/{slug}', 'CategoryController@slug');
	//route untuk function slug yang terletak pada controller CategoryController http://tugasakhir.test/v1/categories/slug/NilaiSlug

	Route::get('list/top/{count}', 'MenuController@top');//route untuk function top yang terletak pada controller MenuController http://tugasakhir.test/v1/list/top/banyakData
	Route::get('list', 'MenuController@index');//route untuk function index yang terletak pada controller MenuController http://tugasakhir.test/v1/list
	Route::get('list/slug/{slug}', 'MenuController@slug');//route untuk function slug yang terletak pada controller MenuController http://tugasakhir.test/v1/list/slug/NilaiSlug
	Route::get('list/search/{keyword}', 'MenuController@search');//route untuk function search yang terletak pada controller MenuControllerhttp://tugasakhir.test/v1/list/search/keyworddata
	

});