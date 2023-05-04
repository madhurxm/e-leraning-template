<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesCrud;

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
//     return view('index');
// });
Route::get('/', 'CoursesCrud@index2');

Route::get('/404', function () {
    return view('pages/404');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/courses', function () {
    return view('pages/courses');
});
Route::get('/team', function () {
    return view('pages/team');
});
Route::get('/testimonial', function () {
    return view('pages/testimonial');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/admin', function () {
    return view('/admin/admin-home');
});
Route::get('/admin/course', function () {
    return view('/admin/admin_course_master');
});
// Route::get('/add-course', function () {
//     return view('pages/add_course');
// });
Route::get('/admin/course', 'CoursesCrud@index');
Route::post('/admin/course', 'CoursesCrud@store')->name('add-course');
Route::delete('/admin/course/{course_id}', 'CoursesCrud@destroy');
Route::post('/admin/course/{course_id}', 'CoursesCrud@update');
Route::get('/admin/instructor', function () {
    return view('admin/admin_instructor_master');
});
