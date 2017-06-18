<?php

namespace Sistema_Web\Providers;
use Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Validator::extend('letrasandnumeros',function($attribute,$value,$parameters){
                return preg_match('|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|',$value);
        });

         Validator::extend('letrasandnumerosspace',function($attribute,$value,$parameters){
                return preg_match('^[a-zA-Z0-9[:space:]]*$',$value);
        });

         

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
