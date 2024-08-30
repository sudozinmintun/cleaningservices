<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageFaqController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisitorController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('blog', BlogController::class);
Route::resource('estimate', EstimateController::class);
Route::resource('faq', FaqController::class);
Route::post('subscribe/submit', [ContactController::class, 'subscribe'])->name('subscribe.submit');


Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/dologin', [AuthController::class, 'doLogin'])->name('admin.dologin');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')->middleware(['isAdmin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/user', [UserController::class, 'index'])->name('admin.users');
    Route::get('/user/addedit/{id?}', [UserController::class, 'addedit'])->name('admin.user.addedit');
    Route::post('/user/add', [UserController::class, 'add'])->name('admin.user.add');
    Route::post('/user/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');


    /**post Route */
    Route::get('/post', [PostController::class, 'index'])->name('admin.post');
    Route::get('/post/addedit/{id?}', [PostController::class, 'addedit'])->name('admin.post.addedit');
    Route::post('/post/add', [PostController::class, 'add'])->name('admin.post.add');
    Route::post('/post/edit', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::get('/post/delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');

    Route::get('/estimate', [AdminController::class, 'estimate'])->name('admin.estimate');
    Route::get('/estimate/{id}', [AdminController::class, 'viewEstimate'])->name('admin.estimate.view');

    Route::get('/contact', [AdminController::class, 'contact'])->name('admin.contact');
    Route::get('/contact/{id}', [AdminController::class, 'viewContact'])->name('admin.contact.view');

    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('manage_faq', ManageFaqController::class);
    Route::resource('video', VideoController::class);
    Route::resource('visitor', VisitorController::class);

    Route::get('/subscribe/sms', [SubscribeController::class, 'index'])->name('subscribe.sms');
    Route::get('/subscribe/email', [SubscribeController::class, 'email_subscribers'])->name('subscribe.email');
    Route::post('/send/email', [SmsController::class, 'sendMail'])->name('send.email');

    Route::resource('sms', SmsController::class);
});