<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        /*\URL::forceScheme('https');*/
        \URL::forceScheme('http');
        
    }


}
