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

        $this->load_plugins();

    }

    /**
     * Load plugins and use Eventy::action
     */
    public function load_plugins(){

        foreach (glob(__DIR__ . '/../../plugins/*.php') as $root_file) {
            require_once $root_file;
        }

        foreach (glob(__DIR__ . '/../../plugins/*/main.php') as $root_file) {
            require_once $root_file;
        }

        Eventy::action('plugins_loaded');
    }
}
