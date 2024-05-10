<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use TorMorten\Eventy\Facades\Eventy;

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
        // doc https://filamentphp.com/docs/3.x/panels/getting-started#unguarding-all-models
        Model::unguard();

        $files = glob(__DIR__ . '/../../plugins/*.php');
        foreach ($files as $file) {
            require_once $file;
        }

        Eventy::action('plugins_loaded', $files);


    }
}
