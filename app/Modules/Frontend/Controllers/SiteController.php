<?php

namespace Modules\Frontend\Controllers;

use App\Components\Controller;

class SiteController extends Controller {
    
    public function actionIndex(){
       return view('Frontend::index');
    }
    
}