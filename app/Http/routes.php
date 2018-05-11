<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('cpass','PageController@cpass');


Route::get('/home', 'PageController@home1');
Route::get('/about', 'PageController@about');
Route::get('/login', 'PageController@login');
Route::get('/register', 'PageController@register');
Route::get('/contact', 'PageController@contact');
Route::post('public/sregister', 'PageController@studentregister');

Route::post('public/slogin', 'PageController@studentlogin');




Route::get('/dashboard', 'PageController@dashboard');
Route::get('/Course', 'PageController@course');
Route::get('/Department', 'PageController@department');
Route::get('/Staff', 'PageController@staff');
Route::get('/Staffrole', 'PageController@staffrole');
Route::get('/Subject', 'PageController@subject');
Route::post('public/staffroler', 'StaffRoleController@staffrolestore');
Route::post('public/staffr', 'PageController@staffregister');
Route::post('public/deptr', 'StaffRoleController@deptr');
Route::post('public/courser', 'StaffRoleController@courser');

Route::get('/cv', 'PageController@cv');

Route::post('public/subr', 'StaffRoleController@subjectr');


Route::get('/logout','PageController@logout');





Route::get('/sdashboard', 'PageController@sdashboard');
Route::get('/sapplyeoi', 'PageController@sapplyeoi');
Route::get('/scalender', 'PageController@scalender');
Route::get('/smessage', 'PageController@smessage');
Route::get('/sprofile', 'PageController@sprofile');
Route::get('/sstatus', 'PageController@sstatus');
Route::get('/supdate', 'PageController@supdate');
Route::post('public/eoi1', 'PageController@seoi1');

Route::post('public/eoi2', 'PageController@seoi2');
Route::post('public/proposalr', 'StaffRoleController@proposalr');
Route::post('public/alogin', 'PageController@adminlogin');
Route::get('/alogin', 'PageController@alogin');


Route::post('public/cpass', 'PageController@cpassword');



Route::get('/appliedEOI', 'PageController@appliedeoi');
Route::get('/activate/{student_number}', 'PageController@activate');
Route::get('/accept/{id}/{today}/', 'PageController@accept');
