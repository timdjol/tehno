<?php

use App\Http\Controllers\Admin\DropController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\PageController;

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

Route::get('/logout', 'App\Http\Controllers\ProfileController@logout')->name('get-logout');


Route::middleware('auth')->group(function ()
{
    Route::group([
        "prefix" => "person",
        "as" => "person.",
    ], function ()
    {
        Route::get('/orders', [\App\Http\Controllers\Person\OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}',
            [\App\Http\Controllers\Person\OrderController::class, 'show'])->name('orders.show');
    });

    Route::group([
        "prefix" => "admin"
    ], function ()
    {
        Route::group(["middleware" => "is_admin"], function ()
        {
            Route::resource("homes", "App\Http\Controllers\Admin\HomeController");
            Route::resource("clients", "App\Http\Controllers\Admin\ClientController");
            Route::resource("deliveries", "App\Http\Controllers\Admin\DeliveryController");
            Route::resource("faqs", "App\Http\Controllers\Admin\FaqController");
            Route::resource("orders", "App\Http\Controllers\Admin\OrderController");
            Route::resource('categories', 'App\Http\Controllers\Admin\CategoryController');
            Route::resource('subcategories', 'App\Http\Controllers\Admin\SubCategoryController');
            Route::resource('brands', 'App\Http\Controllers\Admin\BrandController');
            Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
           // Route::resource('products/{product}', 'App\Http\Controllers\Admin\SkuController');
            Route::resource("contacts", "App\Http\Controllers\Admin\ContactController");
            //Route::resource("properties", "App\Http\Controllers\Admin\PropertyController");
            Route::resource("coupons", "App\Http\Controllers\Admin\CouponController");
            Route::resource("forms", "App\Http\Controllers\Admin\FormController");


            Route::get('subcatories/{id}', [ProductController::class, 'loadSubCategories']);


        });
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/cat/{category}', [MainController::class, 'category'])->name('category');
Route::get('/sub/{subcategory}', [MainController::class, 'subcategory'])->name('subcategory');
Route::get('/cat/{category}/{product}', [MainController::class, 'product'])->name('product');
Route::get('/brands', [MainController::class, 'brands'])->name('brands');
Route::get('/brands/{brand}', [MainController::class, 'brand'])->name('brand');
Route::get('/search', [MainController::class, 'search'])->name('search');

Route::post('form_mail', [MainController::class, 'form_mail'])->name('form_mail');
Route::post('order_mail', [MainController::class, 'order_mail'])->name('order_mail');

Route::group([], function (){
    Route::post('/basket/add/{product?}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
    Route::get('/basket/reset', 'App\Http\Controllers\BasketController@resetBasket')->name('basket-reset');
    Route::group(['middleware' => 'basket_not_empty'], function (){
        Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
        Route::get('/order', [BasketController::class, 'order'])->name('order');
        Route::post('/order/confirm', [BasketController::class, 'orderConfirm'])->name('order-confirm');
        Route::post('/basket/remove/{product}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
        Route::post('/basket/coupon', 'App\Http\Controllers\BasketController@setCoupon')->name('set-coupon');
    });
});





