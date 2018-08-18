<?php

use App\Http\Middleware\checkAdmin;
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

// Route::get('/', function () {
//     return view('homeshop');
// });
Route::get('/menu','HomeController@menu')->name('menu');
Route::get('/menu/{product_id}','HomeController@product');
Route::get('/test','ProductsController@hotSalesProducts');
Route::get('/product','HomeController@addProduct')->middleware([checkAdmin::class]);
Route::post('addNewProduct','ProductsController@addProduct');
Route::get('editProduct/{product_id}','HomeController@editProduct');
Route::post('updateProduct','ProductsController@editProduct');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/storage/images/{filename}', function ($filename)
{
    $path = storage_path('public/images/' . $filename);
    if (!Storage::exists('public/images/' . $filename)) {
        abort(404);
    }
    $file = Storage::get('public/images/' . $filename);
    $type = Storage::mimeType('public/images/' . $filename);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
