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
Auth::routes();


Route::group([
  'prefix' => 'admin', 
  'middleware' => ['web']], function () {   
      Route::get('/', 'Admin\BackendController@index');   
      Route::resource('/tags', 'Admin\TagsController');
      Route::resource('/categories', 'Admin\CategoriesController');
      Route::resource('/posts', 'Admin\PostsController');
      Route::resource('/portfolios', 'Admin\PortfoliosController');
      Route::resource('/comments', 'Admin\CommentsController');
});
// widok strony głównej
Route::get('/', [
  'uses' => 'Frontend\FrontendController@index',
  'as' => 'frontend.index'
  ]);

// Blog
Route::group(['prefix' => 'blog'], function() {
  Route::get('/', [
    'uses' => 'Frontend\BlogController@index',
    'as' => 'blog.index'
  ]);
  Route::get('/post/{slug}', [
    'uses' => 'Frontend\BlogController@show',
    'as' => 'blog.show'
  ]);
  Route::get('/category/{id}', [
    'uses' => 'Frontend\BlogController@category',
    'as' => 'blog.category'
  ]);
  Route::get('/tag/{id}', [
    'uses' => 'Frontend\BlogController@tag',
    'as' => 'blog.tag'
  ]);
});

//Portfolio
Route::group(['prefix' => 'portfolio'], function() {
  Route::get('/', [
    'uses' => 'Frontend\PortfoliosController@index',
    'as' => 'portfolio.index'
  ]);
  Route::get('/{slug}', [
    'uses' => 'Frontend\PortfoliosController@show',
    'as' => 'portfolio.show'
  ]);
});

//Pages
Route::get('/oFirmie', [
  'uses' => 'Frontend\FrontendController@oFirmie',
  'as' => 'frontend.oFirmie'
]);
Route::get('/oferta', [
  'uses' => 'Frontend\FrontendController@oferta',
  'as' => 'frontend.oferta'
]);
Route::get('/kontakt', [
  'uses' => 'Frontend\FrontendController@kontakt',
  'as' => 'frontend.kontakt'
]);