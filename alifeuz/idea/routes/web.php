<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Auth::routes();

/*<!--BACKEND QI_SMI */



Route::namespace('Back\Login')->prefix('/admin/login')->group(function (){
    Route::get('/','Controller@index');
    Route::post('/check','Controller@login')->name('check');
});

Route::namespace('Back')->middleware(['admin'])->prefix('admin')->group(function (){
    Route::get('/','Controller@index')->name('admin');
    Route::namespace('Users')->middleware('permission:Super_Admin')->prefix('/users')->group(function (){
        Route::get('/','Controller@index')->name('users');
        Route::get('/create','Controller@create')->name('users.create');
        Route::get('/edit/{user}','Controller@edit')->name('users.edit');
        Route::put('/update','Controller@update')->name('users.update');
        Route::get('/delete/{user}','Controller@destroy')->name('users.delete');
        Route::post('/store','Controller@store')->name('users.store');
    });
     Route::namespace('Article')->middleware('permission:Super_Admin')->prefix('/article')->group(function (){
        Route::get('/','Controller@index')->name('articles');
        Route::get('/create','Controller@create')->name('articles.create');
        Route::post('/store','Controller@store')->name('articles.store');
        Route::get('/delete/{article}','Controller@destroy')->name('articles.delete');
    });
   Route::namespace('News')->middleware('permission:moderator uchun|Super_Admin')->prefix('/news')->group(function (){
       Route::get('/','Controller@index')->name('news');
       Route::get('/create','Controller@create')->name('news.create');
       Route::post('/store','Controller@store')->name('news.store');
       Route::get('/edit/{id}','Controller@edit')->name('news.edit');
       Route::put('/update','Controller@update')->name('news.update');
       Route::get('/destroy/{news}','Controller@destroy')->name('news.delete');
       Route::post('ckeditor/image_upload', 'Controller@upload')->name('news.upload');
    });
    Route::namespace('Slider')->prefix('/slider')->group(function (){
        Route::get('/','Controller@index')->name('slider');
        Route::get('/create','Controller@create')->name('slider.create');
        Route::post('/store','Controller@store')->name('slider.store');
        Route::get('/edit/{sliders}','Controller@edit')->name('slider.edit');
        Route::put('/update','Controller@update')->name('slider.update');
        Route::get('/destroy/{sliders}','Controller@destroy')->name('slider.delete');
        Route::post('ckeditor/image_upload', 'Controller@upload')->name('slider.upload');
    });
    Route::namespace('Ad')->prefix('/ad')->group(function (){
        Route::get('/','Controller@index')->name('ad');
        Route::get('/create','Controller@create')->name('ad.create');
        Route::post('/store','Controller@store')->name('ad.store');
        Route::get('/edit/{ad}','Controller@edit')->name('ad.edit');
        Route::put('/update','Controller@update')->name('ad.update');
        Route::get('/destroy/{ad}','Controller@destroy')->name('ad.delete');
    });
    Route::namespace('Notify')->prefix('/notify')->group(function (){
        Route::get('/','Controller@index')->name('notify');
        Route::get('/create','Controller@create')->name('notify.create');
        Route::post('/store','Controller@store')->name('notify.store');
        Route::get('/edit/{ad}','Controller@edit')->name('notify.edit');
        Route::put('/update','Controller@update')->name('notify.update');
        Route::get('/destroy/{ad}','Controller@destroy')->name('notify.delete');
    });
    Route::namespace('Categories')->middleware('permission:Super_Admin')->prefix('/categories')->group(function (){
        Route::get('/','Controller@index')->name('categories');
        Route::get('/create','Controller@create')->name('categories.create');
        Route::post('/store','Controller@store')->name('categories.store');
        Route::get('/edit/{categories}','Controller@edit')->name('categories.edit');
        Route::put('/update','Controller@update')->name('categories.update');
        Route::get('/destroy/{categories}','Controller@destroy')->name('categories.delete');
    });
    Route::namespace('Announcement')->prefix('/announce')->group(function (){
        Route::get('/','Controller@index')->name('announce');
        Route::get('/create','Controller@create')->name('announce.create');
        Route::post('/store','Controller@store')->name('announce.store');
        Route::get('/edit/{categories}','Controller@edit')->name('announce.edit');
        Route::put('/update','Controller@update')->name('announce.update');
        Route::get('/destroy/{categories}','Controller@destroy')->name('announce.delete');
    });
    /*Role permission*/
    Route::namespace('Permission')->middleware('permission:Super_Admin')->prefix('/permission')->group(function (){
        Route::get('/','Controller@index')->name('permission');
        Route::get('/create','Controller@create')->name('permission.create');
        Route::post('/store','Controller@store')->name('permission.store');
        Route::get('/edit/{permissions}','Controller@edit')->name('permission.edit');
        Route::put('/update','Controller@update')->name('permission.update');
        Route::get('/destroy/{permissions}','Controller@destroy')->name('permission.delete');
    });
    Route::namespace('Role')->middleware('permission:Super_Admin')->prefix('/role')->group(function (){
        Route::get('/','Controller@index')->name('role');
        Route::get('/create','Controller@create')->name('role.create');
        Route::post('/store','Controller@store')->name('role.store');
        Route::get('/edit/{roles}','Controller@edit')->name('role.edit');
        Route::put('/update','Controller@update')->name('role.update');
        Route::get('/destroy/{roles}','Controller@destroy')->name('role.delete');
    });
    Route::namespace('ModelHasRoles')->middleware('permission:Super_Admin')->prefix('/user_role')->group(function (){
        Route::get('/','Controller@index')->name('user_role');
        Route::get('/create','Controller@create')->name('user_role.create');
        Route::post('/store','Controller@store')->name('user_role.store');
        Route::get('/edit','Controller@edit')->name('user_role.edit');
        Route::put('/update','Controller@update')->name('user_role.update');
        Route::get('/destroy','Controller@destroy')->name('user_role.delete');
    });
    Route::namespace('ModelHasPermissions')->middleware('permission:Super_Admin')->prefix('/permission_user')->group(function (){
        Route::get('/','Controller@index')->name('permission_user');
        Route::get('/create','Controller@create')->name('permission_user.create');
        Route::post('/store','Controller@store')->name('permission_user.store');
        Route::get('/edit','Controller@edit')->name('permission_user.edit');
        Route::put('/update','Controller@update')->name('permission_user.update');
        Route::get('/destroy','Controller@destroy')->name('permission_user.delete');
    });
    /*Martketplace*/
    Route::namespace('Marketplace')->middleware('permission:Super_Admin')->prefix('/marketplace')->group(function (){
        Route::get('/','Controller@index')->name('marketplace');
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
        Route::namespace('Card')->prefix('/cards')->group(function(){
            Route::get('/','Controller@index')->name('cards');
            Route::get('/card','Controller@card')->name('cards.menu');
            Route::get('/delete/{card}','Controller@destroy')->name('cards.delete');
        });
    });

});

  Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";
  });


