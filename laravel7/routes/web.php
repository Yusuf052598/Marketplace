<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();


Route::namespace('Back\Login')->prefix('/my-admin/login')->group(function (){
    Route::get('/','Controller@index');
    Route::post('/check','Controller@login')->name('check');
});


Route::namespace('Back')->middleware(['admin'])->prefix('my-admin')->group(function (){
    Route::get('/','Controller@index')->name('my-admin');
    Route::namespace('Markets')->prefix('/market')->group(function (){
        Route::get('/','Controller@index')->name('market');
        Route::get('/create','Controller@create')->name('market.create');
        Route::post('/store','Controller@store')->name('market.store');
        Route::get('/edit/{markets}','Controller@edit')->name('market.edit');
        Route::put('/update','Controller@update')->name('market.update');
        Route::get('/delete/{markets}','Controller@destroy')->name('market.delete');
        Route::post('/select','Controller@select')->name('market.select');
        Route::namespace('Products')->prefix('product')->group(function (){
            Route::get('/','Controller@index')->name('market.product');
            Route::get('/create','Controller@create')->name('market.products.create');
            Route::post('/store','Controller@store')->name('market.products.store');
            Route::get('/edit','Controller@edit')->name('market.products.edit');
            Route::get('/delete/{products}','Controller@destroy')->name('market.products.delete');
            Route::post('/','Controller@select')->name('market.products.select');
        });
    });
    Route::namespace('Categories')->prefix('/categories')->group(function (){
        Route::get('/','Controller@index')->name('categories');
        Route::get('/create','Controller@create')->name('categories.create');
        Route::post('/store','Controller@store')->name('categories.store');
        Route::get('/edit/{categories}','Controller@edit')->name('categories.edit');
        Route::put('/update','Controller@update')->name('categories.update');
        Route::get('/delete/{categories}','Controller@destroy')->name('categories.delete');
    });
    Route::namespace('Products')->prefix('/products')->group(function (){
        Route::get('/','Controller@index')->name('products');
        Route::get('/create','Controller@create')->name('products.create');
        Route::post('/store','Controller@store')->name('products.store');
        Route::get('/edit','Controller@edit')->name('products.edit');
        Route::get('/delete/{products}','Controller@destroy')->name('products.delete');
        Route::post('/select','Controller@select')->name('products.select');
    });
    Route::namespace('Regions')->prefix('/regions')->group(function (){
        Route::get('/','Controller@index')->name('regions');
        Route::get('/create','Controller@create')->name('regions.create');
        Route::post('/store','Controller@store')->name('regions.store');
        Route::get('/edit','Controller@edit')->name('regions.edit');
        Route::get('/delete','Controller@delete')->name('regions.delete');

    });
    Route::namespace('Cities')->prefix('/cities')->group(function (){
        Route::get('/','Controller@index')->name('cities');
        Route::get('/create','Controller@create')->name('cities.create');
        Route::post('/store','Controller@store')->name('cities.store');
        Route::get('/edit','Controller@edit')->name('cities.edit');
        Route::get('/delete','Controller@delete')->name('cities.delete');

    });
    Route::namespace('Users')->prefix('/user')->group(function (){
        Route::get('/','Controller@index')->name('user');
        Route::get('/create','Controller@create')->name('user.create');
        Route::post('/store','Controller@store')->name('user.store');
        Route::get('/edit/{user}','Controller@edit')->name('user.edit');
        Route::put('/update','Controller@update')->name('user.update');
        Route::get('/delete/{user}','Controller@destroy')->name('user.delete');
    });
    Route::namespace('Orders')->prefix('/order')->group(function(){
        Route::get('/','Controller@index')->name('order');
    });
    Route::namespace('Cards')->prefix('/cards')->group(function(){
        Route::get('/','Controller@index')->name('cards');
        Route::get('/card','Controller@card')->name('cards.menu');
        Route::get('/delete/{card}','Controller@destroy')->name('cards.delete');
    });
    /*Role permission*/
    Route::namespace('Permissions')->prefix('/permission')->group(function (){
        Route::get('/','Controller@index')->name('permission');
        Route::get('/create','Controller@create')->name('permission.create');
        Route::post('/store','Controller@store')->name('permission.store');
        Route::get('/edit/{permissions}','Controller@edit')->name('permission.edit');
        Route::put('/update','Controller@update')->name('permission.update');
        Route::get('/destroy/{permissions}','Controller@destroy')->name('permission.delete');
    });
    Route::namespace('Roles')->prefix('/role')->group(function (){
        Route::get('/','Controller@index')->name('role');
        Route::get('/create','Controller@create')->name('role.create');
        Route::post('/store','Controller@store')->name('role.store');
        Route::get('/edit/{roles}','Controller@edit')->name('role.edit');
        Route::put('/update','Controller@update')->name('role.update');
        Route::get('/destroy/{roles}','Controller@destroy')->name('role.delete');
    });
    Route::namespace('ModelHasRoles')->prefix('/user_role')->group(function (){
        Route::get('/','Controller@index')->name('user_role');
        Route::get('/create','Controller@create')->name('user_role.create');
        Route::post('/store','Controller@store')->name('user_role.store');
        Route::get('/edit','Controller@edit')->name('user_role.edit');
        Route::put('/update','Controller@update')->name('user_role.update');
        Route::get('/destroy','Controller@destroy')->name('user_role.delete');
    });
    Route::namespace('ModelHasPermissions')->prefix('/permission_user')->group(function (){
        Route::get('/','Controller@index')->name('permission_user');
        Route::get('/create','Controller@create')->name('permission_user.create');
        Route::post('/store','Controller@store')->name('permission_user.store');
        Route::get('/edit','Controller@edit')->name('permission_user.edit');
        Route::put('/update','Controller@update')->name('permission_user.update');
        Route::get('/destroy','Controller@destroy')->name('permission_user.delete');
    });

});

Route::namespace('Front')->prefix('/')->group(function (){
    Route::get('/','Controller@index')->name('front');
    Route::namespace('Markets')->prefix('/markets')->group(function (){
        Route::get('/','Controller@index')->name('markets');
        Route::get('/{id}/marketpage','Controller@page')->name('markets.page');
        Route::get('/{id}/product','Controller@show')->name('markets.show');
        Route::post('/load','Controller@load')->name('markets.load_more');
    });
    Route::namespace('Card')->prefix('/card')->group(function (){
        Route::get('/','Controller@index')->name('card');
        Route::post('/store','Controller@store')->name('card.store');
        Route::get('/delete/{card}','Controller@destroy')->name('card.delete');
    });
    Route::namespace('Orders')->prefix('/orders')->group(function (){
        Route::post('/store','Controller@store')->name('orders.store');
    });
        Route::namespace('Sign')->prefix('/sign')->group(function (){
            Route::get('/register','Controller@index')->name('sign.register');
            Route::post('/verify','Controller@store')->name('sign.store');
            Route::get('/verify','Controller@index')->name('sign.store');
            Route::post('/check','Controller@check')->name('sign.check');
            Route::get('/check','Controller@index')->name('sign.check');
            Route::post('/lost','Controller@lost')->name('sign.lost');
            Route::get('/lost','Controller@index')->name('sign.lost');
         });


});
Auth::routes();
