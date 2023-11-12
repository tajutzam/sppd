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
        Route::get("employee/create", function () {
            return view('admin.add.employee-add');
        })->name('add-employee');
        Route::get("employee/edit", function () {
            return view('admin.edit.employee-edit');
        })->name('edit-employee');

        Route::get("cadress", function () {
            return view('admin.master.cadress');
        })->name('cadress');
        Route::get("cadress/create", function () {
            return view('admin.add.cadress-add');
        })->name('add-cadress');
        Route::get("cadress/edit", function () {
            return view('admin.edit.cadress-edit');
        })->name('edit-cadress');

        Route::get("type-destination", function () {
            return view('admin.master.type-destination');
        })->name('type-destination');
        Route::get("type-destination/create", function () {
            return view('admin.add.type-destination-add');
        })->name('add-type-destination');
        Route::get("type-destination/edit", function () {
            return view('admin.edit.type-destination-edit');
        })->name('edit-type-destination');

        Route::get("place", function () {
            return view('admin.master.place');
        })->name('place');
        Route::get("place/create", function () {
            return view('admin.add.place-add');
        })->name('add-place');
        Route::get("place/edit", function () {
            return view('admin.edit.place-edit');
        })->name('edit-place');

        Route::get("bank-account", function () {
            return view('admin.master.bank-account');
        })->name('bank-account');
        Route::get("bank-account/create", function () {
            return view('admin.add.bank-account-add');
        })->name('add-bank-account');
        Route::get("bank-account/edit", function () {
            return view('admin.edit.bank-account-edit');
        })->name('edit-bank-account');

        Route::get("cost", function () {
            return view('admin.master.cost');
        })->name('cost');
        Route::get("cost/create", function () {
            return view('admin.add.cost-add');
        })->name('add-cost');
        Route::get("cost/edit", function () {
            return view('admin.edit.cost-edit');
        })->name('edit-cost');

        Route::get("transportation", function () {
            return view('admin.master.transportation');
        })->name('transportation');
        Route::get("transportation/create", function () {
            return view('admin.add.transportation-add');
        })->name('add-transportation');
        Route::get("transportation/edit", function () {
            return view('admin.edit.transportation-edit');
        })->name('edit-transportation');

        Route::get("categories", function () {
            return view('admin.master.categories');
        })->name('categories');
        Route::get("categories/create", function () {
            return view('admin.add.categories-add');
        })->name('add-categories');
        Route::get("categories/edit", function () {
            return view('admin.edit.categories-edit');
        })->name('edit-categories');

        Route::get("account", function () {
            return view('admin.master.account');
        })->name('account');
        Route::get("account/create", function () {
            return view('admin.add.account-add');
        })->name('add-account');
        Route::get("account/edit", function () {
            return view('admin.edit.account-edit');
        })->name('edit-account');

        Route::get("user", function () {
            return view('admin.master.user');
        })->name('user');
        Route::get("user/create", function () {
            return view('admin.add.user-add');
        })->name('add-user');
        Route::get("user/edit", function () {
            return view('admin.edit.user-edit');
        })->name('edit-user');
    });
    Route::get("spt", function () {
        return view('admin.spt');
    })->name('spt');
    Route::get("spt/create", function () {
        return view('admin.add.spt-add');
    })->name('add-spt');
    Route::get("spt/edit", function () {
        return view('admin.edit.spt-edit');
    })->name('edit-spt');
    Route::get("spt/detail", function () {
        return view('admin.detail-spt');
    })->name('detail-spt');
});
