<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Doctor\DoctorDashboardController;

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
    return view('home');
});

Route::get('/index', function () {
    return view('home');
})->name('index');

Route::get('/showDoctor', function () {
    return view('doctor_profile');
})->name('showDoctor');

Route::get('/doctorsList', function () {
    return view('doctors_list');
})->name('doctorsList');

Route::get('/medicalDevices', function () {
    return view('medical_devices');
})->name('medicalDevices');


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/
Route::get(
    '/admin_dashboard',
    [AdminDashboardController::class, 'index']
)->middleware('role:admin');

Route::get(
    '/doctor_dashboard',
    [DoctorDashboardController::class, 'index']
)->middleware('role:doctor');

Route::get(
    '/doctor_profile', [Controller::class, 'showDoctor']
    );


Route::get(
    '/patient_dashboard',
    [DoctorDashboardController::class, 'index']
)->middleware('role:patient');

#Route::get('/doctor_dashboard', 'Doctor\DashboardController@index');

#Route::get('/patient_dashboard', 'Patient\DashboardController@index');

require __DIR__.'/auth.php';
