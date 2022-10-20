<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Back\BackController;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\MessagesController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Back\CatalogController;
use App\Http\Controllers\Back\ProductController;



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


Route::get('/', function () {
    return redirect(app()->getLocale());
});


Route::get('/{locale}/lang', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
});



$lang = Request::segment(1);


if ($lang == 'az') {
    Route::group(
        [
            'prefix' => 'az',
            'where' => ['locale' => '[a-zA-Z]{2}'],
            'middleware' => 'setlocale'
        ], function () {
        Route::get('/', [FrontController::class,'getPage'])->name('index');
        Route::get('{slug}/{project?}', [FrontController::class,'getPage']);

    });
}



if ($lang == 'en') {
    Route::group(
        [
            'prefix' => 'en',
            'where' => ['locale' => '[a-zA-Z]{2}'],
            'middleware' => 'setlocale'
        ], function () {
        Route::get('/', [FrontController::class,'getPage'])->name('index');
        Route::get('{slug}/{project?}', [FrontController::class,'getPage']);

    });
}


if ($lang == 'ru') {
    Route::group(
        [
            'prefix' => 'ru',
            'where' => ['locale' => '[a-zA-Z]{2}'],
            'middleware' => 'setlocale'
        ], function () {
        Route::get('/', [FrontController::class,'getPage'])->name('index');
        Route::get('{slug}/{project?}', [FrontController::class,'getPage']);

    });
}
  




// admin panel template get routeleri
Route::prefix('admin')->group(function(){

Route::get('/', [BackController::class,'admin_index'])->middleware('admin')->name('admin.index');
Route::get('/admin_login_page', [BackController::class,'admin_login_page'])->name('admin.login.page');
Route::get('/admin_logout', [BackController::class,'admin_logout'])->name('admin.logout');
Route::get('/all_admin', [BackController::class,'all_admin'])->name('admin.all.admin');
Route::get('/admin_register_page', [BackController::class,'admin_register_page'])->name('admin.register.page');
Route::get('/delete/{id}', [BackController::class,'admin_delete'])->name('admin.delete');
Route::get('/edit/{id}', [BackController::class,'admin_edit_page'])->name('admin.edit_page');

// admin post metodlari routeleri
Route::post('/admin_register', [BackController::class,'admin_register'])->name('admin.register');
Route::post('admin_login',[BackController::class,'admin_login'])->name('admin.login');
Route::post('admin_edit_all',[BackController::class,'admin_edit_all'])->name('admin.edit.all');
Route::post('admin_edit_password',[BackController::class,'admin_edit_password'])->name('admin.edit.password');



// faq routes
Route::get('/faq', [FaqController::class,'index'])->name('faq.index');
Route::get('/faq/add/page', [FaqController::class,'create_page'])->name('faq.add.page');
Route::get('/faq/delete/{id}', [FaqController::class,'destroy'])->name('faq.delete');
Route::get('/faq/edit/page/{id}', [FaqController::class,'update_page'])->name('faq.edit.page');
Route::post('/faq/edit/{id}', [FaqController::class,'edit'])->name('faq.edit');
Route::post('/faq/add', [FaqController::class,'create'])->name('faq.add');

// messages routes
Route::get('/messages', [MessagesController::class,'index'])->name('messages.index');
Route::post('/messages/add', [MessagesController::class,'create'])->name('messages.add');
Route::get('/messages/delete/{id}', [MessagesController::class,'destroy'])->name('messages.delete');


// contact routes
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::post('/contact/add', [ContactController::class,'create'])->name('contact.add');
Route::get('/contact/delete/{id}', [ContactController::class,'destroy'])->name('contact.delete');
Route::get('/contact/edit/{id}', [ContactController::class,'edit'])->name('contact.edit');
Route::post('/contact/update/{id}', [ContactController::class,'update'])->name('contact.update');


// catalog routes
Route::get('/catalog', [CatalogController::class,'index'])->name('catalog.index');
Route::post('/catalog/add', [CatalogController::class,'create'])->name('catalog.add');
Route::get('/catalog/add/page', [CatalogController::class,'show'])->name('catalog.add.page');
Route::get('/catalog/edit/{id}', [CatalogController::class,'edit'])->name('catalog.edit');
Route::post('/catalog/update/{id}', [CatalogController::class,'update'])->name('catalog.update');
Route::get('/catalog/delete/{id}', [CatalogController::class,'destroy'])->name('catalog.delete');


// product routes
Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('/product/add/page', [ProductController::class,'show'])->name('product.add.page');
Route::post('/product/add', [ProductController::class,'create'])->name('product.add');
Route::get('/product/delete/{id}', [ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update');


});













// front sayt routeleri
// Route::get('/', [FrontController::class,'index'])->name('index');
// Route::get('contact', [FrontController::class,'contact'])->name('contact');
// Route::multilingual('contact')->view('front.pages.contact');
// Route::multilingual('contact',[FrontController::class,'contact'])->names([
//     'en' => 'contact',
//     'az' => 'contactaz',
//     'ru'=>'contactru'
//   ]);

