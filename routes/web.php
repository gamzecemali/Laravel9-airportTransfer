<?php

use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminTransferCategoryController as AdminTransferCategoryController;

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
    return view('welcome');
});


Route::get('/',[HomeController::class,'index'])->name(name:'home');
Route::get('/location',[HomeController::class,'location'])->name(name:'location');
Route::get('/references',[HomeController::class,'references'])->name(name:'references');
Route::get('/contact',[HomeController::class,'contact'])->name(name:'contact');
Route::get('/about',[HomeController::class,'about'])->name(name:'about');
Route::get('/faq',[HomeController::class,'faq'])->name(name:'faq');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name(name:'storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name(name:'faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name(name:'storecomment');
Route::view('/loginuser', 'home.login')->name(name:'loginuser');
Route::view('/registeruser', 'home.register')->name(name:'registeruser');
Route::get('/logoutuser', [HomeController::class,'logout'])->name(name:'logoutuser');
Route::view('/loginadmin', 'admin.login')->name(name:'loginadmin');
Route::post('/loginadmincheck', [HomeController::class,'loginadmincheck'])->name(name:'loginadmincheck');


Route::get('/test',[HomeController::class,'test'])->name(name:'test');

Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name(name:'param');

Route::post('/save',[HomeController::class,'save'])->name(name:'save');

Route::get('/transfer/{id}/',[HomeController::class,'transfer'])->name(name:'transfer');
Route::get('/categorytransfers/{id}/{slug}',[HomeController::class,'categorytransfers'])->name(name:'categorytransfers');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Route::middleware('auth')->prefix('admin')->group(function () {

Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/Comment', 'Comment')->name('Comment');
    Route::get('/transfer', 'transfer')->name('transfer');
    Route::get('/addtransfer', 'addtransfer')->name('addtransfer');
    Route::post('/storetransfer', 'storetransfer')->name('storetransfer');
    Route::get('/transferedit/{id}', 'transferedit')->name('transferedit');
    Route::post('/transferupdate/{id}', 'transferupdate')->name('transferupdate');
    Route::get('/transferdestroy/{id}', 'transferdestroy')->name('transferdestroy');
    Route::get('/commentdestroy/{id}', 'commentdestroy')->name('commentdestroy');
});

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');


        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');


        Route::prefix('transfer')->name('transfer.')->controller(AdminTransferCategoryController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });

        Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
            Route::get('/{tid}', 'index')->name('index');
            Route::post('/store/{tid}', 'store')->name('store');
            Route::get('/destroy/{tid}/{id}', 'destroy')->name('destroy');

        });
        Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });
        Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        });
    });












