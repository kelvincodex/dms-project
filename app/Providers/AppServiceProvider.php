<?php

namespace App\Providers;

use App\Util\ListUtil\SidebarListUtil;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    use SidebarListUtil;
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
        $sidebar = [];


        view()->composer(
            "v1.layout.dashboard-layout",
            function ($view){
                $view->with([
                    "sidebar"=>$this->sidebarList,
                    "routeName"=>Route::currentRouteName(),
                ]);
            }
        );

        Schema::defaultStringLength(191);
    }
}
