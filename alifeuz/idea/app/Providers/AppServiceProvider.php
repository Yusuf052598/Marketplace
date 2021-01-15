<?php

namespace App\Providers;

use App\Ad;
use App\Categories;
use App\MarketCategories;
use App\News;
use App\Products;
use App\Sliders;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   Schema::defaultStringLength(191);
        $categories=Categories::all();
        $last_products=Products::with('photos')->whereHas('category',function (Builder $query){
            $query->where('market_id','=','8');
        })->where('recommen','=','0')
            ->take(5)->orderBy('id','DESC')->get();
        $aksiy=Products::with('category')->with('photos')
            ->where('id','>','43')
            ->where('id','<','47')->get();
        $market_categories=MarketCategories::with('market')->where('market_id','=','8')->take(5)->latest()->get();
       return View::share(compact('categories','market_categories','aksiy','last_products'));
    }
}
