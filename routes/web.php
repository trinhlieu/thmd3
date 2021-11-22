<?php

use App\Http\Controllers\AgentController;
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

Route::get('/',[AgentController::class,'index'])->name('agent.index');
Route::prefix('agent')->group(function () {
    Route::get('create',[AgentController::class,'create'])->name('agent.create');
    Route::post('store',[AgentController::class,'store'])->name('agent.store');
    Route::get('edit/{id}',[AgentController::class,'edit'])->name('agent.edit');
    Route::post('update/{id}',[AgentController::class,'update'])->name('agent.update');
    Route::get('delete/{id}',[AgentController::class,'delete'])->name('agent.delete');
    Route::get('search',[AgentController::class,'search'])->name('agent.search');
});
