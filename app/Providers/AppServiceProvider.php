<?php

namespace App\Providers;

use App\Models\Blog\Menu;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\System\ConfigLink;
use App\Models\System\NavBar;
use App\Models\System\PhoneSupport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
    }
}
