<?php
/*    \Illuminate\Support\Facades\Auth::loginUsingId(1);*/
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
        $data = [
            'voyager' => 'LaravelVoyagerAdmin from  Laravel Framework 5.5.40',
            'powered' => 'Poered By Homestead',
        ];
        return view('welcome', compact('data'));
    });

    Route::get('/student', 'StudentInfoController@index');


    Route::get('about', 'SitesInfoController@about');
    Route::get('/contact', 'SitesINfoController@contact');

//articles
    /**
     * 可以使用Route::resource('/articles','ArticleController'); 下面这么多复杂
     *  冗余的写法
     * Route::get('/articles','ArticleController@index');
     * Route::get('/articles/create','ArticleController@create');
     * Route::get('/articles/{id}','ArticleController@show');
     * Route::post('/articles','ArticleController@store');
     * Route::get('/articles/{id}/edit','ArticleController@edit');
     * Route::post('/articles/{id}/update','ArticleController@update');
     */
    Route::resource('/articles', 'ArticleController');
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

    /***
     * LaravelVoyager Admin
     */
    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });