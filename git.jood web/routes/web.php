<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddelware;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    // عرض المنتجات
    Route::get('/dashboard/products', [ProductController::class, 'index'])->name('products.index');

    // صفحة إضافة منتج
    Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('products.create');

    // حفظ منتج جديد
    Route::post('/dashboard/products/store', [ProductController::class, 'store'])->name('products.store');

    // صفحة تعديل منتج
    Route::get('/dashboard/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

    // تحديث منتج موجود
    Route::put('/dashboard/products/{product}', [ProductController::class, 'update'])->name('products.update');

    // حذف منتج
    Route::delete('/dashboard/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});


Route::middleware(['auth'])->group(function () {
    // عرض الفئات
    Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('categories.index');

    // صفحة إضافة فئة
    Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create');

    // حفظ فئة جديدة
    Route::post('/dashboard/categories/store', [CategoryController::class, 'store'])->name('categories.store');

    // صفحة تعديل فئة
    Route::get('/dashboard/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

    // تحديث فئة موجودة
    Route::put('/dashboard/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

    // حذف فئة
    Route::delete('/dashboard/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});



Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('index');
});
// Route::get('/index', function () {
//     return view('front.index');
// })->name('index');
Route::get('/index', [FrontController::class,'index'])->name('index');

Route::get('/product', function () {
    return view('front.product');
})->name('prodcut');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/cart', function () {
    return view('front.cart');
})->name('cart');

Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');


Route::get('/about', function () {
    return view('front.about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified',AdminMiddelware::class])->group(function () {
    Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

    // Route::resource('products', ProductController::class);

    // Route::resource('categories', CategoryController::class);
});
require __DIR__.'/auth.php';
