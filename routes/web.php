<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TodoController;
use App\Http\Livewire\CreateHabit;
use App\Http\Livewire\CreateTask;
use App\Http\Livewire\Task;
use App\Models\Todo;

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

Route::get('/', [LandingController::class, 'index']);
Route::view('/index', "frontend.index")->name('index.view');

Route::group([ "middleware" => ['auth:sanctum', 'verified']], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('todos', Task::class)->name('todos');
    Route::get('newtodos', CreateTask::class)->name('newtodos');
    Route::get('newhabittodos', CreateHabit::class)->name('newhabittodos');

});

Route::resource('todo', TodoController::class)->middleware('auth:sanctum');