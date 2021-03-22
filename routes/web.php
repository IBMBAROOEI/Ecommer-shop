<?php

use Illuminate\Support\Facades\Route;

//Route::get('/m', function () {
//
//});
Route::get('/', function () {
    return view('backend.index');
});

Auth::routes();



/* wishlist*/

Route::get('/wishlist/favorite',[App\Http\Controllers\front\WishListController::class,'index']);
Route::get('add/wishlist/{id}',[App\Http\Controllers\front\WishListController::class,'addwishlist']);
Route::get('del/wishlist/{id}',[App\Http\Controllers\front\WishListController::class, 'deletewishlist']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* route product index front*/
Route::get('/index',[App\Http\Controllers\front\ProductController::class, 'index']);
Route::get('/show/{id}',[App\Http\Controllers\front\ProductController::class, 'show'])->name('show_front');
Route::get('/search',[App\Http\Controllers\front\SearchController::class,'search'])->name('search_all');



Route::post('add-to-cart/{id}',[App\Http\Controllers\front\CartController::class,'addcart']);
Route::get('indexcart',[App\Http\Controllers\front\CartController::class,'indexcart'])->name('indexcart');
Route::delete('/remove-from-cart',[App\Http\Controllers\front\CartController::class, 'remove']);
Route::get('/get/product/attr',[App\Http\Controllers\front\CartController::class,'attr_size']);
Route::get('/get/product/color',[App\Http\Controllers\front\CartController::class,'attr_color']);



Route::get('/cart/checkout',[App\Http\Controllers\front\CheckouteController::class,'index'])->name('checkoute_get');
Route::post('/address/store',[App\Http\Controllers\front\AddressController::class,'store'])->name('address_store');
Route::get('/address',[App\Http\Controllers\front\AddressController::class,'index'])->name('address.index');

Route::delete('/address/delete/{id}',[App\Http\Controllers\front\AddressController::class,'delete'])->name('address_delete');
Route::get('edit/addres/{id}',[App\Http\Controllers\front\AddressController::class,'edit'])->name('edit_add');
Route::patch('/index/address/{id}',[App\Http\Controllers\front\AddressController::class,'update'])->name('update_add');




Route::post('/order',[App\Http\Controllers\front\OrderController::class,'store'])->name('order');
Route::get('/order/get',[App\Http\Controllers\front\OrderController::class,'index'])->name('order_get');
Route::get('/order/get/show/{id}',[App\Http\Controllers\front\OrderController::class,'show'])->name('show_order');


Route::get('/order/peyment',[App\Http\Controllers\front\PeymentController::class,'index'])->name('peyment');
Route::post('/orderfinal',[App\Http\Controllers\front\PeymentController::class,'peyment'])->name('peyment_store');
Route::get('/payment/verify/',[App\Http\Controllers\front\PeymentController::class,'verify']);



Route::resource('brand', '\App\Http\Controllers\Backend\BrandController',['names'=>'brand']);

Route::resource('categorie', '\App\Http\Controllers\Backend\CategorieController',['names'=>'categorie']);


Route::prefix('admin')->group(function () {





    ////slider
    Route::patch('/update/slider/{id}',[App\Http\Controllers\Backend\SliderController::class,'update'])->name('update_slider');
    Route::get('edit/slider/{id}',[App\Http\Controllers\Backend\SliderController::class,'edit'])->name('edit_slider');
    Route::get('/index/slider',[App\Http\Controllers\Backend\SliderController::class,'index'])->name('index_slider');
    Route::post('/slider/store',[App\Http\Controllers\Backend\SliderController::class,'store'])->name('store_slider');
    Route::get('/slider/create',[App\Http\Controllers\Backend\SliderController::class,'create'])->name('create_slider');
    Route::delete('/delete/slider/{id}',[App\Http\Controllers\Backend\SliderController::class,'destroy'])->name('delete_slider');




    /* route backend  product create*/
    Route::get('/product/create',[App\Http\Controllers\Backend\ProductController::class,'create'])->name('index_product');
    /* route backend  product index*/
    Route::get('/product',[App\Http\Controllers\Backend\ProductController::class,'index'])->name('product');
    /* route backend  product store*/
    Route::post('/store',[App\Http\Controllers\Backend\ProductController::class,'store'])->name('store.product');
    /* route backend  product update*/
    Route::patch('/update/{id}',[App\Http\Controllers\Backend\ProductController::class,'update'])->name('update');
    /* route backend  product status*/
    Route::get('status/{Product}',[App\Http\Controllers\Backend\ProductController::class,'status_product'])->name('status');
    /* route backend  product delete*/
    Route::delete('/delete/product/{id}',[App\Http\Controllers\Backend\ProductController::class,'destroy'])->name('delete');


    /* route backend  product edit*/
    Route::get('/edit/product/{id}',[App\Http\Controllers\Backend\ProductController::class,'edit'])->name('edit_p');;
    Route::get('/show/pro/{id}',[App\Http\Controllers\Backend\ProductController::class, 'show'])->name('show_product');







    /* route backend  product image store */
    Route::post('/image/upload/store',[App\Http\Controllers\Backend\UploadController::class,'store'])->name('upload');
//    Route::get('/show/image/{id}',[App\Http\Controllers\Backend\UploadController::class,'show'])->name('show_image');
    Route::patch('/image/update/{id}',[App\Http\Controllers\Backend\UploadController::class,'update'])->name('update_multi');
    Route::delete('/delete/product/image/{id}',[App\Http\Controllers\Backend\UploadController::class,'destroy'])->name('delete_pic');
    Route::get('/edit/pro/{id}',[App\Http\Controllers\Backend\UploadController::class, 'edit'])->name('edit_product_image');










    /* route backend  atribute */
    Route::get('/attribute/{id}/',[App\Http\Controllers\Backend\AtributeController::class,'show'])->name('show_atribute');
    Route::post('/store/atribute',[App\Http\Controllers\Backend\AtributeController::class,'store'])->name('store_attr');
    Route::patch('/update/attr/{id}',[App\Http\Controllers\Backend\AtributeController::class,'update'])->name('update_atribute');
//    Route::delete('/delete/attr/{id}',[App\Http\Controllers\Backend\AtributeController::class,'destroy'])->name('delete');
    Route::get('/edit/pro/attr/{id}',[App\Http\Controllers\Backend\AtributeController::class,'edit'])->name('edit_atribute');

});

