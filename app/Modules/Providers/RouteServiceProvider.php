<?php

namespace Modules\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {
    
    protected $namespace = 'Modules\Frontend\Controllers'; // App\Http\Controllers

    public function boot(Router $router){
        parent::boot($router);
    }
    
    public function map(Router $router){
        $router->group(['namespace' => $this->namespace], function ($router) {
            $module  = str_replace('\Controllers', '', $this->namespace);
            require app_path($module. '/routes.php');
        });
    }
    
}