<?php

//Auth Controller
Route::post('/userLogin',['as'=>'user.login','uses'=>'authController@userLogin'])->middleware('admin');
Route::post('/userRegister',['as'=>'user.register','uses'=>'authController@userRegister']);
Route::get('/userLogout',['as'=>'user.logout','uses'=>'authController@userLogout']);

//Base Controller
Route::get('/',['as'=>'index','uses'=>'Controller@index']);
Route::get('/backend',['as'=>'backend','uses'=>'Controller@backend'])->middleware('auth');

//Cart Controller
Route::get('/cart',['as'=>'user.cart','uses'=>'cartController@cart']);

//Categories Controller
Route::get('/categories',['as'=>'shopping.categories','uses'=>'categoryController@categories']);
Route::get('/categories/form',['as'=>'show.categoriesForm','uses'=>'categoryController@showCategoriesForm']);
Route::post('/Categories/add',['as'=>'add.categories','uses'=>'categoryController@addCategories']);

//Product Controller
Route::get('/products',['as'=>'shop.product','uses'=>'productController@products']);
Route::get('/products/form',['as'=>'show.productsForm','uses'=>'productController@showProductsForm']);
Route::post('/Products/add',['as'=>'add.products','uses'=>'productController@addProducts']);


//Checkout Controller
Route::get('/checkout',['as'=>'shop.checkout','uses'=>'checkoutController@checkout']);

//Contact Controller
Route::get('/contactUs',['as'=>'contact.us','uses'=>'contactController@contactUs']);

//Jewelry Controller
Route::get('/jewelry',['as'=>'jewelry.section','uses'=>'jewelryController@jewelry']);

//Men Controller
Route::get('/men',['as'=>'men.section','uses'=>'menController@men']);

//Women Controller
Route::get('/women',['as'=>'women.section','uses'=>'womenController@women']);

//Pages Controller
Route::get('/pages',['as'=>'our.pages','uses'=>'pagesController@pages']);

//Shoes Controller
Route::get('/shoes',['as'=>'shoes.section','uses'=>'shoesController@shoes']);

//Blogs Controller
Route::get('/blogs',['as'=>'our.blogs','uses'=>'blogsController@blogs']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
