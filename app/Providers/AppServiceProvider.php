<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductBasket;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('*', function ($view) {

            $cardState = null;   

            if(Auth::user()){
                $cardState = ProductBasket::where('user_id','=', Auth::user()->id)->where('status', '=' , 0)->first();
            } 
            
            $imgSrc = $cardState ? asset('img/cartFull.png') : asset('img/cart.png');
    
            $view->with('imgSrc', $imgSrc);
        });

        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();    
    }
}
