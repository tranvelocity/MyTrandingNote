<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\Core\Http\Controllers\Admin\CoreController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function() {
    Route::resource('core', CoreController::class, ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
});
