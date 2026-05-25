<?php

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

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Admin\AdmissionController as AdminAdmissionController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    $sections = \App\Models\Section::with(['images' => function($q) {
        $q->where('is_active', true)->orderBy('sort_order');
    }])->get()->keyBy('identifier');
    return view('welcome', compact('sections'));
});

Route::get('/admission', function () {
    return view('admission');
})->name('admissions.create');

Route::post('/admission', [AdmissionController::class, 'store'])->name('admissions.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/admissions', [AdminAdmissionController::class, 'index'])->name('admissions.index');
    Route::get('/admissions/{admission}/edit', [AdminAdmissionController::class, 'edit'])->name('admissions.edit');
    Route::put('/admissions/{admission}', [AdminAdmissionController::class, 'update'])->name('admissions.update');
    Route::get('/admissions/{admission}/print', [AdminAdmissionController::class, 'print'])->name('admissions.print');

    // Homepage Management
    Route::get('/homepage', [App\Http\Controllers\Admin\HomepageController::class, 'index'])->name('homepage.index');
    Route::get('/homepage/{section}/edit', [App\Http\Controllers\Admin\HomepageController::class, 'edit'])->name('homepage.edit');
    Route::put('/homepage/{section}', [App\Http\Controllers\Admin\HomepageController::class, 'update'])->name('homepage.update');
    Route::post('/homepage/{section}/image', [App\Http\Controllers\Admin\HomepageController::class, 'uploadImage'])->name('homepage.uploadImage');
    Route::put('/homepage/{section}/images', [App\Http\Controllers\Admin\HomepageController::class, 'updateImages'])->name('homepage.updateImages');

    // Pages routes
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class)->only(['index', 'edit', 'update']);
});

// Generic Pages (must be at the bottom to avoid catching other routes like /admin)
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'show'])->where('slug', 'about-us|contact')->name('pages.show');
