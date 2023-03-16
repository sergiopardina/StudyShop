<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

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
Route::group(['middleware' => ['setLocale']], function () {

    Route::get('/', function () {

        $products = DB::table('products')
            ->join('photos', 'products.id', '=', 'photos.product_id')
            ->where('top_discount', '=', 1)
            ->groupBy('products.id')
            ->select('products.name', 'products.description', DB::raw('GROUP_CONCAT(photos.path) as photos'))
            ->get();
        return view('welcome', [
            'products' => $products,
        ]);
    })->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::middleware('auth')
        ->group(function () {
            Route::get('/password_change', function () {
                return view('auth.password_change');
            })->name('change.password');
            Route::middleware('passwordChanged')
                ->group(function () {
                    Route::get('/admin', [AuthController::class, 'login'])
                        ->name('admin');

                    Route::get('/profile', [ProfileController::class, 'edit'])
                        ->name('profile.edit');
                    Route::patch('/profile', [ProfileController::class, 'update'])
                        ->name('profile.update');
                    Route::delete('/profile', [ProfileController::class, 'destroy'])
                        ->name('profile.destroy');

                    Route::get('/admin/index', [AdminController::class, 'index'])
                        ->name('admins.index');
                    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])
                        ->name('admins.destroy');
                    Route::get('/admin/edit/{admin}', [AdminController::class, 'edit'])
                        ->name('admins.edit');
                    Route::put('/admins/{admin}', [AdminController::class, 'update'])
                        ->name('admins.update');
                    Route::get('/admins/add', [AdminController::class, 'add'])
                        ->name('admins.add');
                    Route::post('/admins/index', [AdminController::class, 'store'])
                        ->name('admins.create');
                    Route::get('/admins/roles', [AdminController::class, 'checkRoles'])
                        ->name('admins.roles');

                    Route::get('/category', [CategoryController::class, 'index'])
                        ->name('category.index');
                    Route::get('/category/create', [CategoryController::class, 'create'])
                        ->name('category.create');
                    Route::post('/category/store', [CategoryController::class, 'store'])
                        ->name('category.store');
                    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])
                        ->name('category.edit');
                    Route::put('/category/{category}', [CategoryController::class, 'update'])
                        ->name('category.update');
                    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])
                        ->name('category.destroy');

                    Route::get('/brand', [BrandController::class, 'index'])
                        ->name('brand.index');
                    Route::get('/brand/create', [BrandController::class, 'create'])
                        ->name('brand.create');
                    Route::post('/brand/store', [BrandController::class, 'store'])
                        ->name('brand.store');
                    Route::get('/brand/edit/{brand}', [BrandController::class, 'edit'])
                        ->name('brand.edit');
                    Route::put('/brand/{brand}', [BrandController::class, 'update'])
                        ->name('brand.update');
                    Route::delete('/brand/{brand}', [BrandController::class, 'destroy'])
                        ->name('brand.destroy');
//                    Route::get('/catalog', function () {
//                        return view('catalog');
//                    });

                    Route::get('/account', function () {
                        return view('account');
                    });
                    Route::get('/cart', function () {
                        return view('cart');
                    });
                    Route::get('/accedit', function () {
                        return view('accedit');
                    });

                    Route::get('/product', [ProductController::class, 'index'])
                        ->name('product.index');
                    Route::get('/product/create', [ProductController::class, 'create'])
                        ->name('product.create');
                    Route::post('/product/store', [ProductController::class, 'store'])
                        ->name('product.store');
                    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])
                        ->name('product.edit');
                    Route::put('/product/{product}', [ProductController::class, 'update'])
                        ->name('product.update');
                    Route::delete('/product/{product}', [ProductController::class, 'destroy'])
                        ->name('product.destroy');
                });
        });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contacts', function () {
        return view('contacts');
    });
    Route::get('/category/{name}', [CategoryController::class, 'show'])
        ->name('category.show');
});
Route::post('/locale', [App\Http\Controllers\LocaleController::class, 'update'])
    ->name('locale.update');

require __DIR__ . '/auth.php';
