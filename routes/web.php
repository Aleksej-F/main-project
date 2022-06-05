<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Account\indexController as AccounController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\OrdersController;

use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;

/*/
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {return view('welcome');});
// Route::get('/new', function () {
//     return view('news');
// });
//  Route::get('/project', function () {
//      return view('project');
//  });
//  Route::get('/login', function () {
//      return view('login');
//  });

// Route::get('/news', [NewsController::class, 'index']);
// Route::get('/news/{id}', [NewsController::class, 'show']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news', [NewsController::class, 'index']) 
    ->name('news');

Route::get('/news/{news}', [NewsController::class, 'show'])
    ->where('id','\d+')
    ->name('news.show');

Route::get('/categories', [CategoryController::class, 'index']) 
    ->name('categories');

Route::get('/categories/{id}', [NewsController::class, 'shownews']) 
    ->name('categories.show');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/account', AccounController::class)
        ->name('account');

    //admin routes
    Route::group(['middleware' => 'admin','prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/', AdminController::class)->name('index');
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/users', AdminUsersController::class);
    });
});

Route::get('/reviews', [ReviewsController::class, 'index']) ->name('reviews');
Route::match(['post','get'],'/reviews/store', [ReviewsController::class, 'store']) ->name('reviews.store');

Route::get('/orders', [OrdersController::class, 'index']) ->name('orders');
Route::match(['post','get'],'/orders/store', [OrdersController::class, 'store']) ->name('orders.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
