<?php

use App\Exceptions\WebException;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\TypeDestinationController;
use App\Http\Controllers\UserController;
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
        Route::get("employee", [EmployeeController::class, "employees"])->name('employee');
        Route::delete("employee", [EmployeeController::class, "deleteEmployee"])->name('employee-delete');

        Route::get("employee/create", function () {
            // throw new WebException("yaa");
            return view('admin.add.add-employee');
        })->name('add-employee');

        Route::post("employee/create", [EmployeeController::class, "storeEmployee"])->name("employee-post");

        Route::get("cadress", [EmployeeController::class, "cadress"])->name('cadress');

        Route::get("type-destination", [TypeDestinationController::class, 'index'])->name('type-destination');
        Route::delete("type-destination", [TypeDestinationController::class, 'delete'])->name('type-destination-delete');

        Route::get("place", [PlaceController::class, "index"])->name('place');
        Route::delete("place", [PlaceController::class, "delete"])->name('place-delete');


        Route::get("bank-account", [BankAccountController::class, "index"])->name('bank-account');
        Route::delete("bank-account", [BankAccountController::class, "delete"])->name('bank-account-delete');


        Route::get("cost", [CostController::class, "index"])->name('cost');
        Route::delete("cost", [CostController::class, "delete"])->name('cost-delete');


        Route::get("transportation", [TransportationController::class, "index"])->name('transportation');
        Route::delete("transportation", [TransportationController::class, "delete"])->name('transportation-delete');


        Route::get("categories", [CategoryController::class, "index"])->name('categories');
        Route::delete("categories", [CategoryController::class, "delete"])->name('categories-delete');


        Route::get("account", [AccountController::class, "index"])->name('account');
        Route::delete("account", [AccountController::class, "delete"])->name('account-delete');


        Route::get("user", [UserController::class, "index"])->name('user');
        Route::delete("user", [UserController::class, "delete"])->name('user-delete');



        Route::post("logout", [AuthController::class, "logout"])->name('logout');

    });
    Route::get("spt", function () {
        return view('admin.spt');
    })->name('spt');
});
