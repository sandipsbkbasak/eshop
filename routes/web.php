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
    return view('welcome');
});

Route::view('/admin','admin.login');
Route::post('/admin/login_submit', 'Admin_auth@login_submit');

Route::group(['middleware'=>['admin_auth']], function()
{
    Route::view('/admin/post/list','admin.post.list');
    Route::view('/admin/post/add','admin.post.add');
    Route::view('/admin/post/edit','admin.post.edit');
});

Route::get('/admin/logout', function(){
    session()->forget('BLOG_USER_ID');
    return redirect('/admin');
});