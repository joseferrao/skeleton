<?php

namespace App\Core\Providers;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Core\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::group(['namespace' => "{$this->namespace}", 'middleware' => 'web'], function (Registrar $router) {
            foreach (glob(app_path('Core//Http//Routes') . '/*.php') as $file) {
                $namespace = basename($file, '.php');

                $router->group(['namespace' => $namespace], function (Registrar $router) use ($namespace) {
                    $this->app->make("App\\Core\\Http\\Routes\\$namespace")->map($router);
                });
            }
        });
    }
}
