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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('updatetest', 'AdminController@updatetest');

// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/', 'HomeController@index')->name('user_dashboard');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@admin')->name('admin_dashboard');


//whole


    Route::post('submit','DataController@create');
Route::post('test','HomeController@test');
Route::get('add_student','AdminController@add_student');
Route::get('student_list','AdminController@student_list');
Route::get('student_list','AdminController@list');



//update

//Route::get('edit-records','AdminController@update');
//Route::get('edit/{id}','AdminController@show');
//Route::post('edit/{id}','AdminController@edit');
Route::get('/edit/{id}','AdminController@edit')->name('edit');
Route::post('/update/{id}','AdminController@update')->name('update');

//delete

Route::get('delete-records','AdminController@delete');
Route::get('delete/{id}','AdminController@destroy');
//Route::post('/delete/{id}','AdminController@delete')->name('destroy');

//logout button
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//attendence
Route::get('attendence_sheet','AdminController@attendence_sheet');
//Route::get('attendence_sheeet','AdminController@attendence_sheeet');
Route::post('/add_attendence','AdminController@store')->name('add_attendence');
Route::get('attendence_list','AdminController@attendence_list');

Route::get('/edit_attendence/{id}','AdminController@edit_attendence')->name('edit_attendence');
Route::post('/update_attendence/{id}','AdminController@update_attendence')->name('update_attendence');
Route::post('delete_attendence/{id}','AdminController@delete_attendence')->name('delete_attendence');


//ajaxattendence

Route::resource('posts','TestController');
Route::post('post/changeStatus', array('as' => 'changeStatus', 'uses' => 'TestController@changeStatus'));

Route::post('/addattendence','AttendenceController@store');


//Route::resource('test','TestController');

//Route::get('mouse','AdminController@mouse');
//Route::PUT('/editatt/{id}','AdminController@ajaxedit');

//ajax controller

Route::get('addme','AjaxController@addstudent');
Route::post('/addmee','AjaxController@store');
Route::post('/editmee/{id}','AjaxController@ajaxedit');
Route::delete('/delete/{id}','AjaxController@delete');
//Route::get('/editme/{id}','AttendenceController@edit');
Route::post('/editattendence/{id}','AjaxController@editattendence');

Route::delete('/deleteattendence/{id}','AjaxController@deleteattendence');
Route::post('/addattendence','AttendenceController@store');

//documents
//Route::get('documents','AdminController@documents');
//Route::post('documentupload','AdminController@documentupload');
Route::get('documents', 'AdminController@documentss')->name('documents');
Route::post('documents', 'AdminController@documentupload')->name('documentupload');
Route::post('/imageUpload','AdminController@postImage');
//Route::post('/imageUpload','AdminController@postdata');
Route::delete('/deletedata/{id}','AjaxController@deletedata');
//Route::patch('/editdata/{id}','AjaxController@editdata');
Route::get('/editfile/{id}','AjaxController@editfile');
Route::put('/updatedata/{id}','AjaxController@updatedata');
//Route::get('editfile/{id}','AdminController@editfile');





























//lag urls
Route::get('stulist','AdminController@stulist');
Route::get('addstu','AdminController@addstu');
Route::get('test','TestController@dropzone');
Route::post('dropzoneupload','TestController@upload')->name('dropzoneupload');




});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/notes','AdminController@notes');







