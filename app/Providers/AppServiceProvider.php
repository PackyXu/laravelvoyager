<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 填充中文数据
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('zh_CN');
        });

        $this->app->singleton(\Laravel\Scout\EngineManager::class, function ($app) {

            return new EngineManager($app);
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
