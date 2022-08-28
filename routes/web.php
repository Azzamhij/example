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

#Route::get('/', function () {
   # $data=[];
   # $data['id']=5;
  #  $data['name']="Azzam Hijazi";
 #   return view('welcome', $data);
#});
#Route::get('/show-number/{id}', function ($id) {
 #   return $id;
#})->name('a');
#Route::get('/show-string/{id?}', function () {
 #   return "string";
#})->name('b');

#Route::namespace('Front')->group(function (){
 #  Route::get('users','UserController@showadminname');
#});
#Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    #Route::get('show','UserController@showUserName');
    #Route::delete('delete','UserController@showUserName');
    #Route::get('edit','UserController@showUserName');
   # Route::put('update','UserController@showUserName');
   ## Route::get('/',function(){
  #      return 'work';
 #   });
#});
/*Route::prefix('users')->group(function() {
    Route::get('show', 'UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::get('edit', 'UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
});*/
#Route::get('check',function (){
 #   return 'middleware';
#})->middleware('auth');

#Route::get('second', 'Admin\SecondController@showstring');
/*Route::group(['namespace'=>'Admin','middleware'=>'auth'],function (){
    Route::get('second', 'SecondController@showstring0');
});*/
#Route::group(['namespace'=>'Admin'],function (){
    #Route::get('second', 'SecondController@showstring0')->middleware('auth');
   # Route::get('second1', 'SecondController@showstring1');
  #  Route::get('second2', 'SecondController@showstring2');
 #   Route::get('second3', 'SecondController@showstring3');
#});
#Route::get('login',function(){
 #   return "U must login";
#})->name('login');
#Route::group(['middleware'=>'auth'],function(){
 #   Route::get('users','UserController@index');
#});
#Route::get('users','UserController@index')->middleware('auth');
#Route::resource('news','NewsController');
/*
Route::get('news','NewsController@show');
Route::post('news','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('news/{id}/edit','NewsController@edit');
Route::post('update/{id}','NewsController@update');
Route::delete('news/{id}','NewsController@delete');
*/
#Route::get('index', 'Front\UserController@showindex');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