//FRONT
Route::get('/locale/{locale}',function ($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});
Route::namespace('Front\Login')->prefix('/login')->group(function (){
    Route::get('/','Controller@index')->name('login');
    Route::post('/check','Controller@login')->name('login.check');
});

// With google route
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback')->name('login.google');

// With github route
Route::get('login/github', 'Auth\LoginController@redirectToGithub')->name('login.github');
Route::get('login/github/callback', 'Auth\LoginController@handleGithubCallback')->name('login.github');

// With facebook route
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback')->name('login.facebook');


Route::namespace('Front')->prefix('/')->group(function (){

    Route::get('/','Controller@index')->name('index');
    Route::get('/about','Controller@about')->name('about');
    Route::get('/slider/{sliders}','Controller@slider')->name('sliders');
    Route::get('/store','Controller@update')->name('index.update');
    Route::post('/ajax','Controller@ajax')->name('ajax');
    Route::get('/search','Controller@filter')->name('index.filter');
    Route::namespace('Categories')->prefix('/categories')->group(function (){
        Route::get('/{name}','Controller@index')->name('category');
        Route::get('/view/{id}-{url}','Controller@show')->name('categories.single');
    });
   /* Route::namespace('Register')->prefix('/register')->group(function (){
        Route::get('/','Controller@create')->name('register');
        Route::post('/store','Controller@store')->name('register.store');
    });*/
    Route::namespace('Tag')->prefix('/tags')->group(function (){
        Route::get('/filter/{name}','Controller@filter')->name('tags.filter');
    });

    Route::get('/{user}/{id}-{url}','Blog\Controller@show')->name('blog.show');

    Route::namespace('Likes')->prefix('/likes')->group(function (){
        Route::get('/store','Controller@store')->name('likes.store');
    });
     Route::namespace('Article')->prefix('/article')->group(function (){
        Route::get('/','Controller@create')->name('article.create');
        Route::post('/store','Controller@store')->name('article.store');
    });
    Route::namespace('Tests')->prefix('/tests')->group(function (){
        Route::get('/show/{url}-{slug}','Controller@show')->name('tests.show');
    });
    Route::namespace('Marketplace')->prefix('/marketplace')->group(function (){
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



});
/*
Route::get('/home', 'HomeController@index')->name('home');*/
