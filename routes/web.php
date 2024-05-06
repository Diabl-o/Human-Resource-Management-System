<?php

use App\Http\Controllers\AddUser;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserDataListController;
use App\Http\Controllers\UserEditController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', [UserDataListController::class, 'ShowUsers'])->name('user-management');

	Route::get('/user-management/{id}', [UserDataListController::class, 'DeleteUsers'])->name('delete_user');

	Route::get('/user-edit', [UserEditController::class, 'ShowUser'])->name('user-edit');

	Route::post('/user-edit-pro', [UserEditController::class, 'UpdateUser'])->name('user-edit-profile');
	Route::post('/user-edit-img', [UserEditController::class, 'UpdateUserImage'])->name('user-edit-image');
	Route::get('/add-user',[AddUserController::class, 'showPage'])->name('add-user');
	Route::post('/add-user-add',[AddUserController::class, 'adduser'])->name('add-user-submit');

	Route::post('/user-edit-temp', [UserEditController::class, 'UpdateUserTemp'])->name('user-edit-temp');
	Route::post('/user-edit-per', [UserEditController::class, 'UpdateUserPer'])->name('user-edit-per');
	Route::post('/user-edit-em', [UserEditController::class, 'UpdateUserEm'])->name('user-edit-em');
	Route::post('/user-edit-emadd', [UserEditController::class, 'UpdateUserEmadd'])->name('user-edit-emadd');
	Route::post('/user-edit-bank', [UserEditController::class, 'UpdateUserBank'])->name('user-edit-bank');
	Route::post('/user-edit-pass', [UserEditController::class, 'UpdateUserPass'])->name('user-edit-pass');
	Route::post('/user-edit-office', [UserEditController::class, 'UpdateUserOffice'])->name('user-edit-office');


	Route::get('/task-management',[TaskController::class, 'show'])->name('task-management');
	Route::get('/add-task',[TaskController::class, 'addTask'])->name('add-task');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile-pass', [InfoUserController::class, 'UpdateProfilePass']);
	Route::post('/Image_edit',[InfoUserController::class,'uploadImage'])->name('edit_image');
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});



Route::get('/login', function () {
    return view('session/login-session');
})->name('login');