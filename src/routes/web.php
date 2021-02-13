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
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user routes 
Route::get('/users/', 'usercontroller@index')->name('user')->middleware('auth'); 
Route::post('/users/store', 'usercontroller@store')->name('user.store')->middleware('auth'); 
Route::post('/users/update', 'usercontroller@update')->name('user.update')->middleware('auth'); 
Route::get('/users/{id}', 'usercontroller@show')->name('user.show')->middleware('auth'); 
Route::get('/user/', 'usercontroller@myprofile')->name('user.my')->middleware('auth');
Route::post('user', 'UserController@update_avatar');

// Route::get('/user/', 'UserController@profile')->name('user')->middleware('auth'); 


 //Permission routes 
Route::get('/permission/', 'PermissionController@index')->name('permission')->middleware('auth'); 

 //Group routes 
Route::get('/group/', 'GroupController@index')->name('group')->middleware('auth'); 
Route::get('/group/create', 'GroupController@create')->name('group.create')->middleware('auth'); 
Route::post('/group/store', 'GroupController@store')->name('group.store')->middleware('auth'); 
Route::get('/group/edit', 'GroupController@edit')->name('group.edit')->middleware('auth'); 
Route::post('/group/update', 'GroupController@update')->name('group.update')->middleware('auth'); 
Route::get('/group/{id}', 'GroupController@show')->name('group.show')->middleware('auth');
Route::get('/group/{id}/delete', 'GroupController@destroy')->name('group.delete')->middleware('auth');

//Judge Routes
Route::get('/judge/', 'JudgeController@index')->name('judge.index')->middleware('auth'); 
Route::get('/judge/create', 'JudgeController@create')->name('judge.create')->middleware('auth');
Route::POST('/judge/store', 'JudgeController@store')->name('judge.store')->middleware('auth');
Route::get('/judge/{id}', 'JudgeController@show')->name('judge.show')->middleware('auth');
Route::get('/judge/{id}/edit', 'JudgeController@edit')->name('judge.edit')->middleware('auth'); ; 
Route::post('/judge/update', 'JudgeController@update')->name('judge.update')->middleware('auth'); 
Route::get('/judge/{id}/delete', 'JudgeController@destroy')->name('judge.delete')->middleware('auth');

//Category Routes
Route::get('/category/', 'CaseCategorieController@index')->name('category.index')->middleware('auth'); 
Route::get('/category/create', 'CaseCategorieController@create')->name('category.create')->middleware('auth');
Route::POST('/category/store', 'CaseCategorieController@store')->name('category.store')->middleware('auth');
Route::get('/category/{id}', 'CaseCategorieController@show')->name('category.show')->middleware('auth');
Route::get('/category/{id}/edit', 'CaseCategorieController@edit')->name('category.edit')->middleware('auth'); ; 
Route::post('/category/update', 'CaseCategorieController@update')->name('category.update')->middleware('auth'); 
Route::get('/category/{id}/delete', 'CaseCategorieController@destroy')->name('category.delete')->middleware('auth');

//Lawyer Routes
Route::get('/lawyer/', 'LawyerController@index')->name('lawyer.index')->middleware('auth'); 
Route::get('/lawyer/create', 'LawyerController@create')->name('lawyer.create')->middleware('auth');
Route::POST('/lawyer/store', 'LawyerController@store')->name('lawyer.store')->middleware('auth');
Route::get('/lawyer/{id}', 'LawyerController@show')->name('lawyer.show')->middleware('auth');
Route::get('/lawyer/detail/{id}', 'LawyerController@detail')->name('lawyer.detail')->middleware('auth'); 
Route::get('/lawyer/{id}/edit', 'LawyerController@edit')->name('lawyer.edit')->middleware('auth'); ; 
Route::post('/lawyer/update', 'LawyerController@update')->name('lawyer.update')->middleware('auth'); 
Route::get('/lawyer/{id}/delete', 'LawyerController@destroy')->name('lawyer.delete')->middleware('auth');

//Activity_Types Routes
Route::get('/activity/', 'ActivityTypeController@index')->name('activitytype.index')->middleware('auth'); 
Route::get('/activity/create', 'ActivityTypeController@create')->name('activitytype.create')->middleware('auth');
Route::POST('/activity/store', 'ActivityTypeController@store')->name('activitytype.store')->middleware('auth');
Route::get('/activity/{id}', 'ActivityTypeController@show')->name('activitytype.show')->middleware('auth');
Route::get('/activity/{id}/edit', 'ActivityTypeController@edit')->name('activitytype.edit')->middleware('auth'); ; 
Route::post('/activity/update', 'ActivityTypeController@update')->name('activitytype.update')->middleware('auth'); 
Route::get('/activity/{id}/delete', 'ActivityTypeController@destroy')->name('activitytype.delete')->middleware('auth');

