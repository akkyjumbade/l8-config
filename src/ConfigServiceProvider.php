<?php
namespace AkshayJumbade\Config;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider {
   function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'conf');
        $this->loadViewsFrom(__DIR__.'/views', 'conf');

        // publishes
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('conf.php'),
        ]);
   }
   function register() {

   }
}
