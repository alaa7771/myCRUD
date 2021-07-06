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
Route::get('/', function () {
    return redirect('/all_student');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_student', 'StudentsController@addStudent')->name('student.add');


Route::post('/save_student', 'StudentsController@saveStd')->name('save.std');

Route::get('/all_student', 'StudentsController@allStd')->name('all.std');


Route::get('/show/{student_id}', 'StudentsController@showStd')->name('show.std');
Route::get('/edit/{student_id}', 'StudentsController@editStd')->name('edit.std');
Route::put('/update/{student_id}', 'StudentsController@updateStd')->name('update.std');
Route::delete('/delete/{student_id}', 'StudentsController@deleteStd')->name('delete.std');



