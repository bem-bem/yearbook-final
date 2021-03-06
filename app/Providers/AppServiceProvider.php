<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::aliasComponent('components.btnCreate', 'btnCreate');
        Blade::aliasComponent('components.img', 'img');
        Blade::aliasComponent('components.btnUpdate', 'btnUpdate');
        Blade::aliasComponent('components.btnDelete', 'btnDelete');
        Blade::aliasComponent('components.btnSearch', 'btnSearch');
        Blade::aliasComponent('components.cssWave', 'cssWave');
    }

    public function register()
    {
        //
    }
}
