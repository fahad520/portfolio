<?php

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

use Illuminate\Support\Facades\Route;


    Route::get('/', 'front\HomeController@index')->name('home');
    Route::get('about', 'front\AboutController@index')->name('about');
    Route::get('portfolio', 'front\PortfolioController@index')->name('portfolio');
    Route::get('contact', 'front\ContactUsController@index')->name('contact');
    Route::get('services', 'front\ServicesController@index')->name('services');
    Route::get('blogs', 'front\BlogController@index')->name('blogs');
    Route::get('single', 'front\SingleBlogController@index')->name('single');
    Route::get('privacy', 'front\PrivacyPolicyController@index')->name('privacy');


Route::namespace('admin')->group(function (){
Route::get('/','DashboardController@index');
});