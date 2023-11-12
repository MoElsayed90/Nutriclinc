<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('Dashboard/Admin',[DashboardController::class,'index']);



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/dashboard/Patient', function () {
            return view('Dashboard.Patient.index');
        })->middleware(['auth', 'verified'])->name('dashboard.Petient');

        Route::get('/dashboard/Admin', function () {
            return view('Dashboard.Admin.index');
        })->middleware(['auth:admin', 'verified'])->name('dashboard.Admin');
        require __DIR__.'/auth.php';



    });


