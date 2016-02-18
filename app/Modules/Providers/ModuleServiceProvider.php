<?php

namespace Modules\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends  ServiceProvider {
    
    public function boot(){
        
        $modules = config("modules");
        
        $pathModule  = ROOT_PATH . '/app/Modules';
        
        while (list(,$module) = each($modules)) {
            
            $nameModule  = ucfirst($module);
            
            $routeModule = $pathModule.'/'.$nameModule.'/routes.php';
            $dirView     = $pathModule.'/'.$nameModule.'/Views';
            
            if(file_exists($routeModule)) {
                include_once $routeModule;
            }
            if(is_dir($dirView)) {
                $this->loadViewsFrom($dirView, $nameModule);
            } 
            
        }
    }
    
    public function register(){
        //
    }
    
}