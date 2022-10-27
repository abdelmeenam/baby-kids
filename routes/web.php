<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\FaqController;



Route::get('/admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.postLogin');


Route::group(['prefix' => 'admin' , 'as' => 'admin.' , 'middleware' => 'auth'] , function (){
    Route::get('/', [\App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('index');
    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    //-------faqs-------
    Route::group(['prefix' => 'faq' , 'as' =>'faq.'] , function (){
        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('all');
        Route::get('/create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('store');
        Route::delete('/delete', [\App\Http\Controllers\Admin\FaqController::class, 'delete'])->name('delete');
        Route::get('/edit/{faq_id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('edit');
        Route::put('/update', [FaqController::class, 'update'])->name('update');
    });

    //Activities
    Route::group(['prefix' => 'activity'  , 'as' => 'activity.'] , function (){
        Route::get('/' , [\App\Http\Controllers\Admin\ActivityController::class , 'index'])->name('all');
        Route::get('/create' , [\App\Http\Controllers\Admin\ActivityController::class , 'create'])->name('create');
        Route::post('/store' , [\App\Http\Controllers\Admin\ActivityController::class , 'store'])->name('store');
        Route::delete('/delete', [\App\Http\Controllers\Admin\ActivityController::class, 'delete'])->name('delete');
        Route::get('/edit/{activity_id}' , [\App\Http\Controllers\Admin\ActivityController::class , 'edit'])->name('edit');
        Route::put('/update', [\App\Http\Controllers\Admin\ActivityController::class ,  'update'])->name('update');
    });

    //Teachers
    Route::group(['prefix' => 'teacher'  , 'as' => 'teacher.'] , function (){
        Route::get('/' , [\App\Http\Controllers\Admin\TeacherController::class , 'index'])->name('all');
        Route::get('/create' , [\App\Http\Controllers\Admin\TeacherController::class , 'create'])->name('create');
        Route::post('/store' , [\App\Http\Controllers\Admin\TeacherController::class , 'store'])->name('store');
        Route::delete('/delete', [\App\Http\Controllers\Admin\TeacherController::class, 'delete'])->name('delete');
        Route::get('/edit/{teacher_id}' , [\App\Http\Controllers\Admin\TeacherController::class , 'edit'])->name('edit');
        Route::put('/update', [\App\Http\Controllers\Admin\TeacherController::class ,  'update'])->name('update');
    });

    //Courses
    Route::group(['prefix' => 'course'  , 'as' => 'course.'] , function (){
        Route::get('/' , [\App\Http\Controllers\Admin\CourseController::class , 'index'])->name('all');
        Route::get('/create' , [\App\Http\Controllers\Admin\CourseController::class , 'create'])->name('create');
        Route::post('/store' , [\App\Http\Controllers\Admin\CourseController::class , 'store'])->name('store');
        Route::delete('/delete', [\App\Http\Controllers\Admin\CourseController::class, 'delete'])->name('delete');
        Route::get('/edit/{course_id}' , [\App\Http\Controllers\Admin\CourseController::class , 'edit'])->name('edit');
        Route::put('/update', [\App\Http\Controllers\Admin\CourseController::class ,  'update'])->name('update');
    });

    //-------slider-------
    Route::group(['prefix' => 'slider' , 'as' => 'slider.' ] , function (){
        Route::get('/', [\App\Http\Controllers\Admin\AdminSliderController::class, 'index'])->name('all');
        Route::get('/create', [\App\Http\Controllers\Admin\AdminSliderController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\AdminSliderController::class, 'store'])->name('store');
        Route::delete('/delete', [\App\Http\Controllers\Admin\AdminSliderController::class, 'delete'])->name('delete');
        Route::get('/edit/{slider_id}', [\App\Http\Controllers\Admin\AdminSliderController::class, 'edit'])->name('edit');
        Route::put('/update', [\App\Http\Controllers\Admin\AdminSliderController::class ,  'update'])->name('update');

    });


});



