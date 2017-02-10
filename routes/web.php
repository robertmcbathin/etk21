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
Route::group(['middleware' => 'web'], function()
{
    Route::get('/', 'SiteController@getMainPage');
    Route::get('/news', [
        'uses' => 'SiteController@getNewsPage',
        'as' => 'news'
        ]);
    Route::get('/news/{id}', [
        'uses' => 'SiteController@getArticle',
        'as' => 'article'
        ]);
    Route::get('/contacts', [
        'uses' => 'SiteController@getContactsPage',
        'as' => 'contacts'
        ]);
    Route::get('/about', function()
    {
        return view('pages.about');
    })->name('about');
    Route::get('/deposit-points', function()
    {
        return view('pages.deposit-points');
    })->name('deposit-points');

});
Route::group(['middleware' => 'auth'], function()
{

    Route::get('user/profile', function()
    {
        // К этому маршруту также будет привязан фильтр auth.
    });
});