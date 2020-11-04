<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('client')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function(){

    Route::get('/',[ClientController::class, 'index'])->name('clients');
});


Route::prefix('project')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function(){

        Route::get('/',[ProjectController::class, 'index'])->name('projects');
        Route::get('form',[ProjectController::class, 'form']);
        Route::get('insert',[ProjectController::class, 'insert']);

    });

Route::prefix('account')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function(){

        Route::get('client/{client}',[\App\Http\Controllers\ReceivableController::class, 'accountByClient']);
        Route::get('new-record/{client}',[\App\Http\Controllers\ReceivableController::class, 'newRecordForm']);
        Route::get('edit-record/{client}/{receivable}',[\App\Http\Controllers\ReceivableController::class, 'editRecordForm']);
        Route::post('insert',[\App\Http\Controllers\ReceivableController::class, 'doInsert']);
        Route::post('edit',[\App\Http\Controllers\ReceivableController::class, 'doEdit']);
        Route::get('delete/{receivable}',[\App\Http\Controllers\ReceivableController::class, 'doDelete']);

    });

