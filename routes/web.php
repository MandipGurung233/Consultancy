<?php

use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\LoginController;
use App\Models\Latest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    $latests = Latest::all();
    return view('index',compact('latests'));
});

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('service', function(){
    return view('service');
})->name('service');

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::get('eps', function(){
    return view('test_preparation.eps');
})->name('eps');

Route::get('jlpt', function(){
    return view('test_preparation.jlpt');
})->name('jlpt');

Route::get('english', function(){
    return view('test_preparation.english');
})->name('english');

Route::get('ssw', function(){
    return view('test_preparation.ssw');
})->name('ssw');

/**Blog routing*/
Route::get('viewBlog',[blogController::class,'viewBlog'])->name('viewBlog');
Route::get('blogDetails/{id}',[blogController::class,'blogDetails'])->name('blogDetails');
Route::get('blogLike/{id}',[blogController::class,'blogLike'])->name('blogLike');

Route::get('login', function(){
    return view ('login');
})->name('logins');
Route::post('login',[AdminController::class,'login'])->name('login');
Route::post('contact',[contactController::class,'contact'])->name('contacts');

Route::group(['middleware'=> 'authCheck'],function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');

    /**Admin Contact */
    Route::get('adminContact',[contactController::class,'adminContact'])->name('adminContact');
    Route::get('/reply/{id}',[contactController::class,'reply']);
    Route::get('trashContact',[contactController::class,'trash'])->name('trashContact');
    Route::get('restore/{id}',[contactController::class,'restoreContact']);
    Route::delete('contactDestroy/{id}',[contactController::class,'replyContact'])->name('contactDestroy');
    Route::get('deletePermanent/{id}',[contactController::class,'deletePermanent'])->name('deletePermanent');

    /**Blog */
    Route::get('blog',[blogController::class,'blog'])->name('blog');
    Route::get('blogCreate',[blogController::class,'blogCreate'])->name('blogCreate');
    Route::post('blogPublish',[blogController::class,'blogPublish'])->name('blogPublish');
    Route::get('deleteBlog/{id}',[blogController::class,'deleteBlog'])->name('deleteBlog');
    Route::get('deleteBlogPermanent/{id}',[blogController::class,'deleteBlogPermanent'])->name('deleteBlogPermanent');
    Route::get('blogTrash',[blogController::class,'blogTrash'])->name('blogTrash');
    Route::get('restoreBlog/{id}',[blogController::class,'restoreBlog'])->name('restoreBlog');
    Route::get('editBlog/{id}',[blogController::class,'editBlog'])->name('editBlog');
    Route::post('blogUpdate/{id}',[blogController::class,'blogUpdate'])->name('blogUpdate');

    /**Send Mail */
    Route::get('sendMail',[blogController::class,'sendMail'])->name('sendMail');
    Route::post('send_Mail',[blogController::class,'send_Mail'])->name('send_Mail');

    /**News */
    Route::get('news',[AdminController::class,'news'])->name('news');
    Route::get('newsCreate',[AdminController::class,'newsCreate'])->name('newsCreate');
    Route::post('newsPublish',[AdminController::class,'newsPublish'])->name('newsPublish');
    Route::get('deleteNews/{id}',[AdminController::class,'deleteNews'])->name('deleteNews');
    Route::get('newsTrash',[AdminController::class,'newsTrash'])->name('newsTrash');
    Route::get('restoreNews/{id}',[AdminController::class,'restoreNews'])->name('restoreNews');
    Route::get('deleteNewsPermanent/{id}',[AdminController::class,'deleteNewsPermanent'])->name('deleteNewsPermanent');
    Route::get('editNews/{id}',[AdminController::class,'editNews'])->name('editNews');
    Route::post('newsUpdate/{id}',[AdminController::class,'newsUpdate'])->name('newsUpdate');
});