<?php

use App\Http\Controllers\AssignmentGroupController;
use App\Livewire\Counter;
use App\Livewire\ShowSingleAssignmentGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');

//    Route::resource('assignment-group', AssignmentGroupController::class)
//        ->except('index');

    Route::get('assignment-group/{id}', ShowSingleAssignmentGroup::class)
        ->name('assignment-group.show-single');

    Route::get('assignment-groups', [AssignmentGroupController::class, 'index'])
        ->name('assignment-group.index');

});

Route::get('/counter', Counter::class);

require __DIR__ . '/auth.php';
