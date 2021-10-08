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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'planner','middleware'=>['auth','admin'],'as'=>'admin.','namespace'=>'\App\Http\Controllers\Admin'],function(){

    Route::get('/', 'PlannerMainController@index')->name('planner');
    Route::get('/excel/{plan_id}','PlansExport@view')->name('exportsheet');
    Route::view('/admin','livewire.users.index')->name('usercrud');
    Route::view('/projects','livewire.projects.index')->name('projectcrud');
   Route::view('/plans/{project_id}','livewire.plans.index ')->name('plancrud');
   Route::view('/tasks/{plan_id}','livewire.tasks.index ')->name('taskcrud');
   
});
Route::group(['prefix'=>'user','middleware'=>['auth','user'],'as'=>'user.','namespace'=>'\App\Http\Controllers\User'],function(){
Route::get('/', 'UserMainController@index')->name('planner');
Route::view('/projects','livewire.projects.index')->name('userproject');
Route::view('/plans/{project_id}','livewire.plans.index ')->name('plancrud');
Route::view('/tasks/{plan_id}','livewire.tasks.index ')->name('taskcrud');

});





Route::get('/test', function(){

return view('login_user');
});