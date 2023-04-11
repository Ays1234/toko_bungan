<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\CarrouselController;
use App\Http\Controllers\Admin\DecorationController;
use App\Http\Controllers\Admin\FloralController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\User\UserArticleController;
use App\Http\Controllers\User\UserDecorationController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\Admin\M_access_Controller;

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

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('adminauth');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/storage-link', function(){
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
symlink($targetFolder,$linkFolder);
});

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

//category
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_category/create', [CategoryController::class, 'create']);
Route::post('/update_category/{id}', [CategoryController::class, 'update']);
Route::post('/destroy_category/{id}', [CategoryController::class, 'destroy']);

//category
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_article/create', [ArticleController::class, 'create']);
Route::post('/update_article/{id}', [ArticleController::class, 'update']);
Route::post('/destroy_article/{id}', [ArticleController::class, 'destroy']);
Route::post('/upload', [ArticleController::class, 'uploadImage'])->name('ckeditor.upload');

//m_access
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::post('/add_access/create', [M_access_Controller::class, 'create']);
Route::post('/update_access/{id}', [M_access_Controller::class, 'update']);
Route::post('/destroy_access/{id}', [M_access_Controller::class, 'destroy']);

Route::post('/add_data_user/create', [M_access_Controller::class, 'add_data_user']);

// home page
Route::get('/', function () {
    return view('home');
})->name('home');

// login
Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::get('/', function () {
        return view('backend/login/index');
    })->name('index');
});

// profile
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/', function () {
        return view('frontend/profile/index');
    })->name('index');
});
// press
Route::group(['prefix' => 'press', 'as' => 'press.'], function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('adminauth');
    Route::get('/', [UserArticleController::class, 'index'])->name('index');;
    Route::get('baca/{id}', [UserArticleController::class, 'baca']);
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
    Route::get('/', [UserDecorationController::class, 'index'])->name('index');;
    // Route::get('/', function () {
    //     return view('frontend/decoration/index');
    // })->name('index');
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
    // Route::middleware(['auth:admin'])->group(function () {
    Route::get('/', function () {
        return view('backend/dashboard/index');
    })->name('index')->middleware('adminauth');
});

// Master
// Staff
Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {    
    Route::get('/', [StaffController::class, 'index'])->name('index')->middleware('adminauth');
    Route::get('/form', function () {
        return view('backend/master/staff/form');
    })->name('form')->middleware('adminauth');
  
    Route::get('edit/{id}', [StaffController::class, 'edit'])->middleware('adminauth');
});
// Category_press
Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    // Route::get('/', function () {
    //     return view('backend/master/category_press/index');
    // })->name('index');
    Route::get('/', [CategoryController::class, 'index'])->name('index')->middleware('adminauth');
    Route::get('/form', function () {
        return view('backend/master/category_press/form');
    })->name('form');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->middleware('adminauth');
});

// Content
// Carrousel
/*
|--------------------------------------------------------------------------
| Web Routes API Routes create by site me: https://bit.ly/yogingoding
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'carrousel', 'as' => 'carrousel.'], function () {
    Route::get('/', [CarrouselController::class, 'index'])->name('index')->middleware('adminauth');
    Route::get('/form', function () {
        return view('backend/content/carrousel_home/form');
    })->name('form');
    Route::get('edit/{id}', [CarrouselController::class, 'edit'])->middleware('adminauth');
});
// Article
Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index')->middleware('adminauth');
    Route::get('/form', function () {
        return view('backend/content/article/form');
    })->name('form');
    Route::get('edit/{id}', [ArticleController::class, 'edit'])->middleware('adminauth');
});

// Project
// decoration

  
Route::group(['prefix' => 'decoration_cms', 'as' => 'decoration_cms.'], function () {
    Route::get('/', [DecorationController::class, 'index'])->name('index')->middleware('adminauth');
    Route::get('edit/{id}', [DecorationController::class, 'edit'])->middleware('adminauth');
    Route::get('/form', function () {
        return view('backend/project/decoration/form');
    })->name('form');
});
// floral
Route::group(['prefix' => 'floral_cms', 'as' => 'floral_cms.'], function () {
    Route::get('/', [FloralController::class, 'index'])->name('index')->middleware('adminauth');
    Route::get('edit/{id}', [FloralController::class, 'edit'])->middleware('adminauth');
    Route::get('/form', function () {
        return view('backend/project/floral/form');
    })->name('form');
});

// Keamanan
// management access
Route::group(['prefix' => 'm_access', 'as' => 'm_access.'], function () {
    Route::get('/data_user', [DataUserController::class, 'index'])->name('data_user')->middleware('adminauth');
    Route::get('/', function () {
        return view('backend/keamanan/management_access/index');
    })->name('index');
    Route::get('/form', [M_access_Controller::class, 'form'])->name('form')->middleware('adminauth');
  
    // Route::get('/form', function () {
    //     return view('backend/keamanan/management_access/form');
    // })->name('form');
    // Route::get('/data_user', function () {
    //     return view('backend/keamanan/management_access/data_user');
    // })->name('data_user');
});

