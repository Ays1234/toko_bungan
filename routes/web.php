<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\CarrouselController;
use App\Http\Controllers\Admin\DecorationController;
use App\Http\Controllers\Admin\FloralController;

/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by situs me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//  });

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

//staff
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_staff/create', [StaffController::class, 'create']);
Route::post('/update_staff/{id}', [StaffController::class, 'update']);
Route::post('/destroy/{id}', [StaffController::class, 'destroy']);

//Carrpusel
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_carrousel/create', [CarrouselController::class, 'create']);
Route::post('/update_carrousel/{id}', [CarrouselController::class, 'update']);
Route::post('/destroy_carrousel/{id}', [CarrouselController::class, 'destroy']);

//decoration_cms
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_decoration/create', [DecorationController::class, 'create']);
Route::post('/update_decoration/{id}', [DecorationController::class, 'update']);
Route::post('/destroy_decoration/{id}', [DecorationController::class, 'destroy']);

//floral_cms
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_floral/create', [FloralController::class, 'create']);
Route::post('/update_floral/{id}', [FloralController::class, 'update']);
Route::post('/destroy_floral/{id}', [FloralController::class, 'destroy']);

// home page
// Route::get('/', function () {
//     return view('home');
// })->name('home');

// login
Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::get('/', function () {
        return view('backend/login/index');
    })->name('index')->middleware('guest');
});

// profile
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/', function () {
        return view('frontend/profile/index');
    })->name('index');
});
// press
Route::group(['prefix' => 'press', 'as' => 'press.'], function () {
    Route::get('/', function () {
        return view('frontend/press/index');
    })->name('index');
    Route::get('/category', function () {
        return view('frontend/press/category');
    })->name('category');

    Route::get('/article', function () {
        return view('frontend/press/article');
    })->name('article');

    Route::get('/article2', function () {
        return view('frontend/press/article2');
    })->name('article2');

    Route::get('/article3', function () {
        return view('frontend/press/article3');
    })->name('article3');

    Route::get('/article4', function () {
        return view('frontend/press/article4');
    })->name('article4');

    Route::get('/article5', function () {
        return view('frontend/press/article5');
    })->name('article5');

    Route::get('/article6', function () {
        return view('frontend/press/article6');
    })->name('article6');
});
// services
Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
    Route::get('/', function () {
        return view('frontend/services/index');
    })->name('index');
});
// decoration
Route::group(['prefix' => 'decoration', 'as' => 'decoration.'], function () {
    Route::get('/', function () {
        return view('frontend/decoration/index');
    })->name('index');
});
// floral
Route::group(['prefix' => 'floral', 'as' => 'floral.'], function () {
    Route::get('/', function () {
        return view('frontend/floral/index');
    })->name('index');
});
// contact
Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/', function () {
        return view('frontend/contact/index');
    })->name('index');
});

// CMS
// dashboard
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/', function () {
        return view('backend/dashboard/index');
    })->name('index')->middleware('auth');
});

// Master
// Staff
Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {    
    Route::get('/', [StaffController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/form', function () {
        return view('backend/master/staff/form');
    })->name('form')->middleware('auth');
  
    Route::get('edit/{id}', [StaffController::class, 'edit'])->middleware('auth');
});
// Category_press
Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('/', function () {
        return view('backend/master/category_press/index');
    })->name('index');
    Route::get('/form', function () {
        return view('backend/master/category_press/form');
    })->name('form');
});

// Content
// Carrousel
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'carrousel', 'as' => 'carrousel.'], function () {
    Route::get('/', [CarrouselController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/form', function () {
        return view('backend/content/carrousel_home/form');
    })->name('form');
    Route::get('edit/{id}', [CarrouselController::class, 'edit'])->middleware('auth');
});
// Article
Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
    Route::get('/', function () {
        return view('backend/content/article/index');
    })->name('index');
});

// Project
// decoration

  
Route::group(['prefix' => 'decoration_cms', 'as' => 'decoration_cms.'], function () {
    Route::get('/', [DecorationController::class, 'index'])->name('index')->middleware('auth');
    Route::get('edit/{id}', [DecorationController::class, 'edit'])->middleware('auth');
    Route::get('/form', function () {
        return view('backend/project/decoration/form');
    })->name('form');
});
// floral
Route::group(['prefix' => 'floral_cms', 'as' => 'floral_cms.'], function () {
    Route::get('/', [FloralController::class, 'index'])->name('index')->middleware('auth');
    Route::get('edit/{id}', [FloralController::class, 'edit'])->middleware('auth');
    Route::get('/form', function () {
        return view('backend/project/floral/form');
    })->name('form');
});
