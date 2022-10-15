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

    //-------slider-------
    Route::group(['prefix' => 'slider' , 'as' => 'slider.' ] , function (){
        Route::get('/', [\App\Http\Controllers\Admin\AdminSliderController::class, 'index'])->name('all');
        Route::get('/create', [\App\Http\Controllers\Admin\AdminSliderController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\AdminSliderController::class, 'store'])->name('store');
        Route::delete('/delete', [\App\Http\Controllers\Admin\AdminSliderController::class, 'delete'])->name('delete');
        Route::get('/edit/{slider_id}', [\App\Http\Controllers\Admin\AdminSliderController::class, 'edit'])->name('edit');
    });


});



