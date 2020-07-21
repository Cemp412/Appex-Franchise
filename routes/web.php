<?php

use RealRashid\SweetAlert\Facades\Alert;


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
    return view('auth.login');

     Alert::success('Success Title', 'Success Message');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add','FranchiseController@add');

Route::post('/curd','FranchiseController@save');

Route::get('view','FranchiseController@view');

Route::get('/curds/view/{id}','FranchiseController@display');

Route::get('/curds/edit/{id}','FranchiseController@edit');

Route::post('/update','FranchiseController@update');

Route::get('/curds/delete/{id}','FranchiseController@delete');

Route::get('addStudent','StudentController@studentform');

Route::post('/student','StudentController@saveStudent');

Route::get('viewStudent','StudentController@viewStudent');

Route::get('/curds/viewStudent/{id}','StudentController@displayStudent');

Route::get('/curds/editStudent/{id}','StudentController@editStudent');

Route::post('/studentUpdate','StudentController@upadteStudent');

Route::get('/curds/deleteStudent/{id}','StudentController@deleteStudent');

Route::get('feeTable','FeeController@feeTable');

Route::get('/curds/addfee/{id}','FeeController@addFee');

Route::post('/storedata','FeeController@storedata');

Route::get('showFees','FeeController@showFee');

Route::get('/curds/delete/{id}','FeeController@deleteFees');

Route::get('showAll','StudentController@allStudent');

Route::get('addCertificate','FranchiseController@addCertificate');

Route::get('/curd/add/{id}','FranchiseController@editCertificate');

Route::post('saveCertificate','FranchiseController@saveCertificate');
Route::get('viewCertificate','FranchiseController@viewCertificate');

Route::get('myProfile','StudentController@studentProfile');



