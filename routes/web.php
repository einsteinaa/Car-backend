<?php
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Author\AuthorHomeController;

use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SubCategoryController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\ContactController;

// Front In
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [AdminLoginController::class, 'index'])->name('admin_login');

Route::get('/subcategory-by-category/{id}', [HomeController::class, 'get_subcategory_by_category'])->name('subcategory-by-category');
Route::post('/search/result', [HomeController::class, 'search'])->name('search_result');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/category/{id}', [SubCategoryController::class, 'index'])->name('category');
Route::get('/allcategory/{id}', [CategoryController::class, 'index'])->name('allcategory');



// Author Route

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login-submit', [LoginController::class, 'login_submit'])->name('login_submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// author forget password
Route::get('/forget-password', [LoginController::class, 'forget_password'])->name('forget_password');
Route::post('/forget-password-submit', [LoginController::class, 'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset-password/{token}/{email}', [LoginController::class, 'reset_password'])->name('reset_password');
Route::post('/reset-password-submit', [LoginController::class, 'reset_password_submit'])->name('reset_password_submit');


Route::get('/author/home', [AuthorHomeController::class, 'index'])->name('author_home')->middleware('author:author');

// author profile
// Route::get('/author/edit-profile', [AuthorProfileController::class, 'index'])->name('author_profile')->middleware('author:author');
// Route::post('/author/edit-profile-submit', [AuthorProfileController::class, 'profile_submit'])->name('author_profile_submit');


//Author Post News
// Route::get('/author/post/create', [AuthorPostController::class, 'create'])->name('author_post_create')->middleware('author:author');
// Route::get('/author/post/show', [AuthorPostController::class, 'show'])->name('author_post_show')->middleware('author:author');
// Route::post('/author/post/store', [AuthorPostController::class, 'store'])->name('author_post_store')->middleware('author:author');
// Route::get('/author/post/edit/{id}', [AuthorPostController::class, 'edit'])->name('author_post_edit')->middleware('author:author');
// Route::post('/author/post/update/{id}', [AuthorPostController::class, 'update'])->name('author_post_update')->middleware('author:author');
// Route::get('/author/post/delete/{id}', [AuthorPostController::class, 'delete'])->name('author_post_delete')->middleware('author:author');



// Admin Route

Route::middleware(['admin:admin'])->prefix('admin')->group(function () {
    Route::get('home', [AdminHomeController::class, 'index'])->name('admin_home');

    Route::get('/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
    Route::post('/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
// Admin Category Routes
 Route::get('category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
Route::get('category/show', [AdminCategoryController::class, 'show'])->name('admin_category_show');
Route::post('category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
Route::get('category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');
Route::get('category/delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin_category_delete');

// admin cars routes
Route::get('car/show', [AdminCarController::class, 'show'])->name('admin_car_show');
Route::get('car/create', [AdminCarController::class, 'create'])->name('admin_car_create');
Route::post('car/store', [AdminCarController::class, 'store'])->name('admin_car_store');
Route::get('car/edit/{id}', [AdminCarController::class, 'edit'])->name('admin_car_edit');
Route::post('car/update/{id}', [AdminCarController::class, 'update'])->name('admin_car_update');
Route::get('car/delete/{id}', [AdminCarController::class, 'delete'])->name('admin_car_delete');


});


Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');

Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');






// // Admin Car 
// Route::get('/admin/car/create', [AdminCarController::class, 'create'])->name('admin_car_create');
// Route::get('/admin/car/show', [AdminCarController::class, 'show'])->name('admin_car_show');
// Route::post('/admin/car/store', [AdminCarController::class, 'store'])->name('admin_car_store');
// Route::get('/admin/car/edit/{id}', [AdminCarController::class, 'edit'])->name('admin_car_edit');
// Route::post('/admin/car/update/{id}', [AdminCarController::class, 'update'])->name('admin_car_update');
// Route::get('/admin/car/delete/{id}', [AdminCarController::class, 'delete'])->name('admin_car_delete');


// admin setting
Route::get('/admin/setting', [AdminSettingController::class, 'index'])->name('admin_setting');
Route::post('/admin/setting/update', [AdminSettingController::class, 'update'])->name('admin_setting_update');



// //About Page
// Route::get('/admin/page/about', [AdminPageController::class, 'about'])->name('admin_page_about');
// Route::post('/admin/page/about/update', [AdminPageController::class, 'about_update'])->name('admin_page_about_update');



//login
Route::get('/admin/page/login', [AdminPageController::class, 'login'])->name('admin_page_login');
Route::post('/admin/page/login/update', [AdminPageController::class, 'login_update'])->name('admin_page_login_update');


// //conatct
// Route::get('/admin/page/contact', [AdminPageController::class, 'contact'])->name('admin_page_contact');
// Route::post('/admin/page/contact/update', [AdminPageController::class, 'contact_update'])->name('admin_page_contact_update');


// Author

Route::get('/admin/client/create', [AdminClientController::class, 'create'])->name('admin_client_create');
Route::get('/admin/client/show', [AdminClientController::class, 'show'])->name('admin_client_show');
Route::post('/admin/client/store', [AdminClientController::class, 'store'])->name('admin_client_store');
Route::get('/admin/client/edit/{id}', [AdminClientController::class, 'edit'])->name('admin_client_edit');
Route::post('/admin/client/update/{id}', [AdminClientController::class, 'update'])->name('admin_client_update');
Route::get('/admin/client/delete/{id}', [AdminClientController::class, 'delete'])->name('admin_client_delete');