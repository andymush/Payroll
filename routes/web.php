<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', function () {
    return redirect('/login');
})->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/create-employee', [AdminController::class, 'createEmployee'])->name('employees.add');
    Route::get('/employees', [AdminController::class, 'employees'])->name('employees.index');
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('employees.attendance');
    Route::post('/create-employee', [AdminController::class, 'storeEmployee'])->name('employees.store');
});

Route::resource('attendance', AttendanceController::class);
Route::get('/employee', [EmployeesController::class, 'index'])->name('employee.dashboard');
Route::get('/employee/attendance', [EmployeesController::class, 'attendance'])->name('employee.attendance');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
