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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/test', 'TestController@test');
Route::get('/test/sql', 'TestController@sql');
Route::get('/test/skill', 'TestController@skill');
Route::get('/test/user-skill', 'TestController@userSkill');
Route::auth();

Route::resource('/skill', 'SkillController')->only([
    'index', 'store', 'destroy'
]);

Route::get('/', 'HomeController@index')->name('home');