//Client Routes
Route::get('/client/', 'ClientController@index')->name('client.index')->middleware('auth'); 
Route::get('/client/create', 'ClientController@create')->name('client.create')->middleware('auth');
Route::POST('/client/store', 'ClientController@store')->name('client.store')->middleware('auth');
Route::get('/client/{id}', 'ClientController@show')->name('client.show')->middleware('auth');
Route::get('/client/{id}/edit', 'ClientController@edit')->name('client.edit')->middleware('auth'); ; 
Route::post('/client/update', 'ClientController@update')->name('client.update')->middleware('auth'); 
Route::get('/client/{id}/delete', 'ClientController@destroy')->name('client.delete')->middleware('auth');

//Kase Routes
Route::get('/kase/', 'KaseController@index')->name('kase.index')->middleware('auth'); 
Route::get('/kase/create', 'KaseController@create')->name('kase.create')->middleware('auth');
Route::POST('/kase/store', 'KaseController@store')->name('kase.store')->middleware('auth');
Route::get('/kase/{id}', 'KaseController@show')->name('kase.show')->middleware('auth');
Route::get('/kase/{id}/edit', 'KaseController@edit')->name('kase.edit')->middleware('auth'); ; 
Route::post('/kase/update', 'KaseController@update')->name('kase.update')->middleware('auth'); 
Route::get('/kase/{id}/delete', 'KaseController@destroy')->name('kase.delete')->middleware('auth');
Route::get('/kase/{id}/close', 'KaseController@close')->name('kase.close')->middleware('auth');

//Court Routes
Route::get('/court/', 'CourtController@index')->name('court.index')->middleware('auth'); 
Route::get('/court/create', 'CourtController@create')->name('court.create')->middleware('auth');
Route::POST('/court/store', 'CourtController@store')->name('court.store')->middleware('auth');
Route::get('/court/{id}', 'CourtController@show')->name('court.show')->middleware('auth');
Route::get('/court/{id}/edit', 'CourtController@edit')->name('court.edit')->middleware('auth'); ; 
Route::post('/court/update', 'CourtController@update')->name('court.update')->middleware('auth'); 
Route::get('/court/{id}/delete', 'CourtController@destroy')->name('court.delete')->middleware('auth');

//Hiring_Types Routes
Route::get('/hiring/', 'HiringTypeController@index')->name('hiringtype.index')->middleware('auth'); 
Route::get('/hiring/create', 'HiringTypeController@create')->name('hiringtype.create')->middleware('auth');
Route::POST('/hiring/store', 'HiringTypeController@store')->name('hiringtype.store')->middleware('auth');
Route::get('/hiring/{id}', 'HiringTypeController@show')->name('hiringtype.show')->middleware('auth');
Route::get('/hiring/{id}/edit', 'HiringTypeController@edit')->name('hiringtype.edit')->middleware('auth'); ; 
Route::post('/hiring/update', 'HiringTypeController@update')->name('hiringtype.update')->middleware('auth'); 
Route::get('/hiring/{id}/delete', 'HiringTypeController@destroy')->name('hiringtype.delete')->middleware('auth');

//Witnes Routes
Route::get('/witnes/', 'WitnesController@index')->name('witnes.index')->middleware('auth'); 
Route::get('/witnes/create', 'WitnesController@create')->name('witnes.create')->middleware('auth');
Route::POST('/witnes/store', 'WitnesController@store')->name('witnes.store')->middleware('auth');
Route::get('/witnes/{id}', 'WitnesController@show')->name('witnes.show')->middleware('auth');
Route::get('/witnes/{id}/edit', 'WitnesController@edit')->name('witnes.edit')->middleware('auth'); ; 
Route::post('/witnes/update', 'WitnesController@update')->name('witnes.update')->middleware('auth'); 
Route::get('/witnes/{id}/delete', 'Witnesontroller@destroy')->name('witnes.delete')->middleware('auth');

//hiring Routes
Route::get('/hirings/', 'CaseHiringController@index')->name('hiring.index')->middleware('auth'); 
Route::get('/hirings/create/{id}', 'CaseHiringController@create')->name('hiring.create')->middleware('auth');
Route::POST('/hirings/store', 'CaseHiringController@store')->name('hiring.store')->middleware('auth');
Route::get('/hirings/{id}', 'CaseHiringController@show')->name('hiring.show')->middleware('auth');
Route::get('/hirings/{id}/edit', 'CaseHiringController@edit')->name('hiring.edit')->middleware('auth'); ; 
Route::post('/hirings/update', 'CaseHiringController@update')->name('hiring.update')->middleware('auth'); 
Route::get('/hirings/{id}/delete', 'CaseHiringController@destroy')->name('hiring.delete')->middleware('auth');

// payment route

Route::get('/payment/{id}/create', 'BillController@create')->name('payment.create')->middleware('auth');
Route::post('/payment/store', 'BillController@store')->name('payment.store')->middleware('auth');
// case result route

Route::get('/kase_reult/{id}/create', 'KaseController@create_result')->name('kase.create_result')->middleware('auth');
Route::post('/kase_reult/store', 'KaseController@store_result')->name('kase.store_result')->middleware('auth');