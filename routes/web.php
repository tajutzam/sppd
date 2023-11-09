<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login');

// Route::get('/dashboard', function () {
//     // return view('admin.dashboard');
// });

Route::get('/forgotpassword', function () {
    return view('auth.forgotpassword');
})->name('forgotpassword');

Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('index', function () {
        return view('admin.dashboard');
    });
    Route::prefix("master")->group(function () {
        Route::get("destination", function () {
        });
        Route::get("employee", function () {
            return view('admin.master.employee');
        })->name('employee');
        Route::get("cadress", function () {
            return view('admin.master.cadress');
        })->name('cadress');
        Route::get("type-destination", function () {
            return view('admin.master.type-destination');
        })->name('type-destination');
        Route::get("place", function () {
            return view('admin.master.place');
        })->name('place');

        Route::get("bank-account", function () {
            return view('admin.master.bank-account');
        })->name('bank-account');

        Route::get("cost", function () {
            return view('admin.master.cost');
        })->name('cost');

        Route::get("transportation", function () {
            return view('admin.master.transportation');
        })->name('transportation');

        Route::get("categories", function () {
            return view('admin.master.categories');
        })->name('categories');

        Route::get("account", function () {
            return view('admin.master.account');
        })->name('account');


        Route::get("user", function () {
            return view('admin.master.user');
        })->name('user');
    });
    Route::get("spt", function () {
        return view('admin.spt');
    })->name('spt');
});
