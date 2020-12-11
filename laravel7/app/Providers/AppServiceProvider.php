<?php

namespace App\Providers;

use App\Card;
use App\Categories;
use App\Products;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use PHPUnit\Framework\Constraint\Count;

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
    {
        Schema::defaultStringLength(191);
        $last_products=Products::with('photos')->whereHas('category',function (Builder $query){
            $query->where('market_id','=','8');
        })->where('recommen','=','0')
         ->take(5)->orderBy('id','DESC')->get();

        $aksiy=Products::with('category')->with('photos')
            ->where('id','>','43')
            ->where('id','<','47')->get();
        $categories=Categories::with('market')->where('market_id','=','8')->take(5)->latest()->get();
        return View::share(compact('aksiy','last_products','categories'));
    }
}
