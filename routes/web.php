<?php


use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\Company\CompanyController;
use App\Http\Controllers\Backend\CompanyValidation\CompanyValidationController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Role\RoleController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Category\CategoryController;
use App\Http\Controllers\Frontend\Company\CompanyController as CompanyCompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/home', function () {
//     return view('frontend.index');
// });
// Route::get('/startup', function () {
//     return view('frontend.startup');
// });
// Route::get('/arsitektur', function () {
//     return view('frontend.arsitektur');
// });
// Route::get('/interior', function () {
//     return view('frontend.interior');
// });
// Route::get('/musik', function () {
//     return view('frontend.musik');
// });
// Route::get('/seni', function () {
//     return view('frontend.seni');
// });
// Route::get('/produk', function () {
//     return view('frontend.produk');
// });
// Route::get('/fashion', function () {
//     return view('frontend.fashion');
// });
// Route::get('/kuliner', function () {
//     return view('frontend.kuliner');
// });
// Route::get('/film', function () {
//     return view('frontend.film');
// });
// Route::get('/animasi', function () {
//     return view('frontend.animasi');
// });
// Route::get('/fotografi', function () {
//     return view('frontend.fotografi');
// });
// Route::get('/komunikasi', function () {
//     return view('frontend.komunikasi');
// });
// Route::get('/televisi', function () {
//     return view('frontend.televisi');
// });
// Route::get('/kriya', function () {
//     return view('frontend.kriya');
// });
// Route::get('/periklanan', function () {
//     return view('frontend.periklanan');
// });
// Route::get('/pertunjukan', function () {
//     return view('frontend.pertunjukan');
// });
// Route::get('/aplikasi', function () {
//     return view('frontend.aplikasi');
// });
Route::get('/berita1', function () {
    return view('frontend.berita1');
});
Route::get('/berita2', function () {
    return view('frontend.berita2');
});
Route::get('/berita3', function () {
    return view('frontend.berita3');
});
Route::get('/berita4', function () {
    return view('frontend.berita4');
});
Route::get('/berita5', function () {
    return view('frontend.berita5');
});

Route::prefix('categories')->group(function () {
    Route::get('', [CategoryController::class, 'index'])->name('categories');
    Route::get('{category}/detail', [CategoryController::class, 'detail'])->name('categories.detail');
});

Route::prefix('companies')->group(function () {
    Route::get('{company}/detail', [CompanyCompanyController::class, 'detail'])->name('companies.detail');
});

Route::get('/announcements', function () {
    return view('frontend.announcement.index', ['title' => 'Berita']);
})->name('announcements');

Route::get('/auth', [AuthController::class, 'index'])->name('auth')->middleware('guest');
Route::get('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/register', [AuthController::class, 'register'])->middleware('guest')->name('auth.register');

Route::prefix('apps')->middleware('auth')->group(function () {
    Route::prefix('dashboard')->middleware('can:read-dashboard')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('apps.dashboard');
        Route::get('get-graphic-data', [DashboardController::class, 'getGraphicData'])->name('apps.dashboard.get-graphic-data');
    });

    // Route::prefix('users')->middleware('can:read-users')->group(function () {
    //     Route::get('', [UserController::class, 'index'])->name('apps.users');
    //     Route::get('getData', [UserController::class, 'getData'])->name('apps.users.getData');
    //     Route::get('create', [UserController::class, 'create'])->middleware('can:create-users')->name('apps.users.create');
    //     Route::post('store', [UserController::class, 'store'])->middleware('can:create-users')->name('apps.users.store');
    //     Route::get('{user}/edit', [UserController::class, 'edit'])->middleware('can:update-users')->name('apps.users.edit');
    //     Route::post('{user}/update', [UserController::class, 'update'])->middleware('can:update-users')->name('apps.users.update');
    //     Route::delete('{user}/delete', [UserController::class, 'destroy'])->middleware('can:delete-users')->name('apps.users.destroy');
    // });

    // Route::prefix('roles')->middleware('can:read-roles')->group(function () {
    //     Route::get('', [RoleController::class, 'index'])->name('apps.roles');
    //     Route::get('getData', [RoleController::class, 'getData'])->name('apps.roles.getData');
    //     // Route::post('', [RoleController::class, 'store'])->middleware('can:create-roles')->name('apps.roles.store');
    //     // Route::get('{role}', [RoleController::class, 'show'])->middleware('can:update-roles')->name('apps.roles.show');
    //     // Route::post('{role}', [RoleController::class, 'update'])->middleware('can:update-roles')->name('apps.roles.update');
    //     // Route::delete('{role}', [RoleController::class, 'destroy'])->middleware('can:delete-roles')->name('apps.roles.destroy');
    //     Route::get('{role}/change-permissions', [RoleController::class, 'getPermissions'])->middleware('can:update-roles')->name('apps.roles.getPermissions');
    //     Route::post('{role}/change-permissions', [RoleController::class, 'changePermissions'])->middleware('can:update-roles')->name('apps.roles.changePermissions');
    // });

    Route::prefix('companies')->middleware('can:read-companies')->group(function () {
        Route::get('', [CompanyController::class, 'index'])->name('apps.companies');
        Route::get('getData', [CompanyController::class, 'getData'])->name('apps.companies.getData');
        Route::get('create', [CompanyController::class, 'create'])->middleware('can:create-companies')->name('apps.companies.create');
        Route::post('store', [CompanyController::class, 'store'])->middleware('can:create-companies')->name('apps.companies.store');
        Route::get('{company}/edit', [CompanyController::class, 'edit'])->middleware('can:update-companies')->name('apps.companies.edit');
        Route::post('{company}/update', [CompanyController::class, 'update'])->middleware('can:update-companies')->name('apps.companies.update');
        Route::get('{company}/detail', [CompanyController::class, 'detail'])->name('apps.companies.detail');
    });

    Route::prefix('validations')->middleware('can:company-validations')->group(function () {
        Route::get('', [CompanyValidationController::class, 'index'])->name('apps.validations');
        Route::get('getData', [CompanyValidationController::class, 'getData'])->name('apps.validations.getData');
        Route::get('{company}/detail', [CompanyValidationController::class, 'detail'])->name('apps.validations.detail');
        Route::post('{company}/approved', [CompanyValidationController::class, 'approved'])->name('apps.validations.approved');
        Route::post('{company}/rejected', [CompanyValidationController::class, 'rejected'])->name('apps.validations.rejected');
        Route::get('{company}/print', [CompanyValidationController::class, 'print'])->name('apps.validations.print');
    });
});

Route::get('/errors', function (Request $request) {
    return view('errors.' . $request->status);
});
