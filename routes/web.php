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
    Route::get('/cards', [
        'uses' => 'CardController@getCardsPage',
        'as' => 'cards'
        ]);
    Route::get('/cards/{id}', [
        'uses' => 'CardController@getCard',
        'as' => 'card'
        ]);
    Route::get('/faq', [
        'uses' => 'SiteController@getFaqPage',
        'as' => 'faq'
        ]);
    Route::get('/contacts', [
        'uses' => 'SiteController@getContactsPage',
        'as' => 'contacts'
        ]);
    Route::get('/ask', [
        'uses' => 'SiteController@getAskPage',
        'as' => 'ask'
        ]);
    Route::post('/ask', [
        'uses' => 'SiteController@postQuestion',
        'as' => 'ask.add.post'
        ]);
    Route::get('/about', function()
    {
        return view('pages.about');
    })->name('about');
    Route::get('/deposit-points', function()
    {
        return view('pages.deposit-points');
    })->name('deposit-points');
    Route::get('/sell-points', function()
    {
        return view('pages.sell-points');
    })->name('sell-points');
    Route::get('/how-to-refill', function()
    {
        return view('pages.how-to-refill');
    })->name('how-to-refill');
    Route::get('/how-to-refill/sberbank', function()
    {
        return view('pages.how-to-refill-sberbank');
    })->name('how-to-refill-sberbank');
    Route::get('/law', function()
    {
        return view('pages.law');
    })->name('law');

});

Route::group(['prefix' => 'sudo'], function () {
    Route::get('login', function ()    {
        return view('sudo.login');
    })->name('sudo.login');
    Route::post('login', [
        'uses' => 'UserController@postLogin',
        'as' => 'sudo.login.post' 
        ]);
    Route::get('logout', [
        'uses' => 'UserController@postLogout',
        'as' => 'sudo.logout.post' 
        ]);
    Route::get('dashboard', function ()    {
        return view('sudo.pages.dashboard');
    })->name('sudo.pages.dashboard');
});

Route::group(['middleware' => 'auth'], function()
{
Route::group(['prefix' => 'sudo'], function () {
    Route::get('dashboard', function ()    {
        return view('sudo.pages.dashboard');
    })->name('sudo.pages.dashboard');
    });
});