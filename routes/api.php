<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//*****************Vehya Login *************************
Route::post('/login', [Api::class, 'login']);
Route::post('/forget-password', [Api::class, 'forgotPassword']);


//***************** Electrician Profile *************************
Route::get('/profile/{id}', [Api::class, 'profile']);
Route::get('/job-list/{id}', [Api::class, 'jobList']);
Route::get('/job-list-electrician/{eid}/{sid}', [Api::class, 'jobListByElectrician']);
Route::get('/job-list-byjobid/{eid}/{id}', [Api::class, 'jobListByJobId']);
Route::post('/job-update/{id}', [Api::class, 'jobUpdate']);




Route::get('/states/{cid}', [Api::class, 'states']);
Route::get('/cities/{cid}', [Api::class, 'cities']);
Route::get('/countries', [Api::class, 'countries']);

