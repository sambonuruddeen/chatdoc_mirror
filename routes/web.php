<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Doctor\DoctorDashboardController;
use App\Http\Controllers\Patient\PatientDashboardController;

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

/* Doctor Routes*/
Route::get(
    '/doctor_dashboard',
    [DoctorDashboardController::class, 'index']
)->middleware('role:doctor');

Route::get(
    '/doctor_profile',
    [DoctorDashboardController::class, 'my_profile']
)->middleware('role:doctor')->name('doctor_profile');

#edit_doctor
Route::get(
    '/edit_doctor/{doctor}', 
    [DoctorDashboardController::class, 'edit_doctor']
)->middleware('role:doctor')->name('edit_doctor');

Route::post('/store_profile', [DoctorDashboardController::class, 'store_profile']
)->middleware('role:doctor')->name('save_doctor');

Route::post('/update_profile', [DoctorDashboardController::class, 'update']
)->middleware('role:doctor')->name('update_doctor');

Route::put('/updateAvatar', [ DoctorDashboardController::class, 'updateAvatar']
)->middleware('role:doctor')->name('updateAvatar');
/* /Doctor Routes*/


Route::get(
    '/patient_dashboard', [PatientDashboardController::class, 'index']
)->middleware('role:patient');

#Route::get('/doctor_dashboard', 'Doctor\DashboardController@index');

#Route::get('/patient_dashboard', 'Patient\DashboardController@index');

require __DIR__.'/auth.php';
