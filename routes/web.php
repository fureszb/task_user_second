<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/id', [Taskcontroller::class, 'show']);
Route::post('/api/tasks', [Taskcontroller::class, 'store']);
Route::put('/api/tasks//id', [Taskcontroller::class, 'update']);
Route::delete('/api/tasks/id', [TaskController::class, 'destroy']);
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/task/new', [TaskController::class, 'newview']);
Route::get('/task/edit/{id}', [TaskController::class, 'editview']);
Route::get('/task/list', [TaskController::class, 'listview']);

Route::get('/api/users/{{$user->id}}', [UserController::class, 'show']);
Route::get('/api/usera', [UserController::class, 'index']);
Route::get('/user/list', [UserController::class, 'listview']);


//require __DIR__ . '/auth.php';