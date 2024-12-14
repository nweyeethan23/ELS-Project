<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
 
//Route::get('/{vueRoutes?}', function() {
    //return view('welcome');
//})->where('vueRoutes', '[\/\w\.-]*');

Auth::routes();

Route::view('/', 'user')->name('home');
Route::view('/about', 'user');
Route::view('/contact', 'user');
Route::view('/courses', 'user');

// Login route
Route::view('/login', 'login')->name('login');
Route::view('/register', 'login');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/register', [App\Http\Controllers\LoginController::class, 'register']);
Route::post('/user/logout', [App\Http\Controllers\LoginController::class, 'userLogout']);
Route::get('/course/list', [CourseController::class, 'index']);
Route::post('/apply_course/{id}', [CourseController::class, 'applyCourse']);
Route::get('/user/{id}/applied_courses', [CourseController::class, 'getAppliedCourses']);
Route::post('/contacts', [CourseController::class, 'contactStore']);

Route::middleware(["web", "role.admin"])->prefix('admin')->name('admin.')->group(function () {

   Route::view('/', 'admin')->name('admin');
   Route::view('/course', 'admin')->name('course');
   Route::view('/contact/list', 'admin');
   Route::view('/course/edit/{id}', 'admin');
   Route::view('/apply/courses', 'admin');

   Route::post('/course/create', [CourseController::class, 'store']);
   Route::get('/course/{id}', [CourseController::class, 'show']);
   Route::post('/course/{id}', [CourseController::class, 'update']);
   Route::delete('/course/{id}', [CourseController::class, 'destroy']);
   Route::post('/logout', [App\Http\Controllers\LoginController::class, 'adminLogout']);
   Route::get('/contact/getlist', [CourseController::class, 'getContactList']);
   Route::get('/contact/update', [CourseController::class, 'updateContactList']);
   Route::get('/apply/list', [CourseController::class, 'showApplyCourses']);

});

