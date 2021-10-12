<?php

use App\Http\Controllers\CrudController;
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

Route::get('', [CrudController::class, 'index'])
    ->name('crud.index');

Route::get('/user/{id}', [CrudController::class, 'edit'])
    ->name('crud.edit');

Route::put('/user/{id}', [CrudController::class, 'update'])
    ->name('crud.update');

Route::delete('/user/{id}', [CrudController::class, 'destroy'])
    ->name('crud.destroy');

Route::get('/criar', [CrudController::class, 'create'])
    ->name('crud.create');

Route::post('', [CrudController::class, 'store'])
    ->name('crud.store');

Route::get('/greeting', function () {
    return 'Hello World';
});
