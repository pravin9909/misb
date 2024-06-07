<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IndexController;


 use App\Http\Controllers\AdminerController;
use App\Http\Controllers\Front\WelcomeController;
use App\Http\Controllers\Front\SchoolController;
use App\Http\Controllers\Front\ProgrammeController;
use App\Http\Controllers\Front\StudentLifeController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\InformationController;
use App\Http\Controllers\Front\ToApplyController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/adminer', function () {
//     return view('front.adminer');
// });
// Route::get('/adminer-view', function () {
//     return view('adminer');
// });
Route::get('/setlocale/{locale}', [LangController::class, 'setLocale'])->name('changeLang');
Route::get('/',[IndexController::class,'index']);
Route::get('/adminer',[AdminerController::class,'index']);
Route::get('/welcome',[WelcomeController::class,'welcome']);
Route::get('/le-mot-du-directeur',[SchoolController::class,'directer_message']);
Route::get('/le-mot-de-la-responsable',[SchoolController::class,'education_manager_word']);
Route::get('/vision',[SchoolController::class,'vision']);
Route::get('/bbs-programme',[ProgrammeController::class,'bbs_programme']);
Route::get('/gestion-des-affaires-internationales',[ProgrammeController::class,'gestion_des_affaires_internationales']);
Route::get('/management-et-gestion-hoteliere',[ProgrammeController::class,'management_et_gestion_hoteliere']);
Route::get('/creation-entreprise-et-entrepreneuriat',[ProgrammeController::class,'creation_entreprise_et_entrepreneuriat']);
Route::get('/marketing-international',[ProgrammeController::class,'marketing_international']);
Route::get('/tourism-culture',[ProgrammeController::class,'tourism_culture']);
Route::get('/management-du-luxe',[ProgrammeController::class,'management_du_luxe']);
Route::get('/mba-programme',[ProgrammeController::class,'mba_programme']);
Route::get('/mba-gestion-des-affaires-internationales',[ProgrammeController::class,'mba_gestion_des_affaires_internationales']);
Route::get('/mba-management-et-gestion-hoteliere',[ProgrammeController::class,'mba_management_et_gestion_hoteliere']);
Route::get('/mba-creation-entreprise-et-entrepreneuriat',[ProgrammeController::class,'mba_creation_entreprise_et_entrepreneuriat']);
Route::get('/mba-marketing-international',[ProgrammeController::class,'mba_marketing_international']);
Route::get('/mba-tourisme-culture',[ProgrammeController::class,'mba_tourisme_culture']);
Route::get('/mba-management-du-luxe',[ProgrammeController::class,'mba_management_du_luxe']);
Route::get('/dba-programme',[ProgrammeController::class,'dba_programme']);
Route::get('/dba-management-et-creation-entreprise',[ProgrammeController::class,'dba_management_et_creation_entreprise']);
Route::get('/dba-management-et-gestion-hoteliere',[ProgrammeController::class,'dba_management_et_gestion_hoteliere']);
Route::get('/dba-marketing-digital-et-nouvelles-technologies',[ProgrammeController::class,'dba_marketing_digital_et_nouvelles_technologies']);
Route::get('/dba-tourisme-culture',[ProgrammeController::class,'dba_tourisme_culture']);
Route::get('/dba-developpement-economique-durable-local-et-international',[ProgrammeController::class,'dba_developpement_economique_durable_local_et_international']);
Route::get('/dba-management-du-luxe',[ProgrammeController::class,'dba_management_du_luxe']);
Route::get('/fle-Français-langue-étrangère',[ProgrammeController::class,'fle_Français_langue_étrangère']);
Route::get('/student-life',[StudentLifeController::class,'student_life']);
Route::get('/gallery',[GalleryController::class,'gallery']);
Route::get('/information',[InformationController::class,'information']);
 Route::post('/information',[InformationController::class,'information_submit']);
 Route::get('/sent-otp',[ToApplyController::class,'sent_otp'])->name('sent-otp');
 Route::post('/submission-email',[ToApplyController::class,'submission_email'])->name('submission.email');
Route::get('/to-apply',[ToApplyController::class,'to_apply']);
Route::post('/to-apply',[ToApplyController::class,'to_apply_submit']);
Route::get('/mail',[MailController::class,'index']);

Route::get('/admission-policy',[ToApplyController::class,'admission_policy']);
/////

Route::get('/admin',[LoginController::class,'index'])->name('admin');
Route::post('/admin',[LoginController::class,'index_post']);


    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/admin/application',[ApplicationController::class,'application']);
    Route::get('/admin/application/create',[ApplicationController::class,'create_application']);
    Route::post('/admin/application/create',[ApplicationController::class,'create_application_post']);
    Route::get('/admin/student',[StudentController::class,'student']);
    Route::resource('/admin/course',CourseController::class);
    Route::get('/admin/application/{id}',[ApplicationController::class,'delete']);
    Route::get('/admin/application/view/{id}',[ApplicationController::class,'view']);
    Route::get('/admin/student',[StudentController::class,'index']);
    Route::get('/admin/student/create-student/{id}',[StudentController::class,'create_student']);
    Route::post('/admin/student/create-student',[StudentController::class,'store'])->name('create-student.store');
    Route::get('/admin/student/add-student',[StudentController::class,'create_student1']);
    Route::post('/admin/student/add-student',[StudentController::class,'store1'])->name('add-student.store1');
    Route::get('/admin/student/delete/{id}',[StudentController::class,'delete']);
    Route::get('/admin/student/view/{id}',[StudentController::class,'view']);
    Route::get('/admin/student/edit/{id}',[StudentController::class,'edit']);
    Route::put('/admin/student/update/{id}',[StudentController::class,'update'])->name('create-student.update');
    Route::get('/admin/payment',[PaymentController::class,'index']);
    Route::get('/admin/contact',[ContactController::class,'contact']);
    Route::get('/admin/contact/{id}',[ContactController::class,'delete']);
    Route::get('/admin/logout',[LoginController::class,'logout']);

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    
    // Blog Categories Routes
    Route::get('/blog-categories', [BlogCategoryController::class, 'index'])->name('blog-categories.index');
    Route::get('/blog-categories/create', [BlogCategoryController::class, 'create'])->name('blog-categories.create');
    Route::post('/blog-categories', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
    Route::get('/blog-categories/{category}/edit', [BlogCategoryController::class, 'edit'])->name('blog-categories.edit');
    Route::put('/blog-categories/{category}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
    Route::delete('/blog-categories/{category}', [BlogCategoryController::class, 'destroy'])->name('blog-categories.destroy');
    Route::get('/blog-categories/{category}', [BlogCategoryController::class, 'show'])->name('blog-categories.show');

    Route::get('/news-categories', [NewsCategoryController::class, 'index'])->name('news-categories.index');
    Route::get('/news-categories/create', [NewsCategoryController::class, 'create'])->name('news-categories.create');
    Route::post('/news-categories', [NewsCategoryController::class, 'store'])->name('news-categories.store');
    Route::get('/news-categories/{newsCategory}/edit', [NewsCategoryController::class, 'edit'])->name('news-categories.edit');
    Route::put('/news-categories/{newsCategory}', [NewsCategoryController::class, 'update'])->name('news-categories.update');
    Route::delete('/news-categories/{newsCategory}', [NewsCategoryController::class, 'destroy'])->name('news-categories.destroy');

    // News Routes
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');