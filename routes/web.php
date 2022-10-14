<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\FaqController;
Route::group(['prefix' => 'admin' , 'as' => 'admin.'] , function (){
    Route::get('/', [\App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('index');

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
        Route::get('/create', [\App\Http\Controllers\Admin\AdminSliderController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\AdminSliderController::class, 'store'])->name('store');
    });


});



