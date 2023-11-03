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

// module's
1. blog
2. catalogue
3. catering
4. clinic
5. company-profile
6. e-learning
7. event-organizer
8. gallery
9. hotel
10. hrm
11. landing-page
12. online-shop
*/


Route::get('/', 'JinggacloudController@index');
Route::post('/readmore', 'JinggacloudController@readmore');
Route::post('/formmail', 'JinggacloudController@formmail');
Route::post('/sendmail', 'JinggacloudController@sendmail');
Route::post('/ordernow', 'JinggacloudController@ordernow');
Route::post('/order', 'JinggacloudController@order');
Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